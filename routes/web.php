<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', [ProdukController::class, 'index']);

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk', [ProdukController::class, 'store']);
Route::get('/produk/{id}/edit', [ProdukController::class, 'edit']);
Route::post('/produk/{id}/update', [ProdukController::class, 'update']);