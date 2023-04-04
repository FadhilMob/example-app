<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriModel;

class KategoriController extends Controller
{
    public function index()
    {
        //Mengambil semua data pengguna
        $kategoribuku = KategoriModel::get();
        //Return data ke View
        return view('kategoribuku',[
            'kategoribuku'=>$kategoribuku
        ]);
    }
}
