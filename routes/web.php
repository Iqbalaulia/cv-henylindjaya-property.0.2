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
Route::get('/','HalamanController@welcome')->name('welcome');
Route::get('/halaman/galeri','HalamanController@galeri')->name('halaman.galeri');
Route::get('/halaman/header','HalamanController@header')->name('halaman.header');
Route::get('/halaman/footer','HalamanController@footer')->name('halaman.footer');