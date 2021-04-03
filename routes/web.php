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

Route::get('/', 'PageController@index');
Route::get('/kegiatan', 'PageController@kegiatan');
Route::get('/yayasan', 'PageController@yayasan');
Route::get('/contact', 'PageController@contact');
Route::get('/smp', 'PageController@smp');
Route::get('/sma', 'PageController@sma');
Route::get('/smk', 'PageController@smk');
Route::get('/smk/tkj', 'PageController@tkj');
Route::get('/smk/titl', 'PageController@titl');
Route::get('/smk/tkr', 'PageController@tkr');
Route::get('/smk/multimedia', 'PageController@multimedia');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
