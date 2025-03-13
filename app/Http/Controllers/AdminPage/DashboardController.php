<?php

namespace App\Http\Controllers\AdminPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
	public function main()
	{
		$log = [
			'time' => date("Y-m-d \TH:i:s\Z"), // Format waktu ISO 8601
			'level' => strtolower('debug'), // Konversi level ke lowercase
			'message' => "Testing log", // Pesan error
			// 'duration' => 120 ?? null, // Durasi jika ada
		];
		// Log::debug(json_encode($log));

		return view('admin-page.contents.dashboard.main');
	}
}
