<?php

namespace Database\Seeders;

# Package
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;

# Models
use App\Models\User;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		User::create([
			'name' => 'Dharma Husada',
			'level' => 'superadmin',
			'username' => 'superadmin',
			'password' => bcrypt('1H4Hck62zS'),
		]);
		User::create([
			'name' => 'Dharma Husada',
			'level' => 'superadmin',
			'username' => 'admin',
			'password' => bcrypt('4dm1n'),
		]);
	}
}
