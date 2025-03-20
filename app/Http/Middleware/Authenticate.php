<?php

namespace App\Http\Middleware;

use Auth, Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
		if (!Auth::check()) {
			if ($request->is('api/*')) {
				return response()->json([
					'code' => 401,
					'message' => 'Unauthorized!',
				], 401);
			}

			return redirect()->route('admin.auth.main');
		}

        return $next($request);
    }
}
