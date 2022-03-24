<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/masuk', function () {
    return view('masuk');
});

Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('logout', [LoginController::class, 'actionlogout'])->name('actionlogout');

Route::post('actiondaftar', [RegisterController::class, 'create'])->name('actiondaftar');

Route::get('/admin', [BarangController::class, 'index'])->middleware('admin');

Route::get('/admin/tambah', [BarangController::class, 'tambah'])->middleware('admin');

Route::post('/admin/store', [BarangController::class, 'store'])->name('actionstore')->middleware('admin');

Route::get('/admin/hapus/{id}', [BarangController::class, 'hapus'])->middleware('admin');

Route::get('/admin/edit/{id}', [BarangController::class, 'edit'])->middleware('admin');

Route::post('/admin/update', [BarangController::class, 'update'])->middleware('admin');

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/profile', [ProfileController::class, 'getUser'])->middleware('login');

Route::get('/profile/edit', [ProfileController::class, 'getEdit'])->middleware('login');

Route::post('/profile/update', [ProfileController::class, 'updateProfile'])->middleware('login');

Route::get('/hotel', function(){
    return view('hotel');
});

Route::get('/makanan', [BarangController::class, 'makanan'] );

Route::get('/obat', [BarangController::class, 'obat'] );

Route::get('/perlengkapan', [BarangController::class, 'perlengkapan'] );

Route::get('/detail/{id}', [BarangController::class, 'getDetail']);

Route::get('/keranjang/store/{barang}/{user}', [KeranjangController::class, 'store'])->name('keranjang.store')->middleware('login');

Route::get('/keranjang', [KeranjangController::class, 'getData'])->middleware('login');

Route::get('/keranjang/hapus/{barang}', [KeranjangController::class, 'deleteData']);

Route::get('/pesanan/store', [PesananController::class, 'pesanBarang']);

Route::get('/pesanan', [PesananController::class, 'getPesananTadi']);

Route::get('/resiPesanan/{id}', [PesananController::class, 'downloadPesanan']);