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


route::group(['prefix'=>'admin'], function(){
    Route::get('/login','AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login','AuthAdmin\LoginController@login')->name('admin.login.submit');
    route::get('/', 'admin\\AdminController@index')->name('admin.home');
});





route::get('/ukuran/{id}/create', 'admin\\UkuranController@create');
route::resource('/ukuran', 'admin\\UkuranController');
route::get('/ukuran/{id}/', 'admin\\UkuranController@index');


Route::get('/','PagesController@home');
Route::get('/contact','PagesController@contact');
Route::get('/profile','PelangganController@profile');
Route::get('/orderansaya','PelangganController@orderansaya');

Route::get('/pesan/{id}','PesanController@index');
Route::post('/pesan/{id}','PesanController@pesan');


Route::get('/cart','PagesController@cart');

Route::get('/login','PagesController@login');
Route::get('/register','PagesController@register');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
