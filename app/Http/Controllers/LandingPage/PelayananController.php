<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\JadwalDokterKlinik;
use App\Models\MasterPoliKlinik;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
	private $menu = 'pelayanan';

	public function jadwalPoli()
	{
		// 'as.png',
		// 'dr Krisna.jpg',
		// 'dr. Ahmad Zamah Syari_00000.png',
		// 'DR. NICHOLAS BIRU.png',
		// 'dr.danur.png',
		// 'dr.yuning.png',
		// 'DR.ZAINUL.png',
		// 'WhatsApp_Image_2024-12-05_at_12.47.39-removebg-preview.png',
		// return $data['jadwal']['poli'];
		$poliKlinik = MasterPoliKlinik::all(['id', 'nama']);
		$jadwal = MasterPoliKlinik::has('jadwal')
		->with(['jadwal.dokter', 'jadwal.detail'])
		->get();
		// $jadwal = JadwalDokterKlinik::with(['dokter:id,nama', 'poli_klinik:id,nama', 'detail:id,jadwal_dokter_klinik_id,hari,hari_num,waktu_awal,waktu_akhir'])->get(['id','poli_klinik_id','dokter_id']);
		// $jadwal = MasterPoliKlinik::with([''])
		// $jadwal = [
		// 	[
		// 		'poli' => 'Fisioterapi',
		// 		'dokter' => [
		// 			[
		// 				'nama' => 'dr. Alex',
		// 				'gambar' => 'as.png'
		// 			],
		// 			[
		// 				'nama' => 'dr. Krisna',
		// 				'gambar' => 'dr Krisna.jpg'
		// 			],
		// 			[
		// 				'nama' => 'dr. Ahmad Zamah Syari',
		// 				'gambar' => 'dr. Ahmad Zamah Syari_00000.png'
		// 			],
		// 		],
		// 	],
		// 	[
		// 		'poli' => 'Anastesi',
		// 		'dokter' => [
		// 			[
		// 				'nama' => 'dr. Danur',
		// 				'gambar' => 'dr.danur.png'
		// 			],
		// 			[
		// 				'nama' => 'dr. Nicholas',
		// 				'gambar' => 'DR. NICHOLAS BIRU.png'
		// 			],
		// 			// [
		// 			// 	'nama' => 'dr. Ahmad Zamah Syari',
		// 			// 	'gambar' => 'dr. Ahmad Zamah Syari_00000.png'
		// 			// ],
		// 		],
		// 	],
		// ];

		$data = [
			'poliKlinik' => $poliKlinik,
			'jadwal' => json_decode(json_encode($jadwal)),
			'menu' => $this->menu
		];

		return view('landing-page.page.pelayanan.main', $data);
	}

	public function jadwalDokter()
	{
		return view('landing-page.page.pelayanan.main');
	}

	public function searchDokter(Request $request)
	{
		$jadwal = MasterPoliKlinik::has('jadwal')
		->with(['jadwal.dokter', 'jadwal.detail'])
		->get();

		if (count($jadwal))
			return response()->json(['message' => 'Belum ada jadwal dokter', 'data' => $jadwal], 200);

		return response()->json(['message' => 'Ok', 'data' => $jadwal], 200);
	}

	public function testing(Request $request)
	{
		date_default_timezone_set("Asia/Jakarta");

		$currentTime = date("H:i");
		$kioskTime = "06:30"; # Jam buka kiosk
		$checkInTime = "23:00"; # Batas waktu konfirmasi
		$currentDate = strtotime(date("Y-m-d")); # Batas waktu konfirmasi

		$pesanLink = "CHECK-IN SUDAH KEDALUWARSA";
		$status = "lewat";
		$request->request->add([ # For ShortLink::filterByCode()
			"code" => 50,
			"isActive" => false,
		]);

		$shortLink = json_decode(json_encode(['bot_pasien_id' => 50]));

		// return $shortLink;

		$request->request->add([ # For ChatBotPasien::filterById
			"idBotPasien" => $shortLink->bot_pasien_id,
		]);

		$chatBotPasien = (object)[
			'is_active' => true,
			'tanggal_berobat' => date("Y-m-d", strtotime('now')),
			'tanggal_us' => date("Y-m-d", strtotime('now')),
			'kode_poli_bpjs' => 'ANA'
		];

		$isActive = $chatBotPasien->is_active;
		$tanggalBerobat = strtotime($chatBotPasien->tanggal_berobat);
		if($isActive){
			if($tanggalBerobat==$currentDate && $kioskTime<=$currentTime && $checkInTime>$currentTime){
				$pesanLink = "CHECK-IN KEDALUWARSA DALAM";
				$status = "tepat";
			}
			if($tanggalBerobat>$currentDate || ($tanggalBerobat==$currentDate && $kioskTime>$currentTime)){
				$pesanLink = "CHECK-IN AKTIF DALAM";
				$status = "belum";
			}
			if($tanggalBerobat<$currentDate){
				abort(404);
			}
		}
		if(!$isActive){
			$pesanLink = "CHECK-IN SUDAH DILAKUKAN";
			$status = "sudah";
		}
		$request->request->add([ # For MasterPoli::filterKodeBpjs()
			"kodeBpjs" => $chatBotPasien->kode_poli_bpjs
		]);

		$poli = (object)[

		];

		$data = [
			"chatBotPasien" => $chatBotPasien,
			"status" => $status,
			"shortLink" => $shortLink,
			"pesanLink" => $pesanLink,
			"kioskTime" => $kioskTime,
			"checkInTime" => $checkInTime,
			"poli" => $poli,
		];

		return view('landing-page.page.pelayanan.test', $data);
		// return view('landing-page.page.pelayanan.test');
	}
}
