@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
<div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
    <div>
        <h1 class="text-2xl font-bold text-slate-800">Manajemen Produk</h1>
        <p class="text-slate-500 text-sm mt-1">Kelola data makanan, minuman, dan stok kantin.</p>
    </div>
    <a href="/produk/create" class="inline-flex items-center justify-center py-2 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
        <i data-lucide="plus" class="w-4 h-4 mr-2"></i>
        Tambah Produk
    </a>
</div>

<!-- Main Card -->
<div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
    <!-- Header / Toolbar -->
    <div class="p-4 border-b border-slate-100 flex flex-col sm:flex-row justify-between items-center gap-4">
        <div class="w-full sm:w-1/3">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i data-lucide="search" class="h-4 w-4 text-slate-400"></i>
                </div>
                <input type="text" class="block w-full pl-9 pr-3 py-2 border border-slate-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-sm transition-shadow placeholder-slate-400" placeholder="Cari nama produk...">
            </div>
        </div>
        <div class="flex items-center space-x-2 w-full sm:w-auto">
            <button class="px-3 py-2 border border-slate-300 rounded-lg text-sm font-medium text-slate-700 bg-white hover:bg-slate-50 flex items-center transition-colors">
                <i data-lucide="filter" class="w-4 h-4 mr-2"></i>
                Filter
            </button>
        </div>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm whitespace-nowrap">
            <thead class="bg-slate-50 border-b border-slate-100 text-slate-600">
                <tr>
                    <th scope="col" class="px-6 py-3 font-semibold">Nama Produk</th>
                    <th scope="col" class="px-6 py-3 font-semibold">Harga Jual</th>
                    <th scope="col" class="px-6 py-3 font-semibold">Stok</th>
                    <th scope="col" class="px-6 py-3 font-semibold text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <!-- Row 1 -->
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-4 font-medium text-slate-800">
                        Nasi Goreng Spesial
                    </td>
                    <td class="px-6 py-4 text-slate-600">Rp 15.000</td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                            45 porsi
                        </span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="/produk/1/edit" class="inline-flex items-center text-blue-600 hover:text-blue-800 mr-3 transition-colors">
                            <i data-lucide="edit" class="w-4 h-4 mr-1"></i> Edit
                        </a>
                        <button class="inline-flex items-center text-red-600 hover:text-red-800 transition-colors">
                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Hapus
                        </button>
                    </td>
                </tr>
                <!-- Row 2 -->
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-4 font-medium text-slate-800">
                        Es Teh Manis
                    </td>
                    <td class="px-6 py-4 text-slate-600">Rp 4.000</td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                            120 gelas
                        </span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="/produk/2/edit" class="inline-flex items-center text-blue-600 hover:text-blue-800 mr-3 transition-colors">
                            <i data-lucide="edit" class="w-4 h-4 mr-1"></i> Edit
                        </a>
                        <button class="inline-flex items-center text-red-600 hover:text-red-800 transition-colors">
                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Hapus
                        </button>
                    </td>
                </tr>
                <!-- Row 3 -->
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-4 font-medium text-slate-800">
                        Mie Ayam
                    </td>
                    <td class="px-6 py-4 text-slate-600">Rp 12.000</td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                            5 porsi
                        </span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="/produk/3/edit" class="inline-flex items-center text-blue-600 hover:text-blue-800 mr-3 transition-colors">
                            <i data-lucide="edit" class="w-4 h-4 mr-1"></i> Edit
                        </a>
                        <button class="inline-flex items-center text-red-600 hover:text-red-800 transition-colors">
                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Hapus
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="px-6 py-4 border-t border-slate-100 flex items-center justify-between">
        <span class="text-sm text-slate-500">Menampilkan 1 hingga 3 dari 124 produk</span>
        <div class="inline-flex rounded-md shadow-sm" role="group">
            <button type="button" class="px-4 py-2 text-sm font-medium text-slate-700 bg-white border border-slate-300 rounded-l-lg hover:bg-slate-50 focus:z-10 focus:ring-2 focus:ring-blue-500">
                Sebelumnya
            </button>
            <button type="button" class="px-4 py-2 text-sm font-medium text-slate-700 bg-white border border-t border-b border-slate-300 hover:bg-slate-50 focus:z-10 focus:ring-2 focus:ring-blue-500">
                1
            </button>
            <button type="button" class="px-4 py-2 text-sm font-medium text-slate-700 bg-white border border-t border-b border-l-0 border-slate-300 hover:bg-slate-50 focus:z-10 focus:ring-2 focus:ring-blue-500">
                2
            </button>
            <button type="button" class="px-4 py-2 text-sm font-medium text-slate-700 bg-white border border-slate-300 rounded-r-lg hover:bg-slate-50 focus:z-10 focus:ring-2 focus:ring-blue-500">
                Berikutnya
            </button>
        </div>
    </div>
</div>
@endsection
