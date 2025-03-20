<?php

namespace Database\Seeders;

use App\Models\MasterPoliKlinik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterPoliKlinikSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		MasterPoliKlinik::create(['nama' => 'Fisioterapi']);
		MasterPoliKlinik::create(['nama' => 'Anastesi']);
		MasterPoliKlinik::create(['nama' => 'Kandungan']);
	}
}
