<?php

use App\Http\Controllers\LandingPage\BerandaController;
use App\Http\Controllers\LandingPage\KontakController;
use App\Http\Controllers\LandingPage\PelayananController;
use App\Http\Controllers\LandingPage\ProfilController;
use Illuminate\Support\Facades\Route;


Route::controller(BerandaController::class)
->as('beranda.')
->group(function() {
	Route::get('/', 'main')->name('main');
});

Route::controller(KontakController::class)
->as('kontak.')
->prefix('kontak')
->group(function() {
	Route::get('/', 'main')->name('main');
});

Route::controller(ProfilController::class)
->as('profil.')
->prefix('profil')
->group(function() {
	Route::get('visi-misi', 'visiMisi')->name('visiMisi');
	Route::get('tugas-pokok', 'tugasPokok')->name('tugasPokok');
});

Route::controller(PelayananController::class)
->as('pelayanan.')
->prefix('pelayanan')
->group(function() {
	Route::get('jadwal-poli-klinik', 'jadwalPoli')->name('jadwalPoli');
	Route::get('jadwal-poli-kliniks', 'testing')->name('jadwalPolis');
	Route::get('jadwal-dokter', 'jadwalDokter')->name('jadwalDokter');
});

// Route::get('/', function () {
// 	return view('landing-page.main');
// 	// return view('test');
// 	// return 'halo';
// });
