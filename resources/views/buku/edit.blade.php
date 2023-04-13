@extends('sb-admin.index')

@section('title')
    EDIT DAFTAR BUKU | UPDATE
@endsection

@section('content')
    <h1>EDIT BUKU</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
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
                                {{$data->kategori_buku}} - {{$data->total}}
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

                    {{-- Image --}}
                    <label for="exampleInputEmail1">Image</label>
                        <div class="col-md-12 mb-2">
                            <img id="preview-image-before-upload" width="150px" src="{{ url('/storage/buku/'.$buku->image) }}"
                            alt="preview image" style="max height: 200px;">
                        </div>

                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                        </div>

                    {{-- Dokumen --}}
                    <label for="exampleInputEmail1">Dokumen</label>
                    <div class="col-md-12 mb-2">
                        <a href="/storage/buku/{{$buku->dokumen}}" id="preview-dokumen-before-upload"
                            alt="preview dokumen"><button class="btn btn-warning" type="button"><i class="bi bi-file-earmark-arrow-down-fill"></i>
                    </div>

                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="form-control" id="dokumen" name="dokumen">
                        </div>
                    </div>

                    {{-- TOMBOL TAMBAH --}}   
                    <button type="submit" name="add" class="btn btn-md btn-success mt-2">SAVE EDIT</button>
                    {{-- TOMBOL BACK --}}
                    <a href="{{ route('buku.index') }}" class="btn btn-md btn-secondary mt-2">BACK
                        {{-- <span class="text">Tambah</span> --}}
                    </a>
                {{-- <a href="{{ route('buku.store') }}" type="submit" class="btn btn-primary">TAMBAH DATA </a> --}}
            </form>
        </div>
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
      
    $(document).ready(function (e) {
     
       
       $('#image').change(function(){
                
        let reader = new FileReader();
     
        reader.onload = (e) => { 
     
          $('#preview-image-before-upload').attr('src', e.target.result); 
          $('#preview-dokumen-before-upload').attr('src', e.target.result); 
        }
     
        reader.readAsDataURL(this.files[0]); 
       
       });
       
    });
     
    </script>
    
