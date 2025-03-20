<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JadwalDokterKlinik extends Model
{
	protected $table = 'jadwal_dokter_klinik';

	public function detail(): HasMany
	{
		return $this->hasMany(JadwalDokterKlinikDetail::class, 'jadwal_dokter_klinik_id', 'id');
	}

	public function dokter(): BelongsTo
	{
		return $this->belongsTo(MasterDokter::class, 'dokter_id', 'id');
	}

	public function poli_klinik(): BelongsTo
	{
		return $this->belongsTo(MasterPoliKlinik::class, 'poli_klinik_id', 'id');
	}
}
