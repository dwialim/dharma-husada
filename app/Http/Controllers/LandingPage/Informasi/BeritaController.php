<?php

namespace App\Http\Controllers\LandingPage\Informasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
	private $menu = 'berita';

	public function main()
	{
		return view('landing-page.page.informasi.berita.main', ['menu' => $this->menu]);
	}
}
