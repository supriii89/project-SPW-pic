<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $totalTransactions = Transaction::count();
        $totalRevenue = Transaction::sum('total_harga');

        return response()->json([
            'message' => 'Dashboard data retrieved successfully',
            'data' => [
                'total_products' => $totalProducts,
                'total_transactions' => $totalTransactions,
                'total_revenue' => $totalRevenue
            ]
        ]);
    }
}
