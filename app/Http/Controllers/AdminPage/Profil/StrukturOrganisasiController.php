<?php

namespace App\Http\Controllers\AdminPage\Profil;

use App\Http\Controllers\Controller;
use App\Http\Requests\StrukturOrganisasiRequest;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class StrukturOrganisasiController extends Controller
{
	public function main()
	{
		$data = StrukturOrganisasi::first();
		return view('admin-page.contents.profil.struktur-organisasi.main', compact('data'));
	}

	public function store(StrukturOrganisasiRequest $request)
	{
		DB::beginTransaction();
		try {
			$file = $request->file('gambar');
			$fileName = $file ? date('His') . '-' . $file->getClientOriginalName() : '';
			$directory = 'struktur-organisasi/' . date('Y-m-d') . '/' . $fileName;

			$store = StrukturOrganisasi::first() ?? new StrukturOrganisasi;

			if (!Storage::putFileAs('struktur-organisasi/' . date('Y-m-d'), $file, $fileName)) {
				DB::rollback();
				return response()->json(['message' => 'Gagal menyimpan gambar, silahkan coba lagi!'], 500);
			}

			if (!empty($store->gambar) && Storage::exists($store->gambar))
				Storage::delete($store->gambar); # Hapus gambar lama jika ada

			$store->gambar = $directory;

			if (!$store->save()) {
				DB::rollback();
				return response()->json(['message' => 'Data gagal dibuat, silahkan coba lagi!'], 500);
			}

			DB::commit();
			return response()->json(['message' => 'Data berhasil ' . ($request->struktur_organisasi_id ? 'diperbarui' : 'dibuat') . '.'], $request->struktur_organisasi_id ? 200 : 201);
		} catch (\Throwable $e) {
			DB::rollback();
			return response()->json(['message' => $e->getMessage()], 500);
		}
	}
}
