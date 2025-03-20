<?php

namespace Database\Seeders;

use App\Models\MasterDokter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterDokterSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		MasterDokter::create(['nama' => 'Dokter A']);
		MasterDokter::create(['nama' => 'Dokter B']);
		MasterDokter::create(['nama' => 'Dokter C']);
		MasterDokter::create(['nama' => 'Dokter D']);
	}
}
