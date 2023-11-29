<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\TenanController;
use App\Http\Controllers\NotaController;

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

// File: routes/web.php


// Menampilkan semua barang
Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');

// Menampilkan formulir tambah barang
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');

// Menyimpan data barang baru
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');

// Menampilkan detail barang
Route::get('/barang/{id}', [BarangController::class, 'show'])->name('barang.show');

// Menampilkan formulir edit barang
Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');

// Menyimpan perubahan data barang
Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang.update');

// Menghapus barang
Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');


//menampilkan kasir 
Route::get('/kasir', [KasirController::class, 'index'])->name('kasir.index');

//menampilkan data tenan
Route::get('/tenan', [TenanController::class, 'index'])->name('tenan.index');

//untuk nota
Route::get('/nota', [NotaController::class, 'index'])->name('nota.index');
Route::get('/nota/create', [NotaController::class, 'create'])->name('nota.create');
Route::post('/nota', [NotaController::class, 'store'])->name('nota.store');
Route::get('/nota/{id}', [NotaController::class, 'show'])->name('nota.show');
Route::get('/nota/{id}/edit', [NotaController::class, 'edit'])->name('nota.edit');
Route::put('/nota/{id}', [NotaController::class, 'update'])->name('nota.update');
Route::delete('/nota/{id}', [NotaController::class, 'destroy'])->name('nota.destroy');