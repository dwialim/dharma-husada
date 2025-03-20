<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JadwalDokterKlinikDetail extends Model
{
	protected $table = 'jadwal_dokter_klinik_detail';

	public function detail(): BelongsTo
	{
		return $this->belongsTo(JadwalDokterKlinik::class, 'jadwal_dokter_klinik_id', 'id');
	}
}
