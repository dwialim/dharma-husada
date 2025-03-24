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
		Schema::create('profil_rs', function (Blueprint $table) {
			$table->id();
			$table->string('nama');
			$table->string('telepon')->nullable();
			$table->text('alamat')->nullable();
			$table->string('email')->nullable();
			$table->string('twitter')->nullable();
			$table->string('facebook')->nullable();
			$table->string('instagram')->nullable();
			$table->string('whatsapp')->nullable();
			$table->string('tiktok')->nullable();
			$table->string('lat')->nullable();
			$table->string('lng')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('profil_rs');
	}
};
