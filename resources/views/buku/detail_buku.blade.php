@extends('sb-admin.index')
@section('title')
    | DAFTAR PEMINJAMAN
@endsection

@section('content')
    <h1>DETAIL BUKU</h1>
    <div class="card">
        <div class="card-header">
            KODE KATEGORI BUKU : {{ $buku->kategoribuku->kategori_buku }}<br>
            KODE RAK BUKU : {{ $buku->rakbuku->nama_rak }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $buku->kode_isbn }}</h5>
            <p class="card-text">Judul Buku : {{ $buku->judul_buku }}</p>
            <p class="card-text">Pengarang : {{ $buku->pengarang }}</p>
            <a href="/buku" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection