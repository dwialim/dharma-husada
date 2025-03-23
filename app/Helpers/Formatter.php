<?php

namespace App\Helpers;

use DateTime;
use Help, Validator, Config;

class Formatter {
	public static function dateIndo($date)
	{
		$timestamps = strtotime($date);
		$day = date('d', $timestamps);
		$month = self::getBulan(date('n', $timestamps));
		$year = date('Y', $timestamps);
		$hari = self::getHari(date('N', $timestamps));
		return "$hari, $day $month $year";
	}

	public static function getBulan($bln){
		switch ($bln) {
			case 1:
				return "Januari";
				break;
			case 2:
				return "Februari";
				break;
			case 3:
				return "Maret";
				break;
			case 4:
				return "April";
				break;
			case 5:
				return "Mei";
				break;
			case 6:
				return "Juni";
				break;
			case 7:
				return "Juli";
				break;
			case 8:
				return "Agustus";
				break;
			case 9:
				return "September";
				break;
			case 10:
				return "Oktober";
				break;
			case 11:
				return "November";
				break;
			case 12:
				return "Desember";
				break;
		}
	}

	public static function getHari($num){
		$num = ($num < 1 || $num > 7 ? 1 : $num) -1;
		// $tgl = (int) $tgl;
		// $bln = (int) $bln;
		// $thn = (int) $thn;
		// $info = date('w', mktime(0, 0, 0, $bln, $tgl, $thn));
		return ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'][$num];
	}
}