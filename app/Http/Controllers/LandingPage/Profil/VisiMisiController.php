<?php

namespace App\Http\Controllers\LandingPage\Profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
	private $menu = 'visi-misi';

	public function main(Request $request)
	{
		return view('landing-page.page.profil.visi-misi', ['menu' => $this->menu]);
	}
}
