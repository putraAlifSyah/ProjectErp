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
    return view('/HalamanUtama/index');
});


// produk 
Route::get('/produk', 'ProdukController@index');
Route::get('/produk/tambah', 'ProdukController@create');
Route::post('/produk', 'ProdukController@store');
Route::delete('/produk/{produk}', 'ProdukController@destroy');
Route::get('/produk/{produk}/edit', 'ProdukController@edit');
Route::patch('/produk/{produk}', 'ProdukController@update');


// sales
Route::get('/sales', 'SalesController@index');
Route::get('/sales/tambah', 'SalesController@create');
Route::post('/sales', 'SalesController@store');
Route::delete('/sales/{sales}', 'SalesController@destroy');
Route::get('/sales/{sales}/edit', 'SalesController@edit');
Route::patch('/sales/{sales}', 'SalesController@update');

// bahan
Route::get('/bahan', 'BahanController@index');
Route::get('/bahan/tambah', 'BahanController@create');
Route::post('/bahan', 'BahanController@store');
Route::delete('/bahan/{bahan}', 'BahanController@destroy');
Route::get('/bahan/{bahan}/edit', 'BahanController@edit');
Route::patch('/bahan/{bahan}', 'BahanController@update');

// inventory
Route::get('/inventory', 'InventoryController@index');
Route::get('/inventory/tambah', 'InventoryController@create');
Route::post('/inventory', 'InventoryController@store');
Route::delete('/inventory/{inventory}', 'InventoryController@destroy');
Route::get('/inventory/{inventory}/edit', 'InventoryController@edit');
Route::patch('/inventory/{inventory}', 'InventoryController@update');

// produksi
Route::get('/produksi', 'produksiController@index');
Route::get('/produksi/tambah', 'produksiController@create');
Route::post('/produksi', 'produksiController@store');
Route::delete('/produksi/{produksi}', 'produksiController@destroy');
Route::get('/produksi/{produksi}/edit', 'produksiController@edit');
Route::patch('/produksi/{produksi}', 'produksiController@update');

// BoM
Route::get('/bom', 'BoMController@index');
Route::get('/bom/tambah', 'BoMController@create');
Route::post('/bom', 'BoMController@store');
Route::delete('/bom/{bom}', 'BoMController@destroy');
Route::get('/bom/{bom}/edit', 'BoMController@edit');
Route::patch('/bom/{bom}', 'BoMController@update');

// cek bahan
Route::get('/cekBahan/{cekBahan}', 'cekBahanController@cek');

// ubah status ke mark as todo
Route::get('/markastodo/{markastodo}', 'UbahStatusController@cek');

// tambah bahan ke inventory
Route::get('/Pesan/{id_material}', 'BoMController@ubahStatusPesan');
Route::get('/tambahBahanInventory/{id_material}', 'BoMController@tambahkeInventory');

// Proses Pesanan
Route::get('/prosespesanan/{id_produksi}', 'prosesPesananController@proses');
Route::get('/tambahBahanInventory/{id_produksi}', 'prosesPesananController@tambahkeInventory');

// selesaikan pesanan
Route::get('/selesai/{id_produksi}', 'prosesPesananController@selesai');

// Route::get('/produksi', 'produksiController@index');
// Route::get('/produksi/tambah', 'produksiController@create');
// Route::post('/produksi', 'produksiController@store');
// Route::delete('/produksi/{produksi}', 'produksiController@destroy');
// Route::patch('/produksi/{produksi}', 'produksiController@update');