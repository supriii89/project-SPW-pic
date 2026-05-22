@extends('layouts.app')

@section('title', 'Tambah / Edit Produk')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <div>
        <h1 class="text-2xl font-bold text-slate-800">Form Produk</h1>
        <p class="text-slate-500 text-sm mt-1">Isi detail produk untuk ditambahkan ke inventori.</p>
    </div>
    <a href="/produk" class="inline-flex items-center text-sm font-medium text-slate-600 hover:text-blue-600 transition-colors">
        <i data-lucide="arrow-left" class="w-4 h-4 mr-1"></i>
        Kembali
    </a>
</div>

<div class="max-w-3xl">
    <form action="#" method="POST">
        <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
            <div class="p-6 md:p-8 space-y-6">
                
                <!-- Nama Produk -->
                <div>
                    <label for="nama_produk" class="block text-sm font-medium text-slate-700 mb-1.5">Nama Produk <span class="text-red-500">*</span></label>
                    <input type="text" id="nama_produk" name="nama_produk" class="block w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-sm transition-shadow" placeholder="Misal: Nasi Goreng Spesial" required>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Harga Beli -->
                    <div>
                        <label for="harga_beli" class="block text-sm font-medium text-slate-700 mb-1.5">Harga Beli (Modal) <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-slate-500 sm:text-sm">Rp</span>
                            </div>
                            <input type="number" id="harga_beli" name="harga_beli" class="block w-full pl-10 pr-3 py-2.5 border border-slate-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-sm transition-shadow" placeholder="10000" required>
                        </div>
                    </div>

                    <!-- Harga Jual -->
                    <div>
                        <label for="harga_jual" class="block text-sm font-medium text-slate-700 mb-1.5">Harga Jual <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-slate-500 sm:text-sm">Rp</span>
                            </div>
                            <input type="number" id="harga_jual" name="harga_jual" class="block w-full pl-10 pr-3 py-2.5 border border-slate-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-sm transition-shadow" placeholder="15000" required>
                        </div>
                    </div>
                </div>

                <!-- Stok -->
                <div>
                    <label for="stok" class="block text-sm font-medium text-slate-700 mb-1.5">Stok Awal <span class="text-red-500">*</span></label>
                    <input type="number" id="stok" name="stok" class="block w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-sm transition-shadow" placeholder="Masukkan jumlah stok" required>
                </div>

            </div>
            
            <!-- Form Actions -->
            <div class="px-6 py-4 bg-slate-50 border-t border-slate-100 flex items-center justify-end space-x-3">
                <a href="/produk" class="px-4 py-2 border border-slate-300 rounded-lg text-sm font-medium text-slate-700 bg-white hover:bg-slate-50 transition-colors">
                    Batal
                </a>
                <button type="submit" class="px-4 py-2 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                    Simpan Produk
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
