<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminnController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KasirController;
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

#YT
// Route::middleware(['guest'])->group(function(){
//     Route::get('/login', [SesiController::class, 'index'])->name('login');
//     Route::post('/login', [SesiController::class, 'login']);
// });

// Route::middleware(['auth'])->group(function(){
//     Route::get('/admin', [AdminController::class, 'admin'])->middleware('userAkses:admin');
//     Route::get('/petugasgudang', [AdminController::class, 'petugasgudang'])->middleware('userAkses:petugasgudang');
//     Route::get('/kasir', [AdminController::class, 'kasir'])->middleware('userAkses:kasir');
//     Route::get('/logout', [SesiController::class, 'logout']);
// });

// Route::get('/home', function () {
//     return view('/home');
// });


#G
// Routes for guests
Route::middleware(['guest'])->group(function(){
    Route::get('/login', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login'])->name('login.submit');
});

// Routes for authenticated users
// Route::middleware(['auth'])->group(function(){
//     Route::get('/admin', [AdminController::class, 'admin'])->middleware('userAkses:admin')->name('admin');
//     Route::get('/petugasgudang', [AdminController::class, 'petugasgudang'])->middleware('userAkses:petugasgudang')->name('petugasgudang');
//     Route::resource('barang', BarangController::class);
//     Route::get('/kasir', [AdminController::class, 'kasir'])->middleware('userAkses:kasir')->name('kasir');
//     Route::get('/logout', [SesiController::class, 'logout'])->name('logout');
// });

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'admin'])->middleware('userAkses:admin')->name('admin');
    Route::get('/admin', [AdminnController::class, 'index']);
    Route::get('/petugasgudang', [AdminController::class, 'petugasgudang'])->middleware('userAkses:petugasgudang')->name('petugasgudang');
    Route::resource('barang', BarangController::class);
    Route::resource('petugasgudang', BarangController::class);
    Route::get('/kasir', [AdminController::class, 'kasir'])->middleware('userAkses:kasir')->name('kasir');
    Route::get('/kasir', [KasirController::class, 'index', 'getBarangDetails']);
    Route::get('/kasir', [KasirController::class, 'index']);
    Route::post('/kasir/order', [KasirController::class, 'submitOrder']);
    Route::get('/kasir/order', [KasirController::class, 'showOrder']);
    Route::get('/logout', [SesiController::class, 'logout'])->name('logout');
});


// Home route
Route::get('/home', function () {
    return view('home');
})->name('home');

