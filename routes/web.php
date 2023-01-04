<?php

use App\Http\Controllers\AdminProduct;
use App\Http\Controllers\AdminTransaction;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.page');
Route::get('products', [ProductController::class, 'index'])->name('produk');
Route::get('products/{products}', [ProductController::class, 'show'])->name('produk.show');
Route::resource('transactions', TransactionController::class);
Route::resource('cart', CartController::class);
Route::get('checkout/{checkout}', [TransactionController::class, 'checkout'])->name('chcekout');

Route::prefix('admin')->middleware('auth', 'verified')->middleware('isadmin')
    ->group(function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::resource('category', CategoryProduct::class);
        Route::resource('product', AdminProduct::class);
        Route::resource('transaction', AdminTransaction::class);
    });
Auth::routes();
