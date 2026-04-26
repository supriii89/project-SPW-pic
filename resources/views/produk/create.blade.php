<!DOCTYPE html>
<html>
<head>
    <title>Edit Tambah Produk</title>
    <style>
        body {
            background: linear-gradient(to right, #b38389, #7407c1);
            font-family: 'Times New Roman', Times, serif;
        }
        .container {
            padding: 40px;
        }
        input {
            padding: 10px;
            margin: 10px;
            width: 300px;
        }
        button {
            padding: 10px 20px;
            background: purple;
            color: white;
            border: none;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>EDIT TAMBAH PRODUK</h1>

    @if(session('success'))
        <p style="color:rgb(11, 92, 11)">{{ session('success') }}</p>
    @endif

    <form method="POST" action="/produk/store">
        @csrf

        <div>
            Nama Produk :
            <input type="text" name="nama_produk">
        </div>

        <div>
            Harga Beli :
            <input type="number" name="harga_beli">
        </div>

        <div>
            Harga Jual :
            <input type="number" name="harga_jual">
        </div>

        <div>
            Stok :
            <input type="number" name="stok">
        </div>
