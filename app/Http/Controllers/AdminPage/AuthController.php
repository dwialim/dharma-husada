<?php

namespace App\Http\Controllers\AdminPage;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
// use Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
	public function main()
	{
		if (Auth::check())
			return redirect()->route('admin.dashboard.main');
		return view('admin-page.auth.main');
	}

	public function generateToken(Request $request)
	{
		if (User::where('username',$request->username)->first() && Auth::attempt($request->only('username','password'))) {
			return response()->json([
				'data' => Auth::user(),
				'message' => 'Login berhasil',
			], 200);
		}

		return response()->json([
			'message' => 'Username atau password tidak valid!',
		], 401);
	}

	public function destroyToken(Request $request)
	{
		$request->session()->flush();
		Auth::logout();

		return response()->json([
			'message' => 'Logout berhasil!',
		], 200);
	}
}
