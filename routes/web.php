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


Route::get('/','BerandaController@home');

///////full mart /////
Route::get('/mart','MartController@index')->name('mart');
Route::get('/mart/{id}', 'MartController@detail')->name('detail/{id}');
Route::get('/add-to-cart/{id}', 'CartController@addToCart')->name('addToCart/{id}');
Route::delete('/remove-from-cart', 'CartController@remove');
Route::patch('update-cart', 'CartController@update');
Route::get('/viewCart','MartController@viewC')->name('viewC');


///member login ////
//Route::get('/login_page','FrontEnd\UsersController@index');
Route::post('/ber_reg','MemberController@register');
Route::post('/ber_log','MemberController@login');

// Route::get('/checkinvoice/{id}', 'TranscheckController@cetak_invoice')->name('checkinvoice');
///akses member ///
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard','MemberController@index');
    Route::post('/ber_update','MemberController@ber_update')->name('ber_update');
    Route::post('/pass_update','MemberController@pass_update')->name('pass_update');
    Route::get('/checkinvoice', 'TranscheckController@cetak_invoice')->name('checkinvoice');
    Route::get('/checkout', 'TranscheckController@tcheck' );
    Route::get('/myorder','MemberController@myorder')->name('myorder');
    Route::get('/uptrans', 'MemberController@upload');
    Route::post('/uptrans/proses', 'MemberController@proses_upload')->name('up_trans');
    //Route::post('/buat_transaksi', array('as'=>'insert','uses'=>'TranscheckController@tambah_transaksi'));
    Route::post('/buat_transaksi', 'TranscheckController@tambah_transaksi');
   // Route::get('/checkinvoice', 'TranscheckController@cetak_invoice');
    
    // Route::get('/kirimemail','MemberController@mail');
});

Route::middleware(['admin', 'auth'])->group(function () {
    Route::get('/admin','HomeController@index')->name('home');
    Route::get('/produktest','ProdukController@test');
Route::get('/logout','AdminController@logout');
//PRODUK
Route::get('/produk','ProdukController@index');
Route::post('/produk/store','ProdukController@store')->name('simpan_tambah_produk');
Route::get('/produk/delete/{id}', 'ProdukController@destroy');
Route::post('/produk/update','ProdukController@update');
Route::post('modal_tambah_produk', 'ProdukController@modal_tambah');
Route::post('modal_edit_produk/{id}/modal_edit', 'ProdukController@modal_edit');
Route::post('update_produk/{id}/update', 'ProdukController@update')->name('simpan_ubah_produk');

//Demo Transaksi

Route::get('demo','DemoController@index');

//produkSKU
Route::post('modal_edit_SKU/{id}/modal_edit', 'ProdukController@modal_edit');
Route::post('update_produk/{id}/update', 'ProdukController@update')->name('simpan_ubah_produk');

//PROMO
Route::get('/promo','PromoController@index');
Route::post('/promo/store','PromoController@store')->name('simpan_tambah_promo');
Route::get('/promo/delete/{id}', 'PromoController@destroy');
Route::post('modal_tambah_promo', 'PromoController@modal_tambah');
Route::post('modal_edit_promo/{id}/modal_edit', 'PromoController@modal_edit');
Route::post('update_promo/{id}/update', 'PromoController@update')->name('simpan_ubah_promo');

//Galery
Route::get('/galery','GaleryController@index');
Route::post('/galery/store','GaleryController@store')->name('simpan_tambah_galery');
Route::get('/galery/delete/{id}','GaleryController@destroy');
Route::post('modal_tambah_galery', 'GaleryController@modal_tambah');
Route::post('modal_edit_galery/{id}/modal_edit', 'GaleryController@modal_edit');
Route::post('update_galery/{id}/update', 'GaleryController@update')->name('simpan_ubah_galery');

//PRODUK ATT
Route::get('/produkatt','ProdukattController@index');
Route::post('/produkatt/store','ProdukattController@store')->name('simpan_tambah_produkatt');
Route::get('/produkatt/delete/{id}', 'ProdukattController@destroy');
Route::post('modal_tambah_produkatt', 'ProdukattController@modal_tambah');
Route::post('modal_edit_produkatt/{id}/modal_edit', 'ProdukattController@modal_edit');
Route::post('update_produkatt/{id}/update', 'ProdukattController@update')->name('simpan_ubah_produkatt');

//Detail_transaksi
Route::get('/dtransaksi','DtransaksiController@index');
Route::post('/dtransaksi/store','DtransaksiController@store')->name('simpan_tambah_dtransaksi');
Route::get('/dtransaksi/delete/{id}', 'DtransaksiController@destroy');
Route::post('modal_tambah_dtransaksi', 'DtransaksiController@modal_tambah');
Route::post('modal_edit_dtransaksi/{id}/modal_edit', 'DtransaksiController@modal_edit');
Route::post('update_dtransaksi/{id}/update', 'DtransaksiController@update')->name('simpan_ubah_dtransaksi');

//Transaksi
Route::get('/transaksi','TransaksiController@index');
Route::post('/transaksi/store','TransaksiController@store')->name('simpan_tambah_transaksi');
Route::get('/transaksi/delete/{id}', 'TransaksiController@destroy');
Route::post('modal_tambah_transaksi', 'TransaksiController@modal_tambah');
Route::post('modal_edit_transaksi/{id}/modal_edit', 'TransaksiController@modal_edit');
Route::post('update_transaksi/{id}/update', 'TransaksiController@update')->name('simpan_ubah_transaksi');

Route::post('modal_edit_transaksi2/{id}/modal_edit2', 'TransaksiController@modal_edit2');
Route::post('update_transaksi/{id}/update2', 'TransaksiController@update2')->name('simpan_ubah_transaksi2');

//User

Route::get('/user','UserCOntroller@index');


});

Auth::routes();
Route::get('auth/{provider}', 'MemberController@redirectToProvider');
Route::get('auth/{provider}/callback', 'MemberController@handleProviderCallback');

//Route::get('/home', 'HomeController@index')->name('home');



Route::get('/adminlog', 'Auth\LoginController@index2');
//admin ardy
// Route::get('/home', 'HomeController@index')->name('home');
