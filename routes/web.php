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

Route::resource('orders','OrdersController');
//Route::get('/orders/create','OrdersController@create');
//Route::get('/orders/{order}','OrdersController@show');
//Route::get('/orders/{order}/edit','OrdersController@edit');
//Route::patch('/orders/{order}','OrdersController@update');
//Route::delete('/orders/{order}','OrdersController@destroy');
//Route::get('/orders','OrdersController@index');
//Route::post('/orders','OrdersController@store');

Auth::routes();
Route::get('/apidata','ApiDataController@index')->name('ApiData');
Route::get('/home', 'HomeController@index')->name('home');
