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





Route::get('/ukuran/{id}/create', 'admin\\UkuranController@create');
Route::resource('/ukuran', 'admin\\UkuranController');
Route::get('/ukuran/{id}/', 'admin\\UkuranController@index');

Route::get('datapesanan', 'admin\\AdminController@pesanan');
Route::get('datapesanan/{id}', 'admin\\AdminController@detail');
Route::delete('/datapesanan/{id}', 'admin\\AdminController@destroy');

Route::get('datapelanggan', 'admin\\AdminController@pelanggan');


Route::get('download/{id}', 'admin\\AdminController@download');

Route::get('/','PagesController@home');
Route::get('/contact','PagesController@contact');

Route::get('/pesan/{id}','PagesController@katalog');

Route::post('/pesan/{id}','PesanController@pesan');
Route::get('/checkout','PesanController@checkout');
Route::delete('/checkout/{id}', 'PesanController@delete');
Route::get('/konfirmasi-check-out','PesanController@konfirmasi');

Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');
Route::get('riwayat', 'RiwayatController@index');
Route::get('riwayat/{id}', 'RiwayatController@detail');



//konfirmasi pembayaran
Route::get('konfirmasi/{id}', 'admin\\AdminController@konfirmasi');

//kirim invoice
Route::get('invoice/{id}', 'admin\\AdminController@invoice');

Route::get('/login','PagesController@login');
Route::get('/register','PagesController@register');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
