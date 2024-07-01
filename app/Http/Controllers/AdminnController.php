<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Order;

class AdminnController extends Controller
{
    public function index()
    {
        $totalProduk = Barang::count();
        $totalOrder = Order::count();
        $barangs = Barang::all();
        $orders = Order::all();

        return view('admin', compact('totalProduk', 'totalOrder', 'barangs', 'orders'));
    }
}