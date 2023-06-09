@extends('sb-admin.index')

@section('title')
    DAFTAR BUKU | TAMBAH
@endsection

@section('content')
    <h1>TAMBAHKAN BUKU</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
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
                                {{$data->kategori_buku}} - {{$data->total}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                
                {{-- ISBN --}}
                <div class="form-group mt-4">
                    <label for="exampleInputEmail1">Kode ISBN</label>
                    <input type-"text class="form-control @error('kode_isbn') is-invalid @enderror" name="kode_isbn" value="{{ old('kode_isbn')}}">
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
                    <input type-"text class="form-control @error('judul_buku') is-invalid @enderror" name="judul_buku" value="{{ old('judul_buku')}}">
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
                    <input type-"text class="form-control @error('pengarang') is-invalid @enderror" name="pengarang" value="{{ old('pengarang')}}">
                    {{-- PESAN ERROR --}}
                    @error('pengarang')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                    {{-- Image --}}
                    <label for="exampleInputEmail1">Image</label>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                    </div>

                    {{-- Dokumen --}}
                    <label for="exampleInputEmail1">Dokumen</label>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="form-control" id="dokumen" name="dokumen">
                        </div>
                    </div>

                     {{-- KETERANGAN --}}
                {{-- <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="hidden" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" value="{{ old('keterangan')}}">
                    <trix-editor input="keterangan"></trix-editor> --}}
                    {{-- PESAN ERROR --}}
                    {{-- @error('keterangan')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div> --}}

                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea id="summernote" class="form-control @error('keterangan') is-invalid @enderror" rows="4" name="keterangan">{{old('keterangan')}}</textarea>
                    @error('content')
                        <div class="alert alert-danger">{{$message}}</div>
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

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
  $('#summernote').summernote();
});
</script>

{{-- https://cdnjs.com/libraries/trix/1.2.4 --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.4/trix.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.4/trix.js"></script> --}}
