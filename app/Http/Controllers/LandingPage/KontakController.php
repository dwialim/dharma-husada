<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KontakController extends Controller
{
	public function main(Request $request)
	{
		return view('landing-page.page.kontak.main');
	}
}
