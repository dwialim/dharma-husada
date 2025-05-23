<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\MasterDokter;
use App\Models\ProfilRS;
use App\Models\SambutanPimpinan;
use App\Models\Slider;
use App\Models\StatistikPengunjung;
use App\Models\WaktuOperasional;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
	private $menu = 'beranda';

	public function main(Request $request)
	{
		// $ip = $this->getIp();
		// if ($ip != '103.189.201.14')
		// 	\Log::debug($ip);

		$arrayDokter = [
			// '1a.png',
			'as.png',
			'dr Krisna.jpg',
			'dr. Ahmad Zamah Syari_00000.png',
			'DR. NICHOLAS BIRU.png',
			'dr.danur.png',
			'dr.yuning.png',
			'DR.ZAINUL.png',
			'WhatsApp_Image_2024-12-05_at_12.47.39-removebg-preview.png',
		];

		$data['slider'] = Slider::all();
		$data['dokter'] = MasterDokter::has('jadwal')
			->with(['jadwal.poli_klinik', 'jadwal.detail'])
			->inRandomOrder()->limit(4)->get();
		$data['sambutan'] = SambutanPimpinan::first();
		$data['menu'] = $this->menu;

		return view('landing-page.page.beranda.main', $data);
	}

	public function getIp(){
		foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
			if (array_key_exists($key, $_SERVER) === true){
				foreach (explode(',', $_SERVER[$key]) as $ip){
					$ip = trim($ip); // just to be safe
					if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
						return $ip;
					}
				}
			}
		}
		return request()->ip(); // it will return the server IP if the client IP is not found using this method.
	}

	public function dataFooter(Request $request)
	{
		$data = collect(WaktuOperasional::all())->mapWithKeys(fn($item) => [$item['hari_num'] => $item])->toArray();
		$timestamps = strtotime('now');

		if (count($data))
			return response()->json(['message' => 'Ok', 'data' => [
				'waktu_operasional' => $data,
				'profil' => ProfilRS::first() ?? '',
				'stats' => [
					'hari' => StatistikPengunjung::where('tanggal', date('Y-m-d', $timestamps))->sum('total'),
					'bulan' => StatistikPengunjung::whereMonth('tanggal', date('m', $timestamps))->sum('total'),
					'total' => StatistikPengunjung::sum('total'),
				]
			]], 200);

		return response()->json(['message' => 'No content'], 204);
	}

	public function sambutanPimpinan(Request $request)
	{
		if ($data = SambutanPimpinan::first())
			return response()->json(['message' => 'Ok', 'data' => $data], 200);

		return response()->json(['message' => 'No content'], 204);
	}
}
