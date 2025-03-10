<?php

namespace App\Http\Controllers\LandingPage\Informasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
	private $menu = 'pengumuman';

	public function main()
	{
		return view('landing-page.page.informasi.pengumuman.main', ['menu' => $this->menu]);
	}
}
