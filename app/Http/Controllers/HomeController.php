<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Transactions;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $produk = Product::all()->count();
        $kategori = Category::all()->count();
        $transaksiSuccess = Transactions::where('status', 1)->sum('totals');
        $transaksiPending = Transactions::where('status', 0)->sum('totals');
        return view('home', [
            'produk' => $produk,
            'category' => $kategori,
            'trs_success' => $transaksiSuccess,
            'trs_pending' => $transaksiPending
        ]);
    }
}
