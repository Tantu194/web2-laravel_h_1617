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

Route::get('/home',[
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

Route::get('/shop',[
    'as' => 'shop',
    'uses' => 'ShopController@index'
]);
Route::get('/product/{name}',[
    'as' => 'product',
    'uses' => 'ProductController@index'
]);