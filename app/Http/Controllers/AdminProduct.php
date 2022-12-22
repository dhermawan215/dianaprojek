<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProduct extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
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

            // $ext = $images->extension();
            $img = $images->getClientOriginalName();

            $file_name_str = str_replace(' ', '-', $img);
            // mengkonversi nama file bila ada karakter 
            $file_name_str = preg_replace('/[^A-Za-z0-9\-\_]/', '', $file_name_str);
            //mengkonversi nama file bila ada karakter strip(-) dan plus(+) menjadi strip(-)
            $file_name_str = preg_replace('/-+/', '-', $file_name_str);
            //mendapatkan nama file yang sudah bersih dari karakter yang tidak diinginkan
            $clean_name_file = date('Ymds') . '-' . $file_name_str;
            $data['picture'] = $images->move('images', $clean_name_file);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
