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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/shops', 'ShopController@index')->name('shops.index');

Route::get('/shop/{id}', 'ShopController@show')->name('shops.show');

Route::get('/shops/create', 'ShopController@create')->name('shops.create');
Route::post('/shops/create', 'ShopController@store')->name('shops.store');

Route::get('/shops/{id}/edit', 'ShopController@edit')->name('shops.edit');
Route::post('/shops/{id}/edit', 'ShopController@update')->name('shops.update');

Route::post('/shops/{id}/', 'ShopController@delete')->name('shops.delete'); 
