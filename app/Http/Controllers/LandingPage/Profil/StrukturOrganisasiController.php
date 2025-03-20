<?php

namespace App\Http\Controllers\LandingPage\Profil;

use App\Http\Controllers\Controller;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{
	private $menu = 'struktur-organisasi';

	public function main(Request $request)
	{
		$data = StrukturOrganisasi::first();
		return view('landing-page.page.profil.struktur-organisasi', ['menu' => $this->menu, 'data' => $data]);
	}
}
