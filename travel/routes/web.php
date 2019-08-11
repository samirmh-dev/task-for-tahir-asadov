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

Auth::routes();

Route::get('/', 'AppController@index')->name('front');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('flights', 'FlightsController');
Route::resource('hotels', 'HotelsController');

Route::post('medias/store', 'MediasController@store')->name('medias.store');

Route::get('/dashboard', 'FlightsController@index')->name('dashboard');
