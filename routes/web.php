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

//Route::get('/createorder', function () {
//    return view('createorder');
//});
Route::get('/orders/create','OrdersController@create');
Route::get('/orders/{order}','OrdersController@show');
Route::get('/orders/{order}/edit','OrdersController@edit');
Route::get('orders/update', function () {
    return view('updateorder');
});
Route::get('/orders','OrdersController@index');
Route::post('/orders','OrdersController@store');