@extends('sb-admin.index')

@section('title')
    DAFTAR ANGGOTA
@endsection

@section('content')
    <h1>ANGGOTA</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id Anggota</th>
          <th scope="col">Nama Anggota</th>
          <th scope="col">Kontak</th> 
          <th scope="col">Judul Buku Yang Dipinjam</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($anggota as $anggota)
        <tr>
          <td>{{ $anggota->id }}</td>
          <td>{{ $anggota->nama_anggota }}</td>
          <td>{{ $anggota->kontak }}</td>  
          <td>{{ $anggota->buku->judul_buku }}</td>
      </tr>
        @endforeach
      </tbody>
    </table>
@endsection

