@extends('sb-admin.index')

@section('title')
    KATEGORI | BUKU
@endsection

@section('content')
    <h1>KATEGORI BUKU</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kategori Buku</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
      <tbody>
        @foreach ($kategoribuku as $kategoribuku)
        <tr>
          <td>{{ $kategoribuku->id }}</td>
          <td>{{ $kategoribuku->kategori_buku }}</td>
          <td>{{ $kategoribuku->total }}</td>
      </tr>
        @endforeach
      </tbody>
      </table>
@endsection

