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
    return view('welcome');
});

Route::get('/products/create', 'ProductController@create');
Route::get('/products/update', 'ProductController@update');
Route::get('/products/delete', 'ProductController@delete');

Route::get('/users/create', 'UserController@create');
Route::get('/users/update', 'UserController@update');
Route::get('/users/delete', 'UserController@delete');

Route::get('/orders/create', 'OrderController@create');
Route::get('/orders/update', 'OrderController@update');
Route::get('/orders/delete', 'OrderController@delete');

Route::get('/shopping_cart/create', 'ShoppingCartController@create');
Route::get('/shopping_cart/update', 'ShoppingCartController@update');
Route::get('/shopping_cart/delete', 'ShoppingCartController@delete');
