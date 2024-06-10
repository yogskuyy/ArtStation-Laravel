<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\karyaController;
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

Route::get('/karya', [karyaController::class, 'index'])->name('karya.index');
Route::get('/karya/tambah', [karyaController::class, 'create'])->name('karya.add-karya');
Route::post('/karya/tambah', [KaryaController::class, 'store'])->name('karya.store');
Route::get('/karya/edit/{id}', [KaryaController::class, 'edit'])->name('karya.edit');
Route::post('/karya/update/{id}', [KaryaController::class, 'update'])->name('karya.update');
Route::get('/karya/hapus/{id}', [KaryaController::class, 'destroy']);
Route::get('/karya/download-pdf', [KaryaController::class, 'downloadPdf'])->name('karya.download-pdf');



