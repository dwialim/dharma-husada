<?php

namespace App\Http\Controllers\AdminPage;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostSambutanPimpinanRequest;
use App\Models\SambutanPimpinan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class SambutanPimpinanController extends Controller
{
	public function main()
	{
		$data = SambutanPimpinan::first() ?? '';

		return view('admin-page.contents.other.sambutan-pimpinan', compact('data'));
	}

	public function store(PostSambutanPimpinanRequest $request)
	{
		DB::beginTransaction();
		try {
			$file = $request->file('gambar');
			$fileName = $file ? date('His') . '-' . $file->getClientOriginalName() : '';
			$directory = 'sambutan-pimpinan/' . date('Y-m-d') . '/' . $fileName;

			$store = SambutanPimpinan::first() ?? new SambutanPimpinan;

			if ($file) {
				if (!Storage::putFileAs('sambutan-pimpinan/' . date('Y-m-d'), $file, $fileName)) {
					DB::rollback();
					return response()->json(['message' => 'Gagal menyimpan gambar, silahkan coba lagi!'], 500);
				}

				if (!empty($store->gambar) && Storage::exists($store->gambar))
					Storage::delete($store->gambar); # Hapus gambar lama jika ada

				$store->gambar = $directory;
			}

			$store->content = $request->content;
			$store->save();

			DB::commit();
			return response()->json(['message' => 'Data berhasil disimpan.'], $request->sambutan_pimpinan_id ? 200 : 201);
		} catch (\Throwable $e) {
			DB::rollback();
			return response()->json(['message' => $e->getMessage()], 500);
		}
	}
}
