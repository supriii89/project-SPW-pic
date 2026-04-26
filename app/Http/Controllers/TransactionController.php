<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('product')->get();
        return response()->json($transactions);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'jumlah' => 'required|integer|min:1',
        ]);

        return DB::transaction(function () use ($request) {
            $product = Product::findOrFail($request->product_id);

            if ($product->stok < $request->jumlah) {
                return response()->json(['message' => 'Insufficient stock'], 400);
            }

            $total_harga = $product->harga_jual * $request->jumlah;

            $transaction = Transaction::create([
                'product_id' => $product->id,
                'jumlah' => $request->jumlah,
                'total_harga' => $total_harga,
            ]);

            $product->stok -= $request->jumlah;
            $product->save();

            return response()->json([
                'message' => 'Transaction successful',
                'data' => $transaction
            ], 201);
        });
    }
}
