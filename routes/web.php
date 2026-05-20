<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('welcome');
});

// AUTHENTICATION
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// PROTECTED ROUTES (using Sanctum)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    // DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // PRODUCTS
    Route::get('/products', [ProductController::class, 'index']);
    Route::post('/products', [ProductController::class, 'store']);
    Route::get('/products/{id}', [ProductController::class, 'show']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);

    // TRANSACTIONS
    Route::get('/transactions', [TransactionController::class, 'index']);
    Route::post('/transactions', [TransactionController::class, 'store']);

    // REPORTS
    Route::get('/reports', [ReportController::class, 'index']);
});

// ==========================================
// RUTE FRONTEND (TAMPILAN UI KANTIN)
// ==========================================
// Route-route di bawah ini digunakan untuk menampilkan halaman desain frontend (Blade)
// yang baru saja dibuat, tanpa terblokir oleh otentikasi API/Sanctum sementara.

Route::get('/login-ui', function () { return view('auth.login'); });

// Karena /dashboard sudah dipakai di atas, kita gunakan nama lain atau overide sbb:
Route::get('/dashboard-ui', function () { return view('dashboard.index'); });

// Menu Sidebar
Route::get('/produk', function () { return view('produk.index'); });
Route::get('/produk/create', function () { return view('produk.form'); });
Route::get('/produk/{id}/edit', function () { return view('produk.form'); }); // form edit sama dengan create
Route::get('/transaksi', function () { return view('transaksi.index'); });
Route::get('/laporan', function () { return view('laporan.index'); });
