<?php

use Illuminate\Support\Facades\Route;

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
    return view('frontend.index');
})->name('index');

Route::get('/products', function () {
    return view('frontend.products');
})->name('products');

Route::get('/product-details', function () {
    return view('frontend.product-details');
})->name('product-details');
