@extends('sb-admin.index')
@section('title')
    | TAMPILAN DETAIL BUKU
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
            <img width="150px" height="200px" src="{{ url('/storage/buku/'.$buku->image) }}">
            <p class="card-text mt-4"><a href="/storage/buku/{{$buku->dokumen }}"><button class="btn btn-success" type="button">Dokumen</button></a></p>
            <p><a href="/buku" class="btn btn-primary mt-4">Kembali</a></p>
        </div>
    </div>
@endsection