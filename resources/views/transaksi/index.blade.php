@extends('layouts.app')

@section('title', 'Transaksi Kasir')

@section('content')
<div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
    <div>
        <h1 class="text-2xl font-bold text-slate-800">Kasir SPW</h1>
        <p class="text-slate-500 text-sm mt-1">Lakukan proses transaksi penjualan di sini.</p>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    
    <!-- Form Transaksi (Left Side) -->
    <div class="col-span-1 lg:col-span-1">
        <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
            <div class="p-4 border-b border-slate-100 bg-slate-50">
                <h2 class="font-semibold text-slate-800 flex items-center">
                    <i data-lucide="shopping-cart" class="w-5 h-5 mr-2 text-blue-600"></i>
                    Input Transaksi
                </h2>
            </div>
            
            <div class="p-5">
                <form id="form-transaksi" action="#" method="POST">
                    <!-- Pilih Produk -->
                    <div class="mb-4">
                        <label for="produk_id" class="block text-sm font-medium text-slate-700 mb-1.5">Pilih Produk</label>
                        <select id="produk_id" name="produk_id" class="block w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-sm" onchange="updateHarga()">
                            <option value="" disabled selected>-- Pilih Produk --</option>
                            <option value="1" data-harga="15000">Nasi Goreng Spesial (Rp 15.000)</option>
                            <option value="2" data-harga="4000">Es Teh Manis (Rp 4.000)</option>
                            <option value="3" data-harga="12000">Mie Ayam (Rp 12.000)</option>
                        </select>
                    </div>

                    <!-- Jumlah -->
                    <div class="mb-4">
                        <label for="jumlah" class="block text-sm font-medium text-slate-700 mb-1.5">Jumlah</label>
                        <input type="number" id="jumlah" name="jumlah" value="1" min="1" class="block w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-sm" oninput="updateTotal()" required>
                    </div>

                    <!-- Total Harga (Readonly) -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-slate-700 mb-1.5">Total Harga</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-slate-500 sm:text-sm font-bold">Rp</span>
                            </div>
                            <input type="text" id="total_harga_display" class="block w-full pl-10 pr-3 py-3 border-none bg-blue-50 text-blue-700 font-bold text-lg rounded-lg outline-none" value="0" readonly>
                        </div>
                    </div>

                    <button type="submit" class="w-full flex justify-center py-2.5 px-4 border border-transparent rounded-lg shadow-sm text-sm font-bold text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                        Simpan Transaksi
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Riwayat Transaksi Hari Ini (Right Side) -->
    <div class="col-span-1 lg:col-span-2">
        <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden h-full flex flex-col">
            <div class="p-4 border-b border-slate-100 flex justify-between items-center">
                <h2 class="font-semibold text-slate-800 flex items-center">
                    <i data-lucide="history" class="w-5 h-5 mr-2 text-slate-500"></i>
                    Riwayat Hari Ini
                </h2>
                <span class="text-xs font-medium text-blue-600 bg-blue-50 px-2 py-1 rounded-full">45 Transaksi</span>
            </div>
            
            <!-- Table -->
            <div class="overflow-x-auto flex-1">
                <table class="w-full text-left text-sm whitespace-nowrap">
                    <thead class="bg-slate-50 border-b border-slate-100 text-slate-600">
                        <tr>
                            <th scope="col" class="px-6 py-3 font-semibold">Waktu</th>
                            <th scope="col" class="px-6 py-3 font-semibold">Produk</th>
                            <th scope="col" class="px-6 py-3 font-semibold text-center">Jml</th>
                            <th scope="col" class="px-6 py-3 font-semibold text-right">Total</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <!-- Row 1 -->
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-6 py-4 text-slate-500">10:45</td>
                            <td class="px-6 py-4 font-medium text-slate-800">Nasi Goreng Spesial</td>
                            <td class="px-6 py-4 text-center">2</td>
                            <td class="px-6 py-4 text-right font-semibold text-slate-700">Rp 30.000</td>
                        </tr>
                        <!-- Row 2 -->
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-6 py-4 text-slate-500">10:42</td>
                            <td class="px-6 py-4 font-medium text-slate-800">Es Teh Manis</td>
                            <td class="px-6 py-4 text-center">3</td>
                            <td class="px-6 py-4 text-right font-semibold text-slate-700">Rp 12.000</td>
                        </tr>
                        <!-- Row 3 -->
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-6 py-4 text-slate-500">10:30</td>
                            <td class="px-6 py-4 font-medium text-slate-800">Mie Ayam</td>
                            <td class="px-6 py-4 text-center">1</td>
                            <td class="px-6 py-4 text-right font-semibold text-slate-700">Rp 12.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="p-4 border-t border-slate-100 bg-slate-50 text-right">
                <p class="text-sm text-slate-500">Total Pendapatan Hari Ini: <span class="font-bold text-lg text-slate-800 ml-2">Rp 450.000</span></p>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    let currentHarga = 0;

    function formatRupiah(angka) {
        return new Intl.NumberFormat('id-ID').format(angka);
    }

    function updateHarga() {
        const select = document.getElementById('produk_id');
        const selectedOption = select.options[select.selectedIndex];
        
        if (selectedOption.value) {
            currentHarga = parseInt(selectedOption.getAttribute('data-harga'));
            updateTotal();
        } else {
            currentHarga = 0;
            document.getElementById('total_harga_display').value = '0';
        }
    }

    function updateTotal() {
        const jumlahInput = document.getElementById('jumlah');
        let jumlah = parseInt(jumlahInput.value);
        
        if (isNaN(jumlah) || jumlah < 1) {
            jumlah = 1;
            jumlahInput.value = 1;
        }

        const total = currentHarga * jumlah;
        document.getElementById('total_harga_display').value = formatRupiah(total);
    }
</script>
@endsection
