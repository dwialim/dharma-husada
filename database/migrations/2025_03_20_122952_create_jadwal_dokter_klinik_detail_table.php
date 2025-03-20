<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('jadwal_dokter_klinik_detail', function (Blueprint $table) {
			$table->id();
			$table->integer('jadwal_dokter_klinik_id');
			$table->string('hari');
			$table->integer('hari_num');
			$table->string('waktu_awal');
			$table->string('waktu_akhir');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('jadwal_dokter_klinik_detail');
	}
};
