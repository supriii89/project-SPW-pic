<?php

use App\Http\Controllers\Produkcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('products', [Produkcontroller::class, 'index']);
Route::post('products', [Produkcontroller::class, 'store']);
Route::get('products/{id}', [Produkcontroller::class, 'show']);
Route::put('products/{id}', [Produkcontroller::class, 'update']);
Route::delete('products/{id}', [Produkcontroller::class, 'destroy']);
Route::get('/produk/create', [ProdukController::class, 'create']);
