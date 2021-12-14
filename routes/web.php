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

Route::get('tugas4', function () {
    return view('tugas4js');
});

Route::get('prak2', function () {
    return view('praktikum2');
});

//buat route utk file blade via controller

Route::get('ets2021', "ViewController@showETS");

Route::get('greetings', "ViewController@showGreetings");
Route::post('sayhi', "ViewController@sayHi");

Route::get('greetings2', "ViewController@showGreetings");
Route::post('sayhi2', "ViewController@sayHi");

//route CRUD pegawai
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store'); //store bisa diubah, sama2 simpen data
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::post('/pegawai/update', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');
Route::get('/pegawai/cari', 'PegawaiController@cari');
Route::get('/pegawai/detail/{id}', 'PegawaiController@view');

//route absen

Route::get('/absen', 'AbsenController@index');
Route::get('/absen/tambah', 'AbsenController@tambah');
Route::post('/absen/store', 'AbsenController@store');
Route::get('/absen/edit/{id}', 'AbsenController@edit');
Route::post('/absen/update', 'AbsenController@update');
Route::get('/absen/hapus/{id}', 'AbsenController@hapus');

//route baju
//route CRUD
Route::get('/baju','BajuController@index');
Route::get('/baju/tambah','BajuController@tambah');
Route::post('/baju/store','BajuController@store');
Route::get('/baju/edit/{id}','BajuController@edit');
Route::post('/baju/update','BajuController@update');
Route::get('/baju/hapus/{id}', 'BajuController@hapus');
Route::get('/baju/cari', 'BajuController@cari');
Route::get('/baju/detail/{id}', 'BajuController@view');
