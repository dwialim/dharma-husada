<?php

namespace App\Http\Controllers\AdminPage\MasterData;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostDokterRequest;
use App\Models\MasterDokter;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB, DataTables;
use Illuminate\Support\Facades\Storage;

class DokterController extends Controller
{
	public function main()
	{
		// return MasterDokter::all();
		// return Str::uuid();
		return view('admin-page.contents.master-data.dokter.main');
	}

	public function datatable(Request $request)
	{
		return DataTables::eloquent(MasterDokter::query())
			->addIndexColumn()
			->addColumn('action', fn($item) => view('partials.action-buttons', [
				'id' => $item->id, 'prefix' => ['u', 'd']
			])->render())
			->rawColumns(['action'])
			->toJson();
	}

	public function form(Request $request)
	{
		$dokter = "";
		if ($request->dokter_id)
			$dokter = MasterDokter::find($request->dokter_id);

		$content = view('admin-page.contents.master-data.dokter.form', compact("dokter"))->render();

		return response()->json([
			'message' => 'Ok',
			'data' => $content,
		], 200);
	}

	public function store(PostDokterRequest $request)
	{
		DB::beginTransaction();
		try {
			$file = $request->file('gambar');
			$fileName = $file ? date('His') . '-' . $file->getClientOriginalName() : '';
			$directory = 'dokter/' . date('Y-m-d') . '/' . $fileName;

			$store = MasterDokter::find($request->dokter_id) ?? new MasterDokter;

			if ($file) {
				if (!Storage::putFileAs('dokter/' . date('Y-m-d'), $file, $fileName)) {
					DB::rollback();
					return response()->json(['message' => 'Gagal menyimpan gambar, silahkan coba lagi!'], 500);
				}

				if (!empty($store->gambar) && Storage::exists($store->gambar))
					Storage::delete($store->gambar); # Hapus gambar lama jika ada

				$store->gambar = $directory;
			}

			$store->fill($request->only(['nama', 'twitter', 'facebook', 'instagram', 'linkedin'])); # mass assignment

			if (!$store->save()) {
				DB::rollback();
				return response()->json(['message' => 'Data gagal dibuat, silahkan coba lagi!'], 500);
			}

			DB::commit();
			return response()->json(['message' => 'Data berhasil ' . ($request->dokter_id ? 'diperbarui' : 'dibuat') . '.'], 201);
		} catch (\Throwable $e) {
			DB::rollback();
			return response()->json(['message' => $e->getMessage()], 500);
		}
	}

	public function destroy(Request $request)
	{
		$dokter = MasterDokter::find($request->dokter_id);

		if (!$dokter)
			return response()->json(['message' => 'Data tidak ditemukan / sudah dihapus, silahkan reload halaman'], 404);

		if (!empty($dokter->gambar) && Storage::exists($dokter->gambar))
			Storage::delete($dokter->gambar); # Hapus gambar lama jika ada

		return $dokter->delete()
			? response()->json(['message' => 'Data berhasil dihapus'], 200)
			: response()->json(['message' => 'Gagal menghapus data, silahkan coba lagi!'], 500);
	}
}
