<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\BukuAdminController;
use App\Http\Controllers\RiwayatAdminController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('admin.landingpage');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

// Route::get('/bukuadmin', function () {
//     return view('admin.bukuAdmin');
// });

Route::get('/index', function () {
    return view('admin.index');
});

Route::resource('buku', BukuController::class);
Route::resource('peminjaman', PeminjamanController::class);
Route::resource('riwayat', RiwayatController::class);
Route::resource('bukuadmin', BukuAdminController::class);
Route::resource('riwayatadmin', RiwayatAdminController::class);