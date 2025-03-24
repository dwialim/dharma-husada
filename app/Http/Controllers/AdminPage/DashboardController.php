<?php

namespace App\Http\Controllers\AdminPage;

use App\Http\Controllers\Controller;
use App\Models\StatistikPengunjung;
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

		$timeCur = strtotime('now');
		$timeBegin = strtotime('first day of last month');

		$bulanLalu = StatistikPengunjung::whereMonth('tanggal', date('m', $timeBegin))->sum('total');
		$bulanIni = StatistikPengunjung::whereMonth('tanggal', date('m', $timeCur))->sum('total');
		$total = number_format(StatistikPengunjung::sum('total'), 0, '.', ',');

		$hitung = $bulanLalu > 0 ? (($bulanIni - $bulanLalu) / $bulanLalu) * 100 : 0;
		// $persentase = $hitung <= 0 ? 0 : round($hitung, 2);
		$persentase = round($hitung, 1);
		$bulanIni = number_format($bulanIni, 0, '.', ',');

		$data = [
			'total' => $total,
			'bulan_lalu' => $bulanLalu,
			'bulan_ini' => $bulanIni,
			'persentase' => $persentase,
			'color' => $persentase < 0 ? 'danger' : 'primary',
			'font' =>  $persentase < 0 ? 'down' : 'up',
		];

		return view('admin-page.contents.dashboard.main', compact('data'));
	}
}
