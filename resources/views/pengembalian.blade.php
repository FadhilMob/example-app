@extends('sb-admin.index')

@section('title')
   | DATA PENGEMBALIAN BUKU
@endsection

@section('content')
    <h1>Halaman Pengembalian</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Id Buku</th>
            <th scope="col">Peminjam</th>
            <th scope="col">Kontak</th>
            <th scope="col">Tanggal Kembali</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>B06</td>
            <td>Arbert</td>
            <td>0025677</td>
            <td>2/9/2022</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>B07</td>
            <td>Rendi</td>
            <td>29355489</td>
            <td>1/9/2022</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>B08</td>
            <td>Kane</td>
            <td>02845789</td>
            <td>3/9/2022</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>B09</td>
            <td>Luna</td>
            <td>09835343</td>
            <td>1/9/2022</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>B10</td>
            <td>Rian</td>
            <td>00924229</td>
            <td>1/9/2022</td>
          </tr>
        </tbody>
      </table>
@endsection
