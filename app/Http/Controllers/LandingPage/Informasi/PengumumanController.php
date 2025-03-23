<?php

namespace App\Http\Controllers\LandingPage\Informasi;

use App\Http\Controllers\Controller;
use App\Models\ManajemenInformasi;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
	private $menu = 'pengumuman';

	public function main()
	{
		$pengumuman = ManajemenInformasi::where('kategori', 'pengumuman')->get();

		return view('landing-page.page.informasi.pengumuman.main', ['menu' => $this->menu, 'pengumuman' => $pengumuman]);
	}

	public function detail(Request $request, $id)
	{
		$pengumuman = ManajemenInformasi::find($id);

		return view('landing-page.page.informasi.pengumuman.detail', ['menu' => $this->menu, 'pengumuman' => $pengumuman]);
	}
}
