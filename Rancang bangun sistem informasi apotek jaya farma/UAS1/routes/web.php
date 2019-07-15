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

Route::get('dashboard', 'DashboardController@index'); 

Route::get('/DataObat', 'DataObatController@index')->name('DataObat'); 
Route::get('/DataObat/create','DataObatController@create')->name('DataObat.create');
Route::post('/DataObat/create','DataObatController@store')->name('DataObat.store');
Route::get('/DataObat/edit/{id}','DataObatController@edit')->name('DataObat.edit');
Route::patch('/DataObat/edit/{id}','DataObatController@update')->name('DataObat.update');
Route::delete('/DataObat/hapus/{id}','DataObatController@destroy')->name('DataObat.destroy');



Route::get('/DataKaryawan', 'DataKaryawanController@index')->name('DataKaryawan'); 
Route::get('/DataKaryawan/create','DataKaryawanController@create')->name('DataKaryawan.create');
Route::post('/DataKaryawan/create','DataKaryawanController@store')->name('DataKaryawan.store');
Route::get('/DataKaryawan/edit/{id}','DataKaryawanController@edit')->name('DataKaryawan.edit');
Route::patch('/DataKaryawan/edit/{id}','DataKaryawanController@update')->name('DataKaryawan.update');
Route::delete('/DataKaryawan/hapus/{id}','DataKaryawanController@destroy')->name('DataKaryawan.destroy');