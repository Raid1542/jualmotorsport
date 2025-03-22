<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function tampilkan($id, $nama,$stok, $harga){
        return view('dashboard', ['id' => $id, 'nama' => $nama, 'stok' => $stok, 'harga' => $harga]);
    }
}