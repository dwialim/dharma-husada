<?php

namespace App\Http\Controllers\AdminPage;

use App\Http\Controllers\Controller;
use App\Models\WaktuOperasional;
use Illuminate\Http\Request;
use DB;

class WaktuOperasionalController extends Controller
{
	public function main()
	{
		$data = collect(WaktuOperasional::all())->mapWithKeys(fn($item) => [$item['hari_num'] => $item])->toArray();

		return view('admin-page.contents.other.waktu-operasional', compact('data'));
	}

	public function store(Request $request)
	{
		DB::beginTransaction();
		try {
			$senin = WaktuOperasional::find($request->senin_id) ?? new WaktuOperasional;
			$senin->hari = 'senin';
			$senin->hari_num = 1;
			$senin->waktu_awal = $request->senin[0];
			$senin->waktu_akhir = $request->senin[1];
			$senin->save();

			$selasa = WaktuOperasional::find($request->selasa_id) ?? new WaktuOperasional;
			$selasa->hari = 'selasa';
			$selasa->hari_num = 2;
			$selasa->waktu_awal = $request->selasa[0];
			$selasa->waktu_akhir = $request->selasa[1];
			$selasa->save();

			$rabu = WaktuOperasional::find($request->rabu_id) ?? new WaktuOperasional;
			$rabu->hari = 'rabu';
			$rabu->hari_num = 3;
			$rabu->waktu_awal = $request->rabu[0];
			$rabu->waktu_akhir = $request->rabu[1];
			$rabu->save();

			$kamis = WaktuOperasional::find($request->kamis_id) ?? new WaktuOperasional;
			$kamis->hari = 'kamis';
			$kamis->hari_num = 4;
			$kamis->waktu_awal = $request->kamis[0];
			$kamis->waktu_akhir = $request->kamis[1];
			$kamis->save();

			$jumat = WaktuOperasional::find($request->jumat_id) ?? new WaktuOperasional;
			$jumat->hari = 'jumat';
			$jumat->hari_num = 5;
			$jumat->waktu_awal = $request->jumat[0];
			$jumat->waktu_akhir = $request->jumat[1];
			$jumat->save();

			$sabtu = WaktuOperasional::find($request->sabtu_id) ?? new WaktuOperasional;
			$sabtu->hari = 'sabtu';
			$sabtu->hari_num = 6;
			$sabtu->waktu_awal = $request->sabtu[0];
			$sabtu->waktu_akhir = $request->sabtu[1];
			$sabtu->save();

			$minggu = WaktuOperasional::find($request->minggu_id) ?? new WaktuOperasional;
			$minggu->hari = 'minggu';
			$minggu->hari_num = 7;
			$minggu->waktu_awal = $request->minggu[0];
			$minggu->waktu_akhir = $request->minggu[1];
			$minggu->save();

			DB::commit();
			return response()->json(['message' => 'Data berhasil disimpan'], 200);
		} catch (\Throwable $e) {
			DB::rollback();
			 return response()->json(['message' => $e->getFile()], 500);
		}
	}
}
