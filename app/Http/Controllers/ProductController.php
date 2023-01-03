<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $produk = Product::with('categories')->paginate(12);
        return \view('front.pages.produk', [
            'produk' => $produk,
        ]);
    }

    public function show($id)
    {
        $produk = Product::with('categories')->findOrFail($id);
        return view('front.pages.produk-detail', [
            'produk' => $produk
        ]);
    }
}
