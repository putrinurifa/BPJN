<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BpjnController;

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

Auth::routes();
Route::get('/lokasi-kantor', [App\Http\Controllers\BpjnController::class, 'lokasi'])->name('lokasi-kantor');
Route::get('/kontak', [App\Http\Controllers\BpjnController::class, 'kontak'])->name('kontak');
Route::get('/tugas-fungsi', [App\Http\Controllers\BpjnController::class, 'tugas'])->name('tugas-fungsi');
Route::get('/organisasi', [App\Http\Controllers\BpjnController::class, 'organisasi'])->name('organisasi');
Route::get('/informasi-publik', [App\Http\Controllers\BpjnController::class, 'informasi'])->name('informasi-publik');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
