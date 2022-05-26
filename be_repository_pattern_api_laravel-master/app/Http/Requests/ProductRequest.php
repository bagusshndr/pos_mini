<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Set this to true if you want to authorize the validation
        // The default is false
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_produk' => 'required|max:50|unique:tbl_produk,nama_produk',
            'deskripsi_produk' => 'required|max:50',
            'harga_produk' => 'required|max:50',
            'kategori_id' => 'required|max:50',
            'gambar_produk' => 'required',
            'status' => 'required',

            
            // I want to check the user if exists first
            // If exists, will pass the email for unique validation
            // This is efficient, rather than we creating another validation for create or update
        ];
    }
}
