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

Route::get('/products', 'FrontendController@products')->name('products');
Route::get('/', 'FrontendController@index')->name('index');
Route::get('/show/{product}', 'FrontendController@details')->name('details');
Route::post('/jobApply', 'FrontendController@applyToJob')->name('applyToJob');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'product', 'as' => 'product.'], function () {

        Route::get('/create', 'ProductController@create')->name('create');
        Route::get('/edit/{product}', 'ProductController@edit')->name('edit');
        Route::get('/show/{product}', 'ProductController@show')->name('show');
        Route::post('/update/{product}', 'ProductController@update')->name('update');
        Route::post('/store', 'ProductController@store')->name('store');
        Route::get('/index', 'ProductController@index')->name('index');
        Route::get('/delete/{product}', 'ProductController@destroy')->name('delete');
        Route::post('/advertise/{product}', 'ProductController@advertise')->name('advertise');
    });

    Route::group(['prefix' => 'advertisement', 'as' => 'advertisement.'], function () {
        Route::get('/create', 'AdvertisementController@create')->name('create');
        Route::post('/store', 'AdvertisementController@store')->name('store');
    });

    Route::group(['prefix' => 'job', 'as' => 'job.'], function () {
        Route::get('/index', 'JobController@index')->name('index');
    });

});
