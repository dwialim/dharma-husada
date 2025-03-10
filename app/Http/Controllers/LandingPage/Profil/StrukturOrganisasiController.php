<?php

namespace App\Http\Controllers\LandingPage\Profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{
	private $menu = 'struktur-organisasi';

	public function main(Request $request)
	{
		return view('landing-page.page.profil.struktur-organisasi', ['menu' => $this->menu]);
	}
}
