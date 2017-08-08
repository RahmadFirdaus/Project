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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/karyawan', 'karyawanController@index')->name('karyawan');

Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function (){
	Route::resource('karyawan', 'KaryawanController');
});

Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function (){
	Route::resource('barang', 'BarangController');
});

Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function (){
	Route::resource('pelanggan', 'PelangganController');
});

Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function (){
	Route::resource('transaksi', 'TransaksiController');
});

Route::resource('karyawan', 'KaryawanController');

