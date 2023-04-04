<?php

use Illuminate\Support\Facades\Route;
use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use App\Models\RakModel;
use App\Http\Controllers\RakController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('sb-admin/main');
});
Route::get('/peminjaman', function () {
    return view('peminjaman');
});
Route::get('/pengembalian', function () {
    return view('pengembalian');
});

Route::get('/buku', [BukuController::class, 'index']);

Route::get('/daftaranggota', [AnggotaController::class, 'index']);

Route::get('/kategoribuku',[KategoriController::class, 'index']);

Route::get('/rakbuku',[RakController::class, 'index']);

Route::resource('/buku/buku', BukuController::class);
Route::resource('/buku/buku.buku', BukuController::class);
Route::resource('/buku.create', BukuController::class);
Route::resource('/buku.store', BukuController::class);
Route::resource('/buku.update', BukuController::class);

