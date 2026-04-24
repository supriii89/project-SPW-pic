<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class Produkcontroller extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => Produk::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga_beli' => 'required|numeric|min:0',
            'harga_jual' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
        ]);

        $produk = Produk::create($validated);

        return response()->json([
            'message' => 'Produk berhasil ditambahkan.',
            'data' => $produk,
        ], 201);
    }

    public function show($id)
    {
        $produk = Produk::findOrFail($id);

        return response()->json([
            'data' => $produk,
        ]);
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        $validated = $request->validate([
            'nama_produk' => 'sometimes|required|string|max:255',
            'harga_beli' => 'sometimes|required|numeric|min:0',
            'harga_jual' => 'sometimes|required|numeric|min:0',
            'stok' => 'sometimes|required|integer|min:0',
        ]);

        $produk->update($validated);

        return response()->json([
            'message' => 'Produk berhasil diperbarui.',
            'data' => $produk,
        ]);
    }

    public function destroy(Produk $produk)
    {
        $produk->delete();

        return response()->json([
            'message' => 'Produk berhasil dihapus.',
        ]);
    }
}
