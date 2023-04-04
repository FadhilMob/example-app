@extends('sb-admin.index')

@section('title')
    | DATA PEMINJAMAN BUKU
@endsection

@section('content')
    <h1>Halaman Peminjaman</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Id Buku</th>
            <th scope="col">Peminjam</th>
            <th scope="col">Kontak</th>
            <th scope="col">Tanggal Meminjam</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>B01</td>
            <td>Otto</td>
            <td>0028737</td>
            <td>8/9/2022</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>B02</td>
            <td>Thornton</td>
            <td>2932789</td>
            <td>2/9/2022</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>B03</td>
            <td>Northon</td>
            <td>02892749</td>
            <td>4/9/2022</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>B04</td>
            <td>Ferdy</td>
            <td>09882243</td>
            <td>6/9/2022</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>B05</td>
            <td>Toiran</td>
            <td>00923669</td>
            <td>9/9/2022</td>
          </tr>
        </tbody>
      </table>
@endsection

