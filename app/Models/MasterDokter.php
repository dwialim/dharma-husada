<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MasterDokter extends Model
{
	protected $table = 'master_dokter';
	protected $fillable = ['nama', 'gambar', 'twitter', 'facebook', 'instagram', 'linkedin'];

	public function jadwal(): HasMany
	{
		return $this->hasMany(JadwalDokterKlinik::class, 'dokter_id', 'id');
	}
}
