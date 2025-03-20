<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::controller(TestController::class)
->as('test.')
->group(function () {
	Route::get('test', 'main');
	Route::post('form', 'form')->name('form');
});
