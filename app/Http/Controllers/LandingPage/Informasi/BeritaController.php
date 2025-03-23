<?php

namespace App\Http\Controllers\LandingPage\Informasi;

use App\Http\Controllers\Controller;
use App\Models\ManajemenInformasi;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
	private $menu = 'berita';

	public function main()
	{
		$berita = ManajemenInformasi::where('kategori', 'berita')->get();

		return view('landing-page.page.informasi.berita.main', ['menu' => $this->menu, 'berita' => $berita]);
	}

	public function detail(Request $request, $id)
	{
		$berita = ManajemenInformasi::find($id);

		return view('landing-page.page.informasi.berita.detail', ['menu' => $this->menu, 'berita' => $berita]);
	}
}
