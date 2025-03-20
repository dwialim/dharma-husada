<?php

namespace App\Http\Controllers\AdminPage\Profil;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostTugasFungsiRequest;
use App\Models\TugasFungsi;
use Illuminate\Http\Request;
use DB;

class TugasFungsiController extends Controller
{
	public function main()
	{
		$data = TugasFungsi::first();
		return view('admin-page.contents.profil.tugas-fungsi.main', compact('data'));
	}

	public function store(PostTugasFungsiRequest $request)
	{
		// return response()->json(['message' => 'Data berhasil disimpan.', 'data' => $request->all()], 201);
		DB::beginTransaction();
		try {
			$tugasFungsi = TugasFungsi::first() ?? new TugasFungsi;
			$tugasFungsi->content = $request->content;
			$tugasFungsi->save();

			DB::commit();
			return response()->json(['message' => 'Data berhasil disimpan.'], $request->tugas_fungsi_id ? 200 : 201);
		} catch (\Throwable $e) {
			DB::rollback();
			return response()->json(['message' => $e->getMessage()], 500);
		}
	}
}
