@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-slate-800">Dashboard Overview</h1>
    <p class="text-slate-500 text-sm mt-1">Selamat datang kembali, Admin! Berikut adalah ringkasan hari ini.</p>
</div>

<!-- Summary Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    
    <!-- Card Produk -->
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6 flex items-center hover:shadow-md transition-shadow">
        <div class="w-14 h-14 rounded-full bg-blue-50 flex items-center justify-center mr-4">
            <i data-lucide="package" class="w-7 h-7 text-blue-600"></i>
        </div>
        <div>
            <p class="text-sm font-medium text-slate-500 mb-1">Total Produk</p>
            <h3 class="text-2xl font-bold text-slate-800">124</h3>
        </div>
    </div>

    <!-- Card Transaksi -->
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6 flex items-center hover:shadow-md transition-shadow">
        <div class="w-14 h-14 rounded-full bg-emerald-50 flex items-center justify-center mr-4">
            <i data-lucide="shopping-cart" class="w-7 h-7 text-emerald-600"></i>
        </div>
        <div>
            <p class="text-sm font-medium text-slate-500 mb-1">Transaksi Hari Ini</p>
            <h3 class="text-2xl font-bold text-slate-800">45</h3>
        </div>
    </div>

    <!-- Card Pendapatan -->
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6 flex items-center hover:shadow-md transition-shadow">
        <div class="w-14 h-14 rounded-full bg-purple-50 flex items-center justify-center mr-4">
            <i data-lucide="wallet" class="w-7 h-7 text-purple-600"></i>
        </div>
        <div>
            <p class="text-sm font-medium text-slate-500 mb-1">Pendapatan Hari Ini</p>
            <h3 class="text-2xl font-bold text-slate-800">Rp 450.000</h3>
        </div>
    </div>

</div>

<!-- Quick Actions & Recent Activity -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    
    <!-- Quick Actions -->
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6 col-span-1 lg:col-span-2">
        <h2 class="text-lg font-bold text-slate-800 mb-4">Aksi Cepat</h2>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
            <a href="/transaksi" class="flex flex-col items-center justify-center p-4 border border-slate-200 rounded-xl hover:border-blue-500 hover:bg-blue-50 group transition-all">
                <i data-lucide="plus-circle" class="w-8 h-8 text-slate-400 group-hover:text-blue-600 mb-2 transition-colors"></i>
                <span class="text-sm font-medium text-slate-600 group-hover:text-blue-700">Kasir Baru</span>
            </a>
            <a href="/produk/create" class="flex flex-col items-center justify-center p-4 border border-slate-200 rounded-xl hover:border-blue-500 hover:bg-blue-50 group transition-all">
                <i data-lucide="package-plus" class="w-8 h-8 text-slate-400 group-hover:text-blue-600 mb-2 transition-colors"></i>
                <span class="text-sm font-medium text-slate-600 group-hover:text-blue-700">Tambah Item</span>
            </a>
            <a href="/laporan" class="flex flex-col items-center justify-center p-4 border border-slate-200 rounded-xl hover:border-blue-500 hover:bg-blue-50 group transition-all">
                <i data-lucide="file-text" class="w-8 h-8 text-slate-400 group-hover:text-blue-600 mb-2 transition-colors"></i>
                <span class="text-sm font-medium text-slate-600 group-hover:text-blue-700">Cek Laporan</span>
            </a>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-bold text-slate-800">Transaksi Terakhir</h2>
            <a href="/transaksi" class="text-sm text-blue-600 font-medium hover:underline">Lihat Semua</a>
        </div>
        <div class="space-y-4">
            <!-- Item 1 -->
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center mr-3">
                        <i data-lucide="receipt" class="w-5 h-5 text-slate-500"></i>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-slate-800">Nasi Goreng + Es Teh</p>
                        <p class="text-xs text-slate-500">2 menit yang lalu</p>
                    </div>
                </div>
                <span class="text-sm font-bold text-slate-700">Rp 15.000</span>
            </div>
            <!-- Item 2 -->
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center mr-3">
                        <i data-lucide="receipt" class="w-5 h-5 text-slate-500"></i>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-slate-800">Mie Ayam + Kerupuk</p>
                        <p class="text-xs text-slate-500">10 menit yang lalu</p>
                    </div>
                </div>
                <span class="text-sm font-bold text-slate-700">Rp 12.000</span>
            </div>
            <!-- Item 3 -->
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center mr-3">
                        <i data-lucide="receipt" class="w-5 h-5 text-slate-500"></i>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-slate-800">Ayam Geprek</p>
                        <p class="text-xs text-slate-500">25 menit yang lalu</p>
                    </div>
                </div>
                <span class="text-sm font-bold text-slate-700">Rp 18.000</span>
            </div>
        </div>
    </div>
</div>
@endsection
