<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartRestController extends Controller
{
    public function addCart(Request $request)
    {
        $data = $request->all();
    }
}
