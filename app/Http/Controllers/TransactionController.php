<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Product;

class TransactionController extends Controller
{
    // GET /transactions
    public function index()
    {
        $transactions = Transaction::with('product')->latest()->get();

        return response()->json($transactions);
    }

    // POST /transactions
    public function store(Request $request)
    {
        // validasi input
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'jumlah' => 'required|integer|min:1',
        ]);

        $product = Product::find($request->product_id);

        // hitung total harga
        $total = $product->harga_jual * $request->jumlah;

        // simpan transaksi
        $transaction = Transaction::create([
            'product_id' => $request->product_id,
            'jumlah' => $request->jumlah,
            'total_harga' => $total,
        ]);

        // update stok
        $product->stok -= $request->jumlah;
        $product->save();

        return response()->json([
            'message' => 'Transaksi berhasil',
            'data' => $transaction
        ]);
    }
}