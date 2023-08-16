<?php

use App\Http\Controllers\Admin\BarangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PenjualanController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/data-barang', [BarangController::class, 'index'])->middleware(['auth', 'verified'])->name('data-barang');
Route::get('/data-barang/{id}', [BarangController::class, 'destroy'])->middleware('auth', 'verified')->name('destroy-barang');
Route::get('/tambah-barang', [BarangController::class, 'add'])->middleware(['auth', 'verified'])->name('tambah-barang');
Route::post('/tambah-barang', [BarangController::class, 'save'])->middleware(['auth', 'verified'])->name('simpan-barang');
Route::get('/edit-barang/{id}', [BarangController::class, 'edit'])->middleware('auth')->name('edit-barang');
Route::post('/edit-barang/{id}', [BarangController::class, 'update'])->middleware('auth')->name('update-barang');

require __DIR__ . '/auth.php';
