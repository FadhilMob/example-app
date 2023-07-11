@extends('sb-admin.index')

@section('title')
    | DAFTAR BUKU
@endsection

@section('content')
    <h1>DAFTAR BUKU</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            {{-- TOMBOL TAMBAH --}}
            <a href="{{ route('buku.create') }}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-40">
                     <i class="fas fa-plus"></i>
                </span>
                 <span class="text">Tambah Buku</span>
            </a>

            {{-- TOMBOL EKSPORT ALL --}}
            <a href="{{ route('create-pdf') }}" class="btn btn-success btn-icon-split">
                <span class="icon text-white-40">
                    <i class="bi bi-file-earmark-arrow-down-fill"></i>
                </span>
                 <span class="text">Eksport PDF</span>
            </a>

            {{-- ALERT SUKSES --}}
            @if (session()->has('success'))
                 <div class="alert alert-success" role="alert">
                     {{ session('success') }}
                 </div> 
            @endif

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th scope="col">No</th>
                            <th scope="col">Nomor Rak</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">ISBN</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Pengarang</th>
                            <th scope="col">Image</th>
                            <th scope="col">Dokumen</th>
                            {{-- <th scope="col">Keterangan</th> --}}
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($buku as $key => $buku)
                        <tr align="center">
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $buku->rakbuku->nomor_rak }}</td>
                            <td>{{ $buku->kategoribuku->kategori_buku }}</td>
                            <td>{{ $buku->kode_isbn }}</td>
                            <td>{{ $buku->judul_buku }}</td>
                            <td>{{ $buku->pengarang }}</td>
                            <td align="center"> <img width="150px" height="200px" src="{{ url('/storage/buku/'.$buku->image) }}"></td>
                            {{-- <td>{{ url('/storage/buku/'.$buku->dokumen) }}</td> --}}
                            <td align="center">
                                <a href="/storage/buku/{{$buku->dokumen }}" class="btn btn-outline-success">
                                    <span class="icon text-white-40">
                                        <i class="bi bi-filetype-doc"></i>
                                   </span>
                                    <span class="text">Dokumen</span>
                                {{-- <button class="btn btn-success" type="button"><i class="bi bi-filetype-doc"></i>
                                </button> --}}
                                </a>
                            {{-- <td>{!! $buku->keterangan !!}</td> --}}
                            </td>
                            <td align="center">
                                {{-- <div class="btn-group">
                                    <a href="" class="btn btn-primary mr-2">Edit</a>
                                    <a href="" class="btn btn-danger mr-2">Hapus</a>
                                    <a href="/buku/buku/{{ $buku->id }}" class="btn btn-info">Info</a>
                                </div>
                            </td> --}}

                                {{-- Tombol Delete --}}
                                <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Anda Yakin Menghapus Data Ini?')">
                                <i class="bi bi-trash3"></i>
                                </button>
                                </form>
                                                               
                                {{-- Tombol Edit --}}
                                <a href="{{ route('buku.edit',$buku->id) }}" class="btn btn-primary btn-circle btn-sm">
                                <i class="bi bi-pencil-square"></i>
                                </a>
                                
                                {{-- Tombol Detail --}}
                                <a href="{{ route('buku.show',$buku->id) }}" class="btn btn-info btn-circle btn-sm">
                                <i class="bi bi-info-square"></i>
                                </a>

                               

                            </td>
                            
                        </tr>
                        @endforeach
                        @include('sweetalert::alert')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
    

