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
route::get('/admin', 'admin\\AdminController@homeadmin');



route::get('/ukuran/{id}/create', 'admin\\UkuranController@create');
route::resource('/ukuran', 'admin\\UkuranController');
route::get('/ukuran/{id}/', 'admin\\UkuranController@index');


Route::get('/','PagesController@home');
Route::get('/contact','PagesController@contact');

Route::get('/pesanspanduk','PagesController@pemesananspanduk');
Route::get('/pesanxbanner','PagesController@pemesananxbanner');
Route::get('/pesanposter','PagesController@pemesananposter');
Route::get('/pesanpin','PagesController@pemesananpin');


Route::get('/cart','PagesController@cart');

Route::get('/login','PagesController@login');
Route::get('/register','PagesController@register');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
