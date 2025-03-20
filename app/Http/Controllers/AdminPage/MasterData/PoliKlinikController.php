<?php

namespace App\Http\Controllers\AdminPage\MasterData;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostPoliKlinikRequest;
use App\Models\MasterPoliKlinik;
use Illuminate\Http\Request;
use DB, DataTables;

class PoliKlinikController extends Controller
{
	public function main()
	{
		return view('admin-page.contents.master-data.poli-klinik.main');
	}

	public function datatable(Request $request)
	{
		return DataTables::eloquent(MasterPoliKlinik::query())
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
			$poliKlinik = MasterPoliKlinik::find($request->poli_klinik_id);

		$content = view('admin-page.contents.master-data.poli-klinik.form', compact("poliKlinik"))->render();

		return response()->json([
			'message' => 'Ok',
			'data' => $content,
		], 200);
	}

	public function store(PostPoliKlinikRequest $request)
	{
		DB::beginTransaction();
		try {
			$store = MasterPoliKlinik::find($request->poli_klinik_id) ?? new MasterPoliKlinik;

			$store->fill($request->only(['nama'])); # mass assignment

			if (!$store->save()) {
				DB::rollback();
				return response()->json(['message' => 'Data gagal dibuat, silahkan coba lagi!'], 500);
			}

			DB::commit();
			return response()->json(['message' => 'Data berhasil ' . ($request->poli_klinik_id ? 'diperbarui' : 'dibuat') . '.'], 201);
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
