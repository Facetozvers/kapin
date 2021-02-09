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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
