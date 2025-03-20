<?php

namespace App\Http\Controllers\LandingPage\Profil;

use App\Http\Controllers\Controller;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
	private $menu = 'visi-misi';

	public function main(Request $request)
	{
		$data = [];
		foreach (VisiMisi::all(['id', 'kategori', 'content']) as $item) {
			if ($item['kategori'] === 'misi') {
				$data['misi'][] = $item; // Tetap array untuk kategori "misi"
			} else {
				$data[$item['kategori']] = $item; // Selain "misi", jadi objek (array 1 elemen)
			}
		}
		$data = json_decode(json_encode($data));

		return view('landing-page.page.profil.visi-misi', ['menu' => $this->menu, 'data' => $data]);
	}
}
