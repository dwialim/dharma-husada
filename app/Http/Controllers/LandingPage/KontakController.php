<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\ProfilRS;
use Illuminate\Http\Request;

class KontakController extends Controller
{
	private $menu = 'kontak';

	public function main(Request $request)
	{
		return view('landing-page.page.kontak.main', ['menu' => $this->menu, 'data' => ProfilRS::first() ?? '']);
	}
}
