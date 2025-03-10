<?php

namespace App\Http\Controllers\LandingPage\Profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TugasFungsiController extends Controller
{
	private $menu = 'tugas-fungsi';

	public function main(Request $request)
	{
		return view('landing-page.page.profil.tugas-pokok', ['menu' => $this->menu]);
	}
}
