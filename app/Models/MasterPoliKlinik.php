<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MasterPoliKlinik extends Model
{
	protected $table = 'master_poli_klinik';

	protected $fillable = ['nama'];

	public function jadwal(): HasMany
	{
		return $this->hasMany(JadwalDokterKlinik::class, 'poli_klinik_id', 'id');
	}
}
