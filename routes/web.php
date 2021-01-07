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




//login admin
route::group(['prefix'=>'admin'], function(){
    Route::get('/login','AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login','AuthAdmin\LoginController@login')->name('admin.login.submit');
    route::get('/', 'admin\\AdminController@index')->name('admin.home');
});

//data produk
Route::resource('/produk', 'admin\\ProdukController');

//ukuran produk
Route::get('/ukuran/{id}/create', 'admin\\UkuranController@create');
Route::resource('/ukuran', 'admin\\UkuranController');
Route::get('/ukuran/{id}/', 'admin\\UkuranController@index');

//data pesanan
Route::get('datapesanan', 'admin\\AdminController@pesanan');
Route::get('datapesanan/{id}', 'admin\\AdminController@detail');
Route::delete('/datapesanan/{id}', 'admin\\AdminController@destroy');

//data pelanggan
Route::get('datapelanggan', 'admin\\AdminController@pelanggan');

//download file
Route::get('download/{id}', 'admin\\AdminController@download');

//konfirmasi pembayaran admin
Route::get('konfirmasi/{id}', 'admin\\AdminController@konfirmasi');

//konfirmasi pembayaran User
Route::get('konfirmasi-pembayaran/{id}', 'PesanController@konfirmasi_pembayaran');
Route::post('upload-bukti/{id}', 'PesanController@uploadPembayaran');

//kirim nota ke email pelanggan
Route::get('invoice/{id}', 'admin\\AdminController@invoice');


//pagescontroller
Route::get('/','PagesController@home');
Route::get('/contact','PagesController@contact');
Route::get('/carapesan','PagesController@cara');

Route::get('/pesan/{id}','PagesController@katalog');
Route::post('/pesan/{id}','PesanController@pesan');

Route::get('/checkout','PesanController@checkout');
Route::delete('/checkout/{id}', 'PesanController@delete');
Route::get('/konfirmasi-check-out','PesanController@konfirmasi');

Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');
Route::get('riwayat', 'RiwayatController@index');
Route::get('riwayat/{id}', 'RiwayatController@detail');

//login dan register pelanggan
Route::get('/login','PagesController@login');
Route::get('/register','PagesController@register');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
