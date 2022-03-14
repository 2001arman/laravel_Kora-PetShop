<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KeranjangController;
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

Route::get('/admin', [BarangController::class, 'index']);

Route::get('/admin/tambah', [BarangController::class, 'tambah']);

Route::post('/admin/store', [BarangController::class, 'store'])->name('actionstore');

Route::get('/admin/hapus/{id}', [BarangController::class, 'hapus']);

Route::get('/admin/edit/{id}', [BarangController::class, 'edit']);

Route::post('/admin/update', [BarangController::class, 'update']);


Route::get('/admin/tambah', function () {
    return view('/admin/tambah');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/profile', [ProfileController::class, 'getUser']);

Route::get('/profile/edit', [ProfileController::class, 'getEdit']);

Route::post('/profile/update', [ProfileController::class, 'updateProfile']);

Route::get('/hotel', function(){
    return view('hotel');
});

Route::get('/makanan', [BarangController::class, 'makanan'] );

Route::get('/obat', [BarangController::class, 'obat'] );

Route::get('/perlengkapan', [BarangController::class, 'perlengkapan'] );

Route::get('/detail/{id}', [BarangController::class, 'getDetail']);

Route::get('/keranjang/store/{barang}/{user}', [KeranjangController::class, 'store'])->name('keranjang.store');