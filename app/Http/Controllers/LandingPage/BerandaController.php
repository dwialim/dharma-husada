<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
	private $menu = 'beranda';

	public function main(Request $request)
	{
		$ip = $this->getIp();
		if ($ip != '103.189.201.88')
			\Log::debug($ip);

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

		$data['dokter'] = collect($arrayDokter)->random(4);
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
}
