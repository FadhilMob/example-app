<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use App\Models\BukuModel;
use App\Models\RakModel;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = BukuModel::with('rakbuku', 'kategoribuku')->get();
        return view('buku.buku',[
            'buku'=>$buku
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rakbuku = RakModel::get();
        $kategoribuku = KategoriModel::get();
        return view('buku.create', compact(['rakbuku', 'kategoribuku'])); 
        // return view('buku.create'); 
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @return \Illuminate\Http\Response
     */
    
    // public function store(Request $request)
    // {
    //     // dd($request->except(['_token','add']));
    //     BukuModel::create($request->except(['_token','add']));
    //     return redirect()->route('buku.index')->with('success', 'Data berhasil disimpan');
        
    // }

    public function store(StoreBukuRequest $request)
    {
        // $data=$request->only([
        //    'kategoribuku_id',
        //     'rakbuku_id',
        //     'kode_isbn',
        //     'judul_buku',
        //     'pengarang',
        //     'image' 
        // ]);

        $data=$request->all();
            // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('image');
            // nama file
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'storage/buku';
            // upload file
        $file->move($tujuan_upload,$nama_file);
        $data['image'] = $nama_file;
        
        $file2 = $request->file('dokumen');
        $nama_file2 = time()."_".$file2->getClientOriginalName();
        $file2->move($tujuan_upload,$nama_file2);
        $data['dokumen'] = $nama_file2;

        BukuModel::create($data);
        return redirect()->route('buku.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(BukuModel $buku)
    {
        return view('buku.detail_buku', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BukuModel $buku)
    {
        $rakbuku = RakModel::get();
        $kategoribuku = KategoriModel::get();
        return view('buku.edit', compact(['rakbuku', 'kategoribuku','buku'])); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBukuRequest $request, BukuModel $buku)
    {
        // $data=$request->only([
        //     'kategoribuku_id',
        //      'rakbuku_id',
        //      'kode_isbn',
        //      'judul_buku',
        //      'pengarang' 
        //  ]);
        //  $buku->update($data);
        //  return redirect()->route('buku.index')->with('success', 'Data berhasil diedit');

        $data=$request->all();
            // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('image');
        if($file != '') {

             // nama file
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'storage/buku';
            // upload file
        $file->move($tujuan_upload,$nama_file);
        $data['image'] = $nama_file;
        File::delete('storage/buku/'.$buku->image);
        }

        $file2 = $request->file('dokumen');
        if($file != '') {
        $nama_file2 = time()."_".$file2->getClientOriginalName();
        $file2->move($tujuan_upload,$nama_file2);
        $data['dokumen'] = $nama_file2;
        File::delete('storage/buku/'.$buku->dokumen);
        }

        $buku->update($data);
        return redirect()->route('buku.index')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BukuModel $buku)
    {
        $buku->delete($buku->id);
        return redirect()->route('buku.index')->with('success', 'Data berhasil dihapus');
    }
}
