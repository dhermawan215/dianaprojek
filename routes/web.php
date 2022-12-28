<?php

use App\Http\Controllers\AdminProduct;
use App\Http\Controllers\AdminTransaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryProduct;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.index');
});

Route::prefix('admin')->middleware('auth', 'verified')->middleware('isadmin')
    ->group(function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::resource('category', CategoryProduct::class);
        Route::resource('product', AdminProduct::class);
        Route::resource('transaction', AdminTransaction::class);
    });
Auth::routes();
