<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nama_produk',
        'harga_beli',
        'harga_jual',
        'stok',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
