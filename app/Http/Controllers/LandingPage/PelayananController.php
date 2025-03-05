<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
	public function jadwalPoli()
	{
		return view('landing-page.page.pelayanan.main');
	}

	public function jadwalDokter()
	{
		return view('landing-page.page.pelayanan.main');
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
