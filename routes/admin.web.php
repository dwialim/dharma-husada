<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
// 	return "Testing";
// });

Route::controller(TestController::class)
	->group(function () {
		Route::get('/', 'main');
	});
