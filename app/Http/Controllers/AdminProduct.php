<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class AdminProduct extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::with('categories')->get();
        return \view('pages.product.index', [
            'data' => $product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catgeory = Category::all();
        return \view('pages.product.create', [
            'category' => $catgeory
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('picture')) {
            $images = $request->file('picture');

            $ext = $images->extension();
            $img = $images->getClientOriginalName();

            $random = Str::random(15);
            // $file_name_str = str_replace(' ', '-', $img);
            // // mengkonversi nama file bila ada karakter 
            // $file_name_str = preg_replace('/[^A-Za-z0-9\-\_]/', '', $file_name_str);
            // //mengkonversi nama file bila ada karakter strip(-) dan plus(+) menjadi strip(-)
            // $file_name_str = preg_replace('/-+/', '-', $file_name_str);
            //mendapatkan nama file yang sudah bersih dari karakter yang tidak diinginkan
            $clean_name_file = date('Ymds') . '-' . $random . '.' . $ext;
            $data['picture'] = $images->move('produk', $clean_name_file);
        }
        Product::create($data);

        return \redirect()->route('product.index')->with('success', 'data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Product::with('categories')->findOrFail($id);
        return \view('pages.product.detail', ['data' => $produk]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Product::with('categories')->findOrFail($id);
        $catgeory = Category::all();
        return \view('pages.product.edit', [
            'produk' => $produk,
            'kategori' => $catgeory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $data = $request->all();
        $product = Product::findOrFail($id);
        if ($request->hasFile('picture')) {
            // menhapus foto sebelumnya
            $path = \parse_url($product->picture);
            \unlink(\public_path($path['path']));

            $images = $request->file('picture');

            $ext = $images->extension();
            $img = $images->getClientOriginalName();

            $random = Str::random(15);
            $clean_name_file = date('Ymds') . '-' . $random . '.' . $ext;
            $data['picture'] = $images->move('produk', $clean_name_file);
        }

        $product->update($data);
        return \redirect()->route('product.index')->with('info', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // menhapus foto sebelumnya
        $path = \parse_url($product->picture);
        \unlink(\public_path($path['path']));

        //hapus data

        $product->delete();
        return \redirect()->route('product.index')->with('danger', 'data berhasil dihapus');
    }
}
