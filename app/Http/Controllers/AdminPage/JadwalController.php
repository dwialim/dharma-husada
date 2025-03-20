<?php

namespace App\Http\Controllers\AdminPage;

use App\Helpers\Formatter;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostJadwalDokterKlinikRequest;
use App\Models\JadwalDokterKlinik;
use App\Models\JadwalDokterKlinikDetail;
use App\Models\MasterDokter;
use App\Models\MasterPoliKlinik;
use Illuminate\Http\Request;
use DataTables, DB;

class JadwalController extends Controller
{
	public function main()
	{
		return view('admin-page.contents.pelayanan.main');
	}

	public function datatable(Request $request)
	{
		return DataTables::eloquent(JadwalDokterKlinik::with(['dokter:id,nama', 'poli_klinik:id,nama', 'detail:id,jadwal_dokter_klinik_id,hari,hari_num,waktu_awal,waktu_akhir']))
			->addIndexColumn()
			->addColumn('action', fn($item) => view('partials.action-buttons', [
				'id' => $item->id, 'prefix' => ['u', 'd']
			])->render())
			->rawColumns(['action'])
			->toJson();
	}

	public function form(Request $request)
	{
		$btnAdd = view('partials.action-buttons', [
			'prefix' => ['c'], 'fs' => 21, 'class' => 'float-end fw-bolder', 'classI' => 'fw-bolder'
		])->render();

		$dokter = MasterDokter::all(['id', 'nama']);
		$poliKlinik = MasterPoliKlinik::all(['id', 'nama']);
		$jadwalDokterKlinik = "";

		if ($request->jadwal_dokter_klinik_id)
			$jadwalDokterKlinik = JadwalDokterKlinik::with(['dokter:id,nama', 'poli_klinik:id,nama', 'detail:id,jadwal_dokter_klinik_id,hari,hari_num,waktu_awal,waktu_akhir'])->find($request->jadwal_dokter_klinik_id);

		$content = view('admin-page.contents.pelayanan.form', compact(
			'jadwalDokterKlinik', 'dokter', 'poliKlinik', 'btnAdd'
		))->render();

		return response()->json([
			'message' => 'Ok',
			'data' => $content,
		], 200);
	}

	public function store(PostJadwalDokterKlinikRequest $request)
	{
		DB::beginTransaction();
		try {
			$store = JadwalDokterKlinik::find($request->jadwal_dokter_klinik_id) ?? new JadwalDokterKlinik;
			$store->poli_klinik_id = $request->poli_klinik;
			$store->dokter_id = $request->dokter;
			$store->save();

			$jdkId = [];
			if (is_array($request->jadwal_dokter_klinik_detail_id) && count($request->jadwal_dokter_klinik_detail_id)) {
				foreach($request->jadwal_dokter_klinik_detail_id as $key => $val){
					$isNew = $request->is_new[$key];
					if ($isNew == '0') {
						$storeDetail = JadwalDokterKlinikDetail::find($val);
					} else {
						$storeDetail = new JadwalDokterKlinikDetail;
					}
					$storeDetail = JadwalDokterKlinikDetail::find($val) ?? new JadwalDokterKlinikDetail;
					$storeDetail->jadwal_dokter_klinik_id = $store->id;
					$storeDetail->hari = Formatter::getHari($request->hari[$key]);
					$storeDetail->hari_num = $request->hari[$key];
					$storeDetail->waktu_awal = $request->waktu_awal[$key];
					$storeDetail->waktu_akhir = $request->waktu_akhir[$key] == null ? 'selesai' : $request->waktu_akhir[$key];
					if (!$storeDetail->save()) {
						DB::rollback();
						return response()->json(['message' => 'Data gagal disimpan'], 500);
					}

					array_push($jdkId, $storeDetail->id);
				}
			}

			if (count($jdkId)) {
				JadwalDokterKlinikDetail::where('jadwal_dokter_klinik_id', $store->id)->whereNotIn('id', $jdkId)->delete();
			}

			DB::commit();
			return response()->json(['message' => 'Data berhasil disimpan.'], 201);
		} catch (\Throwable $e) {
			DB::rollback();
			return response()->json(['message' => $e->getMessage(), 'data' => $request->all()], 500);
		}
	}

	public function destroy(Request $request)
	{
		DB::beginTransaction();
		try {
			$jadwalDokterKlinik = JadwalDokterKlinik::find($request->jadwal_dokter_klinik_id);

			$id = $jadwalDokterKlinik->id;

			if (!$jadwalDokterKlinik)
				return response()->json(['message' => 'Data tidak ditemukan / sudah dihapus, silahkan reload halaman'], 404);

			if (!$jadwalDokterKlinik->delete() || !JadwalDokterKlinikDetail::where('jadwal_dokter_klinik_id', $id)->delete()) {
				DB::rollback();
				return  response()->json(['message' => 'Gagal menghapus data, silahkan coba lagi!'], 500);
			}

			DB::commit();
			return response()->json(['message' => 'Data berhasil dihapus'], 200);
		} catch (\Throwable $e) {
			DB::rollback();
			return response()->json(['message' => $e->getMessage(), 'data' => $request->all()], 500);
		}
	}
}
