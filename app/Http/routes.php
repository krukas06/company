<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

//Route::resource('/home', 'ProductsController@index');
Route::resource('home', 'ProductsController',['only'=>['index']]);


Route::resource('add', 'ProductsController',['parametres'=>[
													
													'add'=>'id'
											   	]
											   	]);

Route::post('add/add_product', 'OrdersController@add');

Route::get('orders', 'OrdersController@orderList');