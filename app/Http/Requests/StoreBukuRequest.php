<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\BukuController;

class StoreBukuRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * 
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'kategoribuku_id' => 'required',
            'rakbuku_id' => 'required',
            'kode_isbn' => 'required|string',
            'judul_buku' => 'required|string',
            'pengarang' => 'required|string',
            'image' => 'file|image|mimes:jpg,jpeg,png',
            'dokumen' => 'file',
            'keterangan' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'kategoribuku_id.required' => 'Kategori Harus Dipilih',
            'rakbuku_id.required' => 'Rak Harus Dipilih',
            'kode_isbn.required' => 'Kode ISBN Harus Diisi',
            'judul_buku.required' => 'Judul Buku Harus Diisi',
            'pengarang.required' => 'Nama Pengarang Harus Diisi',
            'image.required' => 'Image Harus Diinputkan',
            'dokumen.required' => 'Dokumen Harus Diinputkan',
            'keterangan.required' => 'HARUS DIISI' 
        ];
    }
}
