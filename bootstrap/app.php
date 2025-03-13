<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Exception\HttpException;

return Application::configure(basePath: dirname(__DIR__))
	->withRouting(
		web: __DIR__.'/../routes/web.php',
		commands: __DIR__.'/../routes/console.php',
		health: '/up',
		then: function () {
			Route::name('landing.')->group(base_path('routes/landing.web.php'));

			Route::prefix('admin')
				->name('admin.')
				->group(base_path('routes/admin.web.php'));
		}
	)
	->withMiddleware(function (Middleware $middleware) {
		//
	})
	->withExceptions(function (Exceptions $exceptions) {
		$exceptions->render(function (HttpException $exception, Request $request) {
			if ($request->is(['admin', 'admin/*'])) {
				if ($exception->getStatusCode() == 400) {
					return response()->view("admin.errors.400", [], 400);
				}

				if ($exception->getStatusCode() == 403) {
					return response()->view("admin.errors.403", [], 403);
				}

				if ($exception->getStatusCode() == 404) {
					// return response()->view("admin.errors.404", [], 404);
					return response()->view("handling-page.404", [], 404);
				}

				if ($exception->getStatusCode() == 500) {
					return response()->view("admin.errors.500", [], 500);
				}

				if ($exception->getStatusCode() == 503) {
					return response()->view("admin.errors.503", [], 503);
				}
			}

			if ($exception->getStatusCode() == 404) {
				return response()->view("customer.errors.404", [], 404);
			}
		});
	})->create();
