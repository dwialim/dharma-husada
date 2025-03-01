<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
	public function visiMisi(Request $request)
	{
		return view('landing-page.page.profil.visi-misi');
	}

	public function tugasPokok(Request $request)
	{
		return view('landing-page.page.profil.tugas-pokok');
	}
}
