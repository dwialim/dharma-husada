<?php
// use App\Http\Controllers\LandingPage\BerandaController;
use App\Http\Controllers\LandingPage\BerandaController;
use App\Http\Controllers\LandingPage\Informasi\BeritaController;
use App\Http\Controllers\LandingPage\Informasi\PengumumanController;
use App\Http\Controllers\LandingPage\KontakController;
use App\Http\Controllers\LandingPage\PelayananController;
use App\Http\Controllers\LandingPage\Profil\StrukturOrganisasiController;
use App\Http\Controllers\LandingPage\Profil\TugasFungsiController;
use App\Http\Controllers\LandingPage\Profil\VisiMisiController;
use Illuminate\Support\Facades\Route;

Route::controller(BerandaController::class)
->as('beranda.')
->group(function() {
	Route::get('/', 'main')->name('main');
	Route::get('data-footer', 'dataFooter')->name('dataFooter');
});

Route::as('profil.')
->prefix('profil')
->group(function() {
	Route::controller(VisiMisiController::class)
	->as('visiMisi.')
	->prefix('visi-misi')
	->group(function() {
		Route::get('/', 'main')->name('main');
	});

	Route::controller(TugasFungsiController::class)
	->as('tugasFungsi.')
	->prefix('tugas-fungsi')
	->group(function() {
		Route::get('/', 'main')->name('main');
	});

	Route::controller(StrukturOrganisasiController::class)
	->as('strukturOrganisasi.')
	->prefix('struktur-organisasi')
	->group(function() {
		Route::get('/', 'main')->name('main');
	});
});

Route::controller(PelayananController::class)
->as('pelayanan.')
->prefix('pelayanan')
->group(function() {
	Route::get('jadwal-poli-klinik', 'jadwalPoli')->name('jadwalPoli');
	Route::get('jadwal-poli-kliniks', 'testing')->name('jadwalPolis');
	Route::get('jadwal-dokter', 'jadwalDokter')->name('jadwalDokter');
});

Route::as('informasi.')
->prefix('informasi')
->group(function() {
	Route::controller(BeritaController::class)
	->as('berita.')
	->prefix('berita')
	->group(function() {
		Route::get('/', 'main')->name('main');
		Route::get('detail/{id}', 'detail')->name('detail');
	});

	Route::controller(PengumumanController::class)
	->as('pengumuman.')
	->prefix('pengumuman')
	->group(function() {
		Route::get('/', 'main')->name('main');
		Route::get('detail/{id}', 'detail')->name('detail');
	});

	// Route::get('jadwal-poli-klinik', 'jadwalPoli')->name('jadwalPoli');
	// Route::get('jadwal-poli-kliniks', 'testing')->name('jadwalPolis');
	// Route::get('jadwal-dokter', 'jadwalDokter')->name('jadwalDokter');
});

Route::controller(KontakController::class)
->as('kontak.')
->prefix('kontak')
->group(function() {
	Route::get('/', 'main')->name('main');
});
