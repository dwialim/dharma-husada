<?php

namespace App\Http\Controllers\AdminPage\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilRSController extends Controller
{
	public function main()
	{
		return view('admin-page.contents.master-data.profil-rs.main');
	}
}
