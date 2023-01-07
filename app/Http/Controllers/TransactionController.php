<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transactions;
use Carbon\Carbon;
use Illuminate\Http\Request;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $date = Carbon::now();
        $tr_no = \date('Ymd') . '/' . $request->user_id . '/' . \date('H') . $request->product_id . '/' . \date('ms');
        $data['tr_no'] = $tr_no;
        $data['date_transaction'] = $date->toDateString();

        $trsc = Transactions::create($data);

        return \redirect()->route('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transctionsSuccess = Transactions::with('product')->findOrFail($id);
        return \view('front.pages.transaction-detail', [
            'transaction' => $transctionsSuccess
        ]);
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

    public function checkout($id)
    {
        $produk = Product::findOrFail($id);
        return view('front.pages.checkout', [
            'produk' => $produk
        ]);
    }

    public function success()
    {
        return \view('front.pages.success');
    }

    public function uploadReceipt($id)
    {
        return view('');
    }
}
