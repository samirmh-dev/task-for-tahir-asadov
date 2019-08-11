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

Route::resource('flights', 'FlightsController');
Route::resource('hotels', 'HotelsController');

Route::get('/dashboard', 'FlightsController@index');


Route::get('/admin', function(){
    return view('panel');
});