<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'nama' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'lokasi' => 'required',
            'tanggalProyek' => 'required|date',
            'deskripsi' => 'required',
        ];
    }
}
