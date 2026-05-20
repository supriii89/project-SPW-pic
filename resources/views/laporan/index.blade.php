@extends('layouts.app')

@section('title', 'Laporan Penjualan')

@section('content')
<div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
    <div>
        <h1 class="text-2xl font-bold text-slate-800">Laporan Penjualan</h1>
        <p class="text-slate-500 text-sm mt-1">Pantau performa penjualan dan keuntungan SPW.</p>
    </div>
    
    <!-- Filter Date Range -->
    <div class="flex items-center space-x-2 bg-white p-1 rounded-lg border border-slate-200 shadow-sm">
        <input type="date" class="px-3 py-1.5 text-sm border-transparent focus:ring-0 text-slate-700 bg-transparent" value="2026-05-01">
        <span class="text-slate-400">-</span>
        <input type="date" class="px-3 py-1.5 text-sm border-transparent focus:ring-0 text-slate-700 bg-transparent" value="2026-05-20">
        <button class="bg-slate-100 hover:bg-slate-200 text-slate-700 p-1.5 rounded-md transition-colors">
            <i data-lucide="filter" class="w-4 h-4"></i>
        </button>
    </div>
</div>

<!-- Summary Cards for Report -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
    <div class="bg-blue-600 rounded-xl shadow-sm p-6 text-white relative overflow-hidden">
        <div class="absolute right-[-20px] top-[-20px] opacity-20">
            <i data-lucide="wallet" class="w-32 h-32"></i>
        </div>
        <p class="text-blue-100 text-sm font-medium mb-1">Total Pendapatan</p>
        <h3 class="text-3xl font-bold">Rp 12.450.000</h3>
        <p class="text-blue-200 text-xs mt-2 flex items-center">
            <i data-lucide="trending-up" class="w-3 h-3 mr-1"></i> +15% dari bulan lalu
        </p>
    </div>

    <div class="bg-emerald-500 rounded-xl shadow-sm p-6 text-white relative overflow-hidden">
        <div class="absolute right-[-20px] top-[-20px] opacity-20">
            <i data-lucide="piggy-bank" class="w-32 h-32"></i>
        </div>
        <p class="text-emerald-100 text-sm font-medium mb-1">Total Keuntungan</p>
        <h3 class="text-3xl font-bold">Rp 4.150.000</h3>
        <p class="text-emerald-100 text-xs mt-2">Margin keuntungan ~33%</p>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6 flex flex-col justify-center">
        <p class="text-slate-500 text-sm font-medium mb-2">Produk Terlaris</p>
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <div class="w-10 h-10 rounded-full bg-amber-100 flex items-center justify-center mr-3 text-amber-600">
                    <i data-lucide="award" class="w-5 h-5"></i>
                </div>
                <div>
                    <h4 class="font-bold text-slate-800">Es Teh Manis</h4>
                    <p class="text-xs text-slate-500">Terjual 345 cup</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Laporan Table -->
<div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden mb-6">
    <div class="p-4 border-b border-slate-100 flex justify-between items-center">
        <h2 class="font-semibold text-slate-800">Rincian Transaksi</h2>
        <button class="text-sm flex items-center text-blue-600 font-medium hover:text-blue-800 transition-colors">
            <i data-lucide="download" class="w-4 h-4 mr-1"></i> Ekspor PDF
        </button>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm whitespace-nowrap">
            <thead class="bg-slate-50 border-b border-slate-100 text-slate-600">
                <tr>
                    <th scope="col" class="px-6 py-3 font-semibold">Tanggal & Waktu</th>
                    <th scope="col" class="px-6 py-3 font-semibold">Produk</th>
                    <th scope="col" class="px-6 py-3 font-semibold text-center">Jml</th>
                    <th scope="col" class="px-6 py-3 font-semibold text-right">Total Penjualan</th>
                    <th scope="col" class="px-6 py-3 font-semibold text-right">Keuntungan</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-4 text-slate-600">20-05-2026 10:45</td>
                    <td class="px-6 py-4 font-medium text-slate-800">Nasi Goreng Spesial</td>
                    <td class="px-6 py-4 text-center">2</td>
                    <td class="px-6 py-4 text-right text-slate-800 font-medium">Rp 30.000</td>
                    <td class="px-6 py-4 text-right text-emerald-600 font-medium">+ Rp 10.000</td>
                </tr>
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-4 text-slate-600">20-05-2026 10:42</td>
                    <td class="px-6 py-4 font-medium text-slate-800">Es Teh Manis</td>
                    <td class="px-6 py-4 text-center">3</td>
                    <td class="px-6 py-4 text-right text-slate-800 font-medium">Rp 12.000</td>
                    <td class="px-6 py-4 text-right text-emerald-600 font-medium">+ Rp 6.000</td>
                </tr>
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-4 text-slate-600">19-05-2026 14:30</td>
                    <td class="px-6 py-4 font-medium text-slate-800">Mie Ayam</td>
                    <td class="px-6 py-4 text-center">5</td>
                    <td class="px-6 py-4 text-right text-slate-800 font-medium">Rp 60.000</td>
                    <td class="px-6 py-4 text-right text-emerald-600 font-medium">+ Rp 20.000</td>
                </tr>
            </tbody>
            <tfoot class="bg-slate-50 border-t border-slate-200">
                <tr>
                    <th colspan="3" class="px-6 py-4 text-right font-bold text-slate-800">TOTAL KESELURUHAN:</th>
                    <th class="px-6 py-4 text-right font-bold text-slate-800">Rp 102.000</th>
                    <th class="px-6 py-4 text-right font-bold text-emerald-600">Rp 36.000</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

@endsection
