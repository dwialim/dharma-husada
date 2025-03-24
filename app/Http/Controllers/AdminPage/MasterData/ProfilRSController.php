<?php

namespace App\Http\Controllers\AdminPage\MasterData;

use App\Http\Controllers\Controller;
use App\Models\ProfilRS;
use Illuminate\Http\Request;
use DB;

class ProfilRSController extends Controller
{
	public function main()
	{
		$data = ProfilRS::first() ?? '';

		return view('admin-page.contents.master-data.profil-rs.main', compact('data'));
	}

	public function store(Request $request)
	{
		DB::beginTransaction();
		try {
			$store = ProfilRS::find($request->profil_rs_id) ?? new ProfilRS;

			$store->fill($request->only(['telepon', 'alamat', 'email', 'twitter', 'facebook', 'instagram', 'whatsapp', 'tiktok'])); # mass assignment
			$store->lat = $request->latitude;
			$store->lng = $request->longitude;

			if (!$store->save()) {
				DB::rollback();
				return response()->json(['message' => 'Data gagal dibuat, silahkan coba lagi!'], 500);
			}

			DB::commit();
			return response()->json(['message' => 'Data berhasil ' . ($request->profil_rs_id ? 'diperbarui' : 'dibuat') . '.'], 201);
		} catch (\Throwable $e) {
			DB::rollback();
			return response()->json(['message' => $e->getMessage()], 500);
		}
	}
}
