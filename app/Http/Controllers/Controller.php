<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction; // Sesuaikan dengan nama Model kamu
use Carbon\Carbon;
use Illuminate\Routing\Controller;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        // 1. Ambil tanggal dari GET. Jika tidak ada, default ke hari ini.
        $tgl_awal = $request->query('tgl_awal', date('Y-m-d'));
        $tgl_akhir = $request->query('tgl_akhir', date('Y-m-d'));

        // 2. Ambil data dari database berdasarkan range tanggal
        $query = Transaction::whereBetween('tanggal', [$tgl_awal, $tgl_akhir]);

        // 3. Hitung Total Penjualan dan Keuntungan
        // Asumsi di database ada kolom 'total_harga' dan 'laba'
        $total_penjualan = $query->sum('total_harga');
        $total_keuntungan = $query->sum('laba');

        // 4. Kirim ke View
        return view('laporan', [
            'tgl_awal'  => $tgl_awal,
            'tgl_akhir' => $tgl_akhir,
            'penjualan' => number_format($total_penjualan, 0, ',', '.'),
            'untung'    => number_format($total_keuntungan, 0, ',', '.')
        ]);
    }
}
