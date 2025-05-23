<?php

namespace App\Http\Controllers\AdminPage;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostManajemenInformasiRequest;
use App\Models\ManajemenInformasi;
use Illuminate\Http\Request;
use DB, DataTables;
use Illuminate\Support\Facades\Storage;

class ManajemenInformasiController extends Controller
{
	public function main()
	{
		return view('admin-page.contents.informasi.main');
	}

	public function datatable(Request $request)
	{
		return DataTables::eloquent(ManajemenInformasi::query())
			->addIndexColumn()
			->editColumn('kategori', fn($row) => ucfirst($row->kategori))
			->addColumn('action', fn($item) => view('partials.action-buttons', [
				'id' => $item->id, 'prefix' => ['u', 'd']
			])->render())
			->rawColumns(['action'])
			->toJson();
	}

	public function form(Request $request)
	{
		$manajemenInformasi = "";
		if ($request->manajemen_informasi_id)
			$manajemenInformasi = ManajemenInformasi::find($request->manajemen_informasi_id);

		$content = view('admin-page.contents.informasi.form', compact("manajemenInformasi"))->render();

		return response()->json([
			'message' => 'Ok',
			'data' => $content,
		], 200);
	}

	public function store(PostManajemenInformasiRequest $request)
	{
		DB::beginTransaction();
		try {
			$file = $request->file('gambar');
			$fileName = $file ? date('His') . '-' . $file->getClientOriginalName() : '';
			$directory = "manajemen-informasi/" . date('Y-m-d') . '/' . $fileName;

			$store = ManajemenInformasi::find($request->manajemen_informasi_id) ?? new ManajemenInformasi;

			if ($file) {
				if (!Storage::putFileAs("manajemen-informasi/" . date('Y-m-d'), $file, $fileName)) {
					DB::rollback();
					return response()->json(['message' => 'Gagal menyimpan gambar, silahkan coba lagi!'], 500);
				}

				if (!empty($store->gambar) && Storage::exists($store->gambar))
					Storage::delete($store->gambar); # Hapus gambar lama jika ada

				$store->gambar = $directory;
			}

			$store->judul = $request->judul;
			$store->kategori = $request->kategori;
			$store->content = $request->content;

			if (!$store->save()) {
				DB::rollback();
				return response()->json(['message' => 'Data gagal dibuat, silahkan coba lagi!'], 500);
			}

			DB::commit();
			return response()->json(['message' => 'Data berhasil ' . ($request->manajemen_informasi_id ? 'diperbarui' : 'dibuat') . '.'], $request->manajemen_informasi_id ? 200 : 201);
		} catch (\Throwable $e) {
			DB::rollback();
			return response()->json(['message' => $e->getMessage()], 500);
		}
	}

	public function destroy(Request $request)
	{
		$manajemenInformasi = ManajemenInformasi::find($request->manajemen_informasi_id);

		if (!$manajemenInformasi)
			return response()->json(['message' => 'Data tidak ditemukan / sudah dihapus, silahkan reload halaman'], 404);

		if (!empty($manajemenInformasi->gambar) && Storage::exists($manajemenInformasi->gambar))
			Storage::delete($manajemenInformasi->gambar); # Hapus gambar lama jika ada

		return $manajemenInformasi->delete()
			? response()->json(['message' => 'Data berhasil dihapus'], 200)
			: response()->json(['message' => 'Gagal menghapus data, silahkan coba lagi!'], 500);
	}
}
