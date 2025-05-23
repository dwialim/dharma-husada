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
		Schema::create('waktu_operasional', function (Blueprint $table) {
			$table->id();
			$table->string('hari');
			$table->integer('hari_num');
			$table->string('waktu_awal')->nullable();
			$table->string('waktu_akhir')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('waktu_operasional');
	}
};
