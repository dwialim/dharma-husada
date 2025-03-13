<?php

use App\Http\Controllers\AdminPage\DashboardController;
use App\Http\Controllers\AdminPage\MasterData\DokterController;
use App\Http\Controllers\AdminPage\MasterData\PoliKlinikController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
// 	return "Testing";
// });

Route::controller(DashboardController::class)
->as('dashboard.')
->group(function () {
	Route::get('dashboard', 'main')->name('main');
});

Route::prefix('master-data')
->as('masterData.')
->group(function () {
	Route::controller(DokterController::class)
	->as('dokter.')
	->prefix('dokter')
	->group(function () {
		Route::get('/', 'main')->name('main');
	});

	Route::controller(PoliKlinikController::class)
	->as('poliKlinik.')
	->prefix('poli-klinik')
	->group(function () {
		Route::get('/', 'main')->name('main');
	});
});
