<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return redirect('/login');
});

// AUTHENTICATION ROUTES (GUEST ONLY)
Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
    
    Route::post('/login', [AuthController::class, 'login']);
    
    Route::get('/register', function () {
        return view('auth.register');
    });
    Route::post('/register', [AuthController::class, 'register']);
});

// PROTECTED ROUTES (WEB SESSION)
Route::middleware('auth')->group(function () {
    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/logout', [AuthController::class, 'logout']); // Fallback via GET just in case

    // DASHBOARD
    // Return view instead of Controller for now since Controller returns JSON
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });

    // PRODUK
    Route::get('/produk', function () { return view('produk.index'); });
    Route::get('/produk/create', function () { return view('produk.form'); });
    Route::get('/produk/{id}/edit', function () { return view('produk.form'); });

    // TRANSAKSI
    Route::get('/transaksi', function () { return view('transaksi.index'); });

    // LAPORAN
    Route::get('/laporan', function () { return view('laporan.index'); });
    
    // --- API/JSON Fallbacks if still needed ---
    Route::get('/api/products', [ProductController::class, 'index']);
    Route::post('/api/products', [ProductController::class, 'store']);
    Route::get('/api/transactions', [TransactionController::class, 'index']);
    Route::post('/api/transactions', [TransactionController::class, 'store']);
});
