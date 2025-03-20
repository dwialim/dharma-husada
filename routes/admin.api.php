<?php

use App\Http\Controllers\AdminPage\AuthController;
use App\Http\Controllers\AdminPage\DashboardController;
use App\Http\Controllers\AdminPage\JadwalController;
use App\Http\Controllers\AdminPage\ManajemenInformasiController;
use App\Http\Controllers\AdminPage\MasterData\DokterController;
use App\Http\Controllers\AdminPage\MasterData\PoliKlinikController;
use App\Http\Controllers\AdminPage\MasterData\ProfilRSController;
use App\Http\Controllers\AdminPage\Profil\StrukturOrganisasiController;
use App\Http\Controllers\AdminPage\Profil\TugasFungsiController;
use App\Http\Controllers\AdminPage\Profil\VisiMisiController;
use App\Http\Controllers\AdminPage\WaktuOperasionalController;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth')
// ->group(function () {
	/** Master data */
	Route::prefix('master-data')
	->as('masterData.')
	->group(function () {
		Route::controller(DokterController::class)
		->as('dokter.')
		->prefix('dokter')
		->group(function () {
			Route::get('datatable', 'datatable')->name('datatable');
		});

		Route::controller(PoliKlinikController::class)
		->as('poliKlinik.')
		->prefix('poli-klinik')
		->group(function () {
			Route::get('/', 'main')->name('main');
		});

	});

	Route::controller(ProfilRSController::class)
	->prefix('profil-rs')
	->as('profilRS.')
	->group(function () {
		Route::get('/', 'main')->name('main');
	});
	/** Master data end */

	/** Profil */
	Route::controller(StrukturOrganisasiController::class)
	->prefix('struktur-organisasi')
	->as('strukturOrganisasi.')
	->group(function () {
		Route::get('/', 'main')->name('main');
	});

	Route::controller(TugasFungsiController::class)
	->prefix('tugas-fungsi')
	->as('tugasFungsi.')
	->group(function () {
		Route::get('/', 'main')->name('main');
	});

	Route::controller(VisiMisiController::class)
	->prefix('visi-misi')
	->as('visiMisi.')
	->group(function () {
		Route::get('/', 'main')->name('main');
	});
	/** Profil end */

	/** Pelayanan */
	Route::controller(JadwalController::class)
	->prefix('jadwal')
	->as('jadwal.')
	->group(function () {
		Route::get('/', 'main')->name('main');
	});
	/** Pelayanan end */

	/** Informasi */
	Route::controller(ManajemenInformasiController::class)
	->prefix('manajemen-informasi')
	->as('manajemenInformasi.')
	->group(function () {
		Route::get('/', 'main')->name('main');
	});
	/** Informasi end */

	/** Other */
	Route::controller(WaktuOperasionalController::class)
	->prefix('waktu-opreasional')
	->as('waktuOperasional.')
	->group(function () {
		Route::get('/', 'main')->name('main');
	});
	/** Other end */
// });
