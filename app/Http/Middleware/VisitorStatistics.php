<?php

namespace App\Http\Middleware;

use App\Models\StatistikPengunjung;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;

class VisitorStatistics
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
	 */
	public function handle(Request $request, Closure $next): Response
	{
		if (!$request->is_api) {
			// Nama sesi untuk tracking pengunjung
			$sessionKey = 'visitor_tracked';

			// Cek apakah sesi sudah ada
			if (!Session::has($sessionKey)) {
				// Jika belum ada, increment statistik pengunjung
				StatistikPengunjung::store();

				// Set session agar bertahan selama 24 jam
				Session::put($sessionKey, now()->addHours(24));
			} else {
				// Cek apakah sesi sudah expired
				$expiredAt = Session::get($sessionKey);
				if (now()->greaterThan($expiredAt)) {
					// Jika sesi expired, hitung lagi pengunjung dan reset sesi
					StatistikPengunjung::store();

					Session::put($sessionKey, now()->addHours(24));
				}
			}
		}

		return $next($request);
	}
}
