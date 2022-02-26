<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/admin', function () {
    return view('/admin/admin');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/profile', function () {
    return view('profile/profile');
});

Route::get('/profile/edit', function () {
    return view('profile/edit');
});