<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilRS extends Model
{
	protected $table = 'profil_rs';

	protected $fillable = ['nama', 'telepon', 'alamat', 'email', 'twitter', 'facebook', 'instagram', 'linkedin', 'lat', 'lng'];
}
