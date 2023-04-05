@extends('sb-admin.index')

@section('title')
    EDIT DAFTAR BUKU | UPDATE
@endsection

@section('content')
    <h1>EDIT BUKU</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('buku.update', $buku->id) }}" method="POST">
                @method("PUT")
                @csrf
                <div class="mb-3">
                
                <label for="exampleInputEmail1" class="form-label mt-4">Kode Rak Buku</label>
                {{-- dropdown rakbuku --}}
                <div class="dropdown">
                    <div class="btn-group">
                            <select id="rak-dropdown" class="form-control" name="rakbuku_id">
                                <option value="">-- Pilih Rak Buku --</option>
                                @foreach ($rakbuku as $data) 
                                <option value="{{$data->id}}">
                                    {{$data->nama_rak}} - {{$data->nomor_rak}}
                                </option>
                                @endforeach
                            </select>
                    </div>
                </div>

                <label for="exampleInputEmail1" class="form-label mt-4">Kode Kategori Buku</label>
                    
                {{-- dropdown kategoribuku --}}
                <div class="dropdown">
                    <div class="btn-group">
                        <select id="kategori-dropdown" class="form-control" name="kategoribuku_id">
                            <option value="">-- Pilih Kategori Buku--</option>
                            @foreach ($kategoribuku as $data)
                            <option value="{{$data->id}}">
                                {{$data->kategoribuku}} - {{$data->total}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                {{-- ISBN --}}
                <div class="form-group mt-4">
                    <label for="exampleInputEmail1">Kode ISBN</label>
                    <input type-"text class="form-control @error('kode_isbn') is-invalid @enderror" name="kode_isbn" value="{{ $buku->kode_isbn}}">
                    {{-- PESAN ERROR --}}
                    @error('kode_isbn')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                 </div>

                  {{-- JUDUL BUKU --}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul Buku</label>
                    <input type-"text class="form-control @error('judul_buku') is-invalid @enderror" name="judul_buku" value="{{ $buku->judul_buku}}">
                    {{-- PESAN ERROR --}}
                    @error('judul_buku')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                 </div>

                  {{-- PENGARANG --}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Pengarang</label>
                    <input type-"text class="form-control @error('pengarang') is-invalid @enderror" name="pengarang" value="{{ $buku->pengarang }}">
                    {{-- PESAN ERROR --}}
                    @error('pengarang')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                    {{-- TOMBOL TAMBAH --}}   
                    <button type="submit" name="add" class="btn btn-md btn-success mt-2">SAVE</button>
                    {{-- TOMBOL BACK --}}
                    <a href="{{ route('buku.index') }}" class="btn btn-md btn-secondary mt-2">BACK
                        {{-- <span class="text">Tambah</span> --}}
                    </a>
                {{-- <a href="{{ route('buku.store') }}" type="submit" class="btn btn-primary">TAMBAH DATA </a> --}}
            </form>
        </div>
    </div>
@endsection
