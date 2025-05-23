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
use App\Http\Controllers\AdminPage\SambutanPimpinanController;
use App\Http\Controllers\AdminPage\SliderController;
use App\Http\Controllers\AdminPage\WaktuOperasionalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return redirect()->route('admin.auth.main');
});

Route::controller(AuthController::class)
->as('auth.')
->prefix('auth')
->group(function () {
	Route::get('/', 'main')->name('main');
	Route::post('generate-token', 'generateToken')->name('generateToken');
	Route::post('destroy-token', 'destroyToken')->name('destroyToken');
});

Route::middleware('auth')
->group(function () {
	Route::controller(DashboardController::class)
	->as('dashboard.')
	->group(function () {
		Route::get('dashboard', 'main')->name('main');
	});

	/** Master data */
	Route::prefix('master-data')
	->as('masterData.')
	->group(function () {
		Route::controller(DokterController::class)
		->as('dokter.')
		->prefix('dokter')
		->group(function () {
			Route::get('/', 'main')->name('main');
			Route::get('datatable', 'datatable')->name('datatable');
			Route::post('form', 'form')->name('form');
			Route::post('store', 'store')->name('store');
			Route::post('destroy', 'destroy')->name('destroy');
		});

		Route::controller(PoliKlinikController::class)
		->as('poliKlinik.')
		->prefix('poli-klinik')
		->group(function () {
			Route::get('/', 'main')->name('main');
			Route::get('datatable', 'datatable')->name('datatable');
			Route::post('form', 'form')->name('form');
			Route::post('store', 'store')->name('store');
			Route::post('destroy', 'destroy')->name('destroy');
		});

	});

	Route::controller(ProfilRSController::class)
	->prefix('profil-rs')
	->as('profilRS.')
	->group(function () {
		Route::get('/', 'main')->name('main');
		Route::post('store', 'store')->name('store');
	});
	/** Master data end */

	/** Profil */
	Route::controller(StrukturOrganisasiController::class)
	->prefix('struktur-organisasi')
	->as('strukturOrganisasi.')
	->group(function () {
		Route::get('/', 'main')->name('main');
		Route::post('store', 'store')->name('store');
	});

	Route::controller(TugasFungsiController::class)
	->prefix('tugas-fungsi')
	->as('tugasFungsi.')
	->group(function () {
		Route::get('/', 'main')->name('main');
		Route::post('store', 'store')->name('store');
	});

	Route::controller(VisiMisiController::class)
	->prefix('visi-misi')
	->as('visiMisi.')
	->group(function () {
		Route::get('/', 'main')->name('main');
		Route::get('datatable', 'datatable')->name('datatable');
		Route::post('form', 'form')->name('form');
		Route::post('store', 'store')->name('store');
		Route::post('destroy', 'destroy')->name('destroy');
	});
	/** Profil end */

	/** Pelayanan */
	Route::controller(JadwalController::class)
	->prefix('jadwal')
	->as('jadwal.')
	->group(function () {
		Route::get('/', 'main')->name('main');
		Route::get('datatable', 'datatable')->name('datatable');
		Route::post('form', 'form')->name('form');
		Route::post('store', 'store')->name('store');
		Route::post('destroy', 'destroy')->name('destroy');
	});
	/** Pelayanan end */

	/** Informasi */
	Route::controller(ManajemenInformasiController::class)
	->prefix('manajemen-informasi')
	->as('manajemenInformasi.')
	->group(function () {
		Route::get('/', 'main')->name('main');
		Route::get('datatable', 'datatable')->name('datatable');
		Route::post('form', 'form')->name('form');
		Route::post('store', 'store')->name('store');
		Route::post('destroy', 'destroy')->name('destroy');
	});
	/** Informasi end */

	/** Other */
	Route::controller(WaktuOperasionalController::class)
	->prefix('waktu-opreasional')
	->as('waktuOperasional.')
	->group(function () {
		Route::get('/', 'main')->name('main');
		Route::post('store', 'store')->name('store');
	});

	Route::controller(SambutanPimpinanController::class)
	->prefix('sambutan-pimpinan')
	->as('sambutanPimpinan.')
	->group(function () {
		Route::get('/', 'main')->name('main');
		Route::post('store', 'store')->name('store');
	});

	Route::controller(SliderController::class)
	->prefix('slider')
	->as('slider.')
	->group(function () {
		Route::get('/', 'main')->name('main');
		Route::get('datatable', 'datatable')->name('datatable');
		Route::post('form', 'form')->name('form');
		Route::post('store', 'store')->name('store');
		Route::post('destroy', 'destroy')->name('destroy');
	});
	/** Other end */
});
