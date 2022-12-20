<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BpjnController;
use App\Http\Controllers\KematianController;
use App\Http\Controllers\KelahiranController;
use App\Http\Controllers\DokumenController;

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
    return view('BPJN.index');
});


Route::resource('kelahiran',KelahiranController::class);
Route::resource('kematian',KematianController::class);


Auth::routes();
Route::get('/lokasi-kantor', [App\Http\Controllers\BpjnController::class, 'lokasi'])->name('lokasi-kantor');
Route::get('/lokasi-kantor2', [App\Http\Controllers\BpjnController::class, 'lokasi2'])->name('lokasi-kantor2');
Route::get('/kontak', [App\Http\Controllers\BpjnController::class, 'kontak'])->name('kontak');
Route::get('/kontak2', [App\Http\Controllers\BpjnController::class, 'kontak2'])->name('kontak2');
Route::get('/tugas-fungsi', [App\Http\Controllers\BpjnController::class, 'tugas'])->name('tugas-fungsi');
Route::get('/tugas-fungsi2', [App\Http\Controllers\BpjnController::class, 'tugas2'])->name('tugas-fungsi2');
Route::get('/organisasi', [App\Http\Controllers\BpjnController::class, 'organisasi'])->name('organisasi');
Route::get('/organisasi2', [App\Http\Controllers\BpjnController::class, 'organisasi2'])->name('organisasi2');
Route::get('/informasi-publik', [App\Http\Controllers\BpjnController::class, 'informasi'])->name('informasi-publik');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kematian', [App\Http\Controllers\KematianController::class, 'index'])->name('kematian');
Route::get('/dokumen', [App\Http\Controllers\KelahiranController::class, 'dokumen'])->name('dokumen');
Route::get('/kelahiran', [App\Http\Controllers\KelahiranController::class, 'index'])->name('kelahiran');
Route::post('/kelahiran/data', [App\Http\Controllers\KelahiranController::class, 'store'])->name('kelahiran.store');
Route::post('/kematian/data', [App\Http\Controllers\KematianController::class, 'store'])->name('kematian.store');
Route::get('/print-born', [App\Http\Controllers\KelahiranController::class, 'print'])->name('print');
// Route::get('/print-born', [App\Http\Controllers\KematianController::class, 'print'])->name('print');


