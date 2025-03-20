<?php

namespace App\Http\Controllers\AdminPage\Profil;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostVisiMisiRequest;
use App\Models\VisiMisi;
use Illuminate\Http\Request;
use DataTables, DB;

class VisiMisiController extends Controller
{
	public function main()
	{
		$btnAdd = view('partials.action-buttons', [
			'prefix' => ['c'], 'fs' => 21, 'class' => 'float-end fw-bolder', 'classI' => 'fw-bolder'
		])->render();

		$data = [];
		foreach (VisiMisi::all(['id', 'kategori', 'content']) as $item) {
			if ($item['kategori'] === 'misi') {
				$data['misi'][] = $item; // Tetap array untuk kategori "misi"
			} else {
				$data[$item['kategori']] = $item; // Selain "misi", jadi objek (array 1 elemen)
			}
		}
		$data = json_decode(json_encode($data));

		return view('admin-page.contents.profil.visi-misi.main', compact('btnAdd', 'data'));
	}

	public function datatable(Request $request)
	{
		return DataTables::eloquent(VisiMisi::query())
			->addIndexColumn()
			->addColumn('action', fn($item) => view('partials.action-buttons', [
				'id' => $item->id, 'prefix' => ['u', 'd']
			])->render())
			->rawColumns(['action'])
			->toJson();
	}

	public function form(Request $request)
	{
		$poliKlinik = "";
		if ($request->poli_klinik_id)
			$poliKlinik = VisiMisi::find($request->poli_klinik_id);

		$content = view('admin-page.contents.profil.visi-misi.form', compact("poliKlinik"))->render();

		return response()->json([
			'message' => 'Ok',
			'data' => $content,
		], 200);
	}

	public function store(PostVisiMisiRequest $request)
	{
		DB::beginTransaction();
		try {
			$visi = VisiMisi::where('kategori', 'visi')->first() ?? new VisiMisi;
			$visi->kategori = 'visi';
			$visi->content = $request->visi;
			$visi->save();

			$motto = VisiMisi::where('kategori', 'motto')->first() ?? new VisiMisi;
			$motto->kategori = 'motto';
			$motto->content = $request->motto;
			$motto->save();

			$visiMisiId = [];
			if (is_array($request->misi_id) && count($request->misi_id)) {
				foreach($request->misi_id as $key => $val){
					$isNew = $request->is_new[$key];
					if ($isNew == '0') {
						$misi = VisiMisi::where(['kategori' => 'misi', 'id' => $val])->first();
					} else {
						$misi = new VisiMisi;
					}
					$misi->kategori = 'misi';
					$misi->content = $request->misi[$key];
					$misi->save();
					if (!$misi->save()) {
						DB::rollback();
						return response()->json(['message' => 'Data gagal disimpan, silahkan coba lagi'], 500);
					}

					array_push($visiMisiId, $misi->id);
				}
			}

			if (count($visiMisiId)) {
				VisiMisi::where('kategori', 'misi')->whereNotIn('id', $visiMisiId)->delete();
			}

			DB::commit();
			return response()->json(['message' => 'Data berhasil disimpan.'], 201);
		} catch (\Throwable $e) {
			DB::rollback();
			return response()->json(['message' => $e->getMessage()], 500);
		}
	}

	public function destroy(Request $request)
	{
		$poliKlinik = MasterPoliKlinik::find($request->poli_klinik_id);

		if (!$poliKlinik)
			return response()->json(['message' => 'Data tidak ditemukan / sudah dihapus, silahkan reload halaman'], 404);

		return $poliKlinik->delete()
			? response()->json(['message' => 'Data berhasil dihapus'], 200)
			: response()->json(['message' => 'Gagal menghapus data, silahkan coba lagi!'], 500);
	}
}
