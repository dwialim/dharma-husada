<?php

use App\Http\Middleware\Authenticate;
use App\Http\Middleware\VisitorStatistics;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Exception\HttpException;

return Application::configure(basePath: dirname(__DIR__))
	->withRouting(
		web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
		commands: __DIR__.'/../routes/console.php',
		health: '/up',
		then: function () {
			Route::name('landing.')->middleware('visitor')->group(base_path('routes/landing.web.php'));

			Route::prefix('admin')
				->name('admin.')
				->middleware('web')
				->group(base_path('routes/admin.web.php'));

			Route::prefix('api/admin')
				->name('api.admin.')
				->middleware('web')
				->group(base_path('routes/admin.api.php'));
		}
	)
	->withMiddleware(function (Middleware $middleware) {
		$middleware->alias([
			'auth' => Authenticate::class,
			'visitor' => VisitorStatistics::class,
		])
		->append(StartSession::class);
	})
	->withExceptions(function (Exceptions $exceptions) {
		$exceptions->render(function (HttpException $exception, Request $request) {
			// if ($request->is(['admin', 'admin/*'])) {
			// 	if ($exception->getStatusCode() == 400) {
			// 		return response()->view("admin.errors.400", [], 400);
			// 	}

			// 	if ($exception->getStatusCode() == 403) {
			// 		return response()->view("admin.errors.403", [], 403);
			// 	}

			// 	if ($exception->getStatusCode() == 404) {
			// 		// return response()->view("admin.errors.404", [], 404);
			// 		return response()->view("handling-page.404", [], 404);
			// 	}

			// 	if ($exception->getStatusCode() == 500) {
			// 		return response()->view("admin.errors.500", [], 500);
			// 	}

			// 	if ($exception->getStatusCode() == 503) {
			// 		return response()->view("admin.errors.503", [], 503);
			// 	}
			// }

			if (!$request->is('api/*')) {
				if ($exception->getStatusCode() == 404) {
					return response()->view("handling-page.404", [], 404);
				}
			}
		});
	})->create();
