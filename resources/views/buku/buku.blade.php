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
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nomor Rak</th>
                            <th scope="col">Total Kategori</th>
                            <th scope="col">ISBN</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Pengarang</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($buku as $buku)
                        <tr>
                            <td>{{ $buku->id }}</td>
                            <td>{{ $buku->rakbuku->nomor_rak }}</td>
                            <td>{{ $buku->kategoribuku->total }}</td>
                            <td>{{ $buku->kode_isbn }}</td>
                            <td>{{ $buku->judul_buku }}</td>
                            <td>{{ $buku->pengarang }}</td>
                            <td>
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
                                <i class="fas fa-trash"></i>
                                </button>
                                </form>
                               
                                
                                {{-- Tombol Edit --}}
                                <a href="{{ route('buku.edit',$buku->id) }}" class="btn btn-primary btn-circle btn-sm">
                                <i class="fas fa-edit"></i>
                                </a>
                                
                                {{-- Tombol Detail --}}
                                <a href="{{ route('buku.show',$buku->id) }}" class="btn btn-info btn-circle btn-sm">
                                <i class="fas fa-info-circle"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
    

