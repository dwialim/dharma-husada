<?php

namespace App\Http\Controllers\AdminPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManajemenInformasiController extends Controller
{
	public function main()
	{
		return view('admin-page.contents.informasi.main');
	}
}
