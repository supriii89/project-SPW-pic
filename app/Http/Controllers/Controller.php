<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class LaporanController extends Controller
{
    public function index()
    {
        $data = [
            ['tanggal'=>'2026-06-01','total'=>29000,'untung'=>4000],
            ['tanggal'=>'2026-06-02','total'=>50000,'untung'=>10000],
            ['tanggal'=>'2026-06-03','total'=>20000,'untung'=>-2000],
        ];

        return view('laporan', compact('data'));
    }
}
