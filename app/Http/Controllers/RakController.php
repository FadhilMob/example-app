<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RakModel;

class RakController extends Controller
{
    public function index()
    {
        //Mengambil semua data pengguna
        $rakbuku = RakModel::with('kategoribuku')->get();
        //Return data ke View
        return view('rakbuku',[
            'rakbuku'=>$rakbuku
        ]);
    }

    public function create()
    //Berfungsi get tampilan form saja
    {
        $rakbuku = RakModel::get();
        $kategoribuku = KategoriModel::get();
        return view('rakbuku.create', compact(['rakbuku', 'kategoribuku'])); 
    }
    
    public function store(Request $request)
    //push data ke database
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RakModel $rakbuku)
    {
        return $rakbuku;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RakModel $rakModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RakModel $rakModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RakModel $rakModel)
    {
        //
    }

}
