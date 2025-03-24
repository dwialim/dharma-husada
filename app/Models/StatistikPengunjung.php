<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class StatistikPengunjung extends Model
{
	protected $table = 'statistik_pengunjung';

	public static function store()
	{
		$date = date('Y-m-d', strtotime('now'));
		if ($store = StatistikPengunjung::where('tanggal', $date)->first()) {
			$store->total = $store->total + 1;
		} else {
			$store = new StatistikPengunjung;
			$store->id = Str::uuid();
			$store->total = 1;
			$store->tanggal = $date;
		}

		$store->save();
	}
}
