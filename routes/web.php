<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

/*
|-------------------------
| HALAMAN WELCOME
|-------------------------
*/
Route::get('/', [ProdukController::class, 'index']);

/*
|-------------------------
| CRUD PRODUK
|-------------------------
*/

// Tambah data
Route::post('/produk/store', [ProdukController::class, 'store']);

// Edit form
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);

// Update data
Route::put('/produk/update/{id}', [ProdukController::class, 'update']);

// Hapus data
Route::delete('/produk/delete/{id}', [ProdukController::class, 'destroy']);