<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenggunaController;

Route::get('barang', [BarangController::class, 'barang'])->middleware('jwt.verify');

Route::post('daftar', [PenggunaController::class, 'daftar']);

Route::post('masuk', [PenggunaController::class, 'masuk']);

Route::get('masuk_akun', [PenggunaController::class, 'masuk_akun']);

Route::get('server', [PenggunaController::class, 'server'])->middleware('jwt.verify');

Route::get('pengguna', [PenggunaController::class, 'dapatkanAutentikasiPengguna'])->middleware('jwt.verify');

Route::get('semua_pengguna', [PenggunaController::class, 'semua_pengguna'])->middleware('jwt.verify');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
