<?php

namespace App\Http\Controllers\AdminPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WaktuOperasionalController extends Controller
{
	public function main()
	{
		return view('admin-page.contents.other.main');
	}
}
