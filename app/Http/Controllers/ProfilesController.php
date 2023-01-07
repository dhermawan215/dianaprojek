<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;
        $yourtransaki = Transactions::with('product')->where('user_id', $user)->get();
        return \view('front.pages.profiles', [
            'transaksi' => $yourtransaki
        ]);
    }
}
