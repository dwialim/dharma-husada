<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class PostJadwalDokterKlinikRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool
	{
		return true;
	}

	// protected function prepareForValidation()
	// {
	// 	$this->merge([
	// 		'sampai_selesai' => $this->input('sampai_selesai', []), // Default array kosong jika tidak dikirim
	// 	]);
	// }


	// protected function prepareForValidation()
	// {
	// 	$this->merge([
	// 		'sampai_selesai' => $this->has('sampai_selesai'), // Jika checkbox tidak ada, dianggap false
	// 	]);
	// }

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array
	{
		return [
			// 'dokter' => 'required',
			// 'poli_klinik' => 'required',
			// 'hari' => 'required|array',
			// 'hari.*' => 'required',
			// 'waktu_awal' => 'required|array',
			// 'waktu_awal.*' => 'required',
			// 'waktu_akhir' => 'required_if:sampai_selesai.*,0|array',
			// 'waktu_akhir.*' => 'required_if:sampai_selesai.*,0',
			'dokter' => ['required'],
			'poli_klinik' => ['required'],
			'hari' => ['required', 'array'],
			'hari.*' => ['required', 'string'], // Pastikan hari berupa string

			'waktu_awal' => ['required', 'array'],
			'waktu_awal.*' => ['required', 'date_format:H:i'], // Format waktu valid

			'waktu_akhir' => ['array'],
			'waktu_akhir.*' => ['required_if:sampai_selesai.*,0'],

			'sampai_selesai' => ['sometimes', 'array'],
			'sampai_selesai.*' => ['nullable'], // Setiap indeks hanya boleh "on" atau null
		];
	}

	/**
	 * Get custom attributes for validator errors.
	 *
	 * @return array<string, string>
	 */
	public function attributes(): array
	{
		return [
			'dokter' => 'Dokter',
			'poli_klinik' => 'Poli Klinik',
			'hari' => 'Hari',
			'hari.*' => 'Hari',
			'waktu_awal' => 'Waktu Awal',
			'waktu_awal.*' => 'Waktu Awal',
			'waktu_akhir' => 'Waktu Akhir',
			'waktu_akhir.*' => 'Waktu Akhir',
		];
	}

	public function withValidator($validator)
	{
		$validator->after(function ($validator) {
			$sampaiSelesai = $this->input('sampai_selesai', []);

			foreach ($this->input('waktu_awal', []) as $attribute => $waktuAwal) {
				// Ambil index dari nama atribut (misalnya waktu_awal.2 -> index = 2)
				preg_match('/\d+/', $attribute, $matches);
				$index = $matches[0] ?? null;

				// Jika index ditemukan dan sampai_selesai tidak ada, maka waktu_akhir harus diisi
				if ($index !== null && empty($sampaiSelesai[$index]) && empty($this->input("waktu_akhir.$index"))) {
					$errors = $validator->errors();
					$errors->forget("waktu_akhir.$index");
					// $errors->add("waktu_akhir.$index", "Waktu Akhir " . ($index + 1) . " harus diisi.");
					$errors->add("waktu", $this->input());
					// $validator->errors()->forget("waktu_akhir.$index", "Waktu akhir wajib diisi jika sampai selesai tidak dicentang.");
					// $validator->errors()->add("waktu_akhir.$index", "Waktu akhir wajib diisi jika sampai selesai tidak dicentang.");
				}
			}
		});
	}

	/**
	 * Custom message for validation
	 *
	 * @return array
	 */
	public function messages(): array
	{
		return [
			'required' => ':attribute harus diisi!',
			// 'required_without' => ':attribute harus diisi!',
		];
	}

	protected function failedAuthorization()
	{
		throw new HttpResponseException(response()->json(['message' => 'Unauthorized action!'], 403));
	}

	/**
	 * Custom response validasi
	 */
	protected function failedValidation(Validator $validator) # Error feedback
	{
		throw new ValidationException($validator, response()->json([
			'message' => 'Validation error',
			'errors' => $validator->errors()
			// ->first()
			,
		], 422));
	}
}
