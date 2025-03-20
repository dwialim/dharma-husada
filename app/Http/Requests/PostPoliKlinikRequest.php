<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class PostPoliKlinikRequest extends FormRequest
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
			'nama' => 'required',
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
			'nama' => 'Nama Poli Klinik',
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
