<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $query = Transaction::with('product');

        if ($request->has('start') && $request->has('end')) {
            $query->whereBetween('created_at', [$request->start . ' 00:00:00', $request->end . ' 23:59:59']);
        }

        $transactions = $query->get();

        $totalRevenue = 0;
        $totalProfit = 0;

        foreach ($transactions as $transaction) {
            $totalRevenue += $transaction->total_harga;
            $profit = ($transaction->product->harga_jual - $transaction->product->harga_beli) * $transaction->jumlah;
            $totalProfit += $profit;
        }

        return response()->json([
            'message' => 'Report generated successfully',
            'data' => [
                'transactions' => $transactions,
                'summary' => [
                    'total_revenue' => $totalRevenue,
                    'total_profit' => $totalProfit,
                ]
            ]
        ]);
    }
}
