<?php

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


Route::resource('/produk', 'admin\\ProdukController');
Route::resource('/tipe', 'admin\\tipeController');
Route::get('produk/create','ProdukController@create');
Route::get('produk/create', 'admin\\ProdukController@create');