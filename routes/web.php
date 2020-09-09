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
    return view('index');
});

Auth::routes();

Route::get('/', 'QhromeController@index')->name('homepage');
Route::get('/aboutus', 'QhromeController@about')->name('aboutus');
Route::get('/mobile', 'QhromeController@mobile')->name('mobilepage');
Route::get('/webdevelop', 'QhromeController@webdevelop')->name('webdevelop');
Route::get('/contact', 'QhromeController@contactus')->name('contactus');
Route::get('/quote', 'QhromeController@quote')->name('requestquote');
Route::post('/quote', 'QhromeController@savequote')->name('requestquote.submit');

Route::get('/home', 'HomeController@index')->name('home');
