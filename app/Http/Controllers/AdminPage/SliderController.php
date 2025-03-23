<?php

namespace App\Http\Controllers\AdminPage;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostSliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use DataTables, DB;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
	public function main()
	{
		$data = Slider::first() ?? '';

		return view('admin-page.contents.other.slider.main', compact('data'));
	}

	public function datatable(Request $request)
	{
		return DataTables::eloquent(Slider::query())
			->addIndexColumn()
			->addColumn('action', fn($item) => view('partials.action-buttons', [
				'id' => $item->id, 'prefix' => ['u', 'd']
			])->render())
			->rawColumns(['action'])
			->toJson();
	}

	public function form(Request $request)
	{
		$slider = Slider::find($request->slider_id) ?? '';

		$content = view('admin-page.contents.other.slider.form', compact("slider"))->render();

		return response()->json([
			'message' => 'Ok',
			'data' => $content,
		], 200);
	}

	public function store(PostSliderRequest $request)
	{
		DB::beginTransaction();
		try {
			$file = $request->file('gambar');
			$fileName = $file ? date('His') . '-' . $file->getClientOriginalName() : '';
			$directory = 'slider/' . date('Y-m-d') . '/' . $fileName;

			$store = Slider::find($request->slider_id) ?? new Slider;

			if ($file) {
				if (!Storage::putFileAs('slider/' . date('Y-m-d'), $file, $fileName)) {
					DB::rollback();
					return response()->json(['message' => 'Gagal menyimpan gambar, silahkan coba lagi!'], 500);
				}

				if (!empty($store->gambar) && Storage::exists($store->gambar))
					Storage::delete($store->gambar); # Hapus gambar lama jika ada

				$store->gambar = $directory;
			}

			$store->fill($request->only(['judul', 'content'])); # mass assignment

			if (!$store->save()) {
				DB::rollback();
				return response()->json(['message' => 'Data gagal dibuat, silahkan coba lagi!'], 500);
			}

			DB::commit();
			return response()->json(['message' => 'Data berhasil ' . ($request->slider_id ? 'diperbarui' : 'dibuat') . '.'], $request->slider_id ? 200 : 201);
		} catch (\Throwable $e) {
			DB::rollback();
			return response()->json(['message' => $e->getMessage()], 500);
		}
	}

	public function destroy(Request $request)
	{
		$slider = Slider::find($request->slider_id);

		if (!$slider)
			return response()->json(['message' => 'Data tidak ditemukan / sudah dihapus, silahkan reload halaman'], 404);

		if (!empty($slider->gambar) && Storage::exists($slider->gambar))
			Storage::delete($slider->gambar); # Hapus gambar lama jika ada

		return $slider->delete()
			? response()->json(['message' => 'Data berhasil dihapus'], 200)
			: response()->json(['message' => 'Gagal menghapus data, silahkan coba lagi!'], 500);
	}
}
