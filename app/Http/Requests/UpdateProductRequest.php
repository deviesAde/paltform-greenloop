<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'price' => 'nullable|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'url' => 'nullable|string',
            'is_published' => 'nullable|boolean',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.string' => 'Nama produk harus berupa teks',
            'name.max' => 'Nama produk maksimal 255 karakter',
            'description.string' => 'Deskripsi produk harus berupa teks',
            'price.integer' => 'Harga produk harus berupa angka',
            'image.image' => 'Gambar produk harus berupa gambar',
            'image.mimes' => 'Gambar produk harus berupa file dengan format: jpeg, png, jpg, gif, svg',
            'url.string' => 'URL produk harus berupa teks',
            'is_published.boolean' => 'Status publikasi produk harus berupa boolean',
        ];
    }
}
