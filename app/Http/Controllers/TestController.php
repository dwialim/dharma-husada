<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
	public function main()
	{
		// return "Test";
		// return view('handling-page.404');

		// return view('landing-page.main');
		return view('testing.test');
		// return view('testing.pan');
		// return 'halo';
	}

	public function form(Request $request)
	{
		return response()->json(['data' => view('testing.test-content')->render()]);
	}
}
