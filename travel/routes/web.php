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

Route::get('/home', 'AppController@index')->name('home');
Route::get('/', 'AppController@index')->name('front');
Route::get('/flights/result', 'AppController@flights_result')->name('flights.result');
Route::get('/hotels/result', 'AppController@hotels_result')->name('hotels.result');

Route::resource('flights', 'FlightsController');
Route::resource('hotels', 'HotelsController');

Route::post('medias/store', 'MediasController@store')->name('medias.store');

Route::get('/dashboard', 'FlightsController@dashboard')->name('dashboard');
