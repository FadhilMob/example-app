@extends('sb-admin.index')

@section('title')
    RAK | BUKU
@endsection

@section('content')
    <center><h1> RAK BUKU </h1></center>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Rak Buku</th>
            <th scope="col">Nomor Rak Buku</th>
            <th scope="col">Kategori Buku</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($rakbuku as $rakbuku)
          <tr>
            <td>{{ $rakbuku->id }}</td>
            <td>{{ $rakbuku->nama_rak }}</td>
            <td>{{ $rakbuku->nomor_rak }}</td>
            <td>{{ $rakbuku->kategoribuku->kategori_buku }}</td>
            <td>
              <a href="/rakbuku/{{ $rakbuku->id_rak }}" class="btn btn-info">Show</a>
              <a href="/rakbuku/{{ $rakbuku->id_rak }}" class="btn btn-warning">Edit</a>
              <a href="/rakbuku/{{ $rakbuku->id_rak }}" class="btn btn-danger">Delete</a>

              {{-- <a href="
              {{ route('rakbuku.create') }}" --}}
            </td>

            {{-- <form action="/rakbuku/{{ $rakbuku->id_rak }}" method="post">
            <a href=/rakbuku/{{ $rakbuku->id_rak }}/edit" class="btn btn-warning">Edit</a>
            <a href=/rakbuku/{{ $rakbuku->id_rak }}" class="btn btn-info">View</a>
              @csrf
              @method('DELETE')
              <button type="submit" name="delete" class="btn btn-danger">Delete</button>
          </form> --}}
        </tr>
          @endforeach
        </tbody>
      </table>
@endsection