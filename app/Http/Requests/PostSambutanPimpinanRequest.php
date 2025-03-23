<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class PostSambutanPimpinanRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array
	{
		return [
			'content' => 'required',
			'gambar' => 'required_without:sambutan_pimpinan_id|file|mimes:gif,jpeg,jpg,png,svg|max:2048',
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
			'content' => 'Content',
			'gambar' => 'Gambar',
		];
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
			'required_without' => ':attribute harus diisi!',
			'mimes' => ':attribute harus berupa file dengan tipe: jpeg, jpg, png!',
			'max' => ':attribute max 2MB!',
			'uploaded' => ':attribute gagal diunggah, ukuran gambar maksimum 2MB!',
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
			'errors' => $validator->errors()->first(),
		], 422));
	}
}
