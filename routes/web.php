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


Route::get('/shops', 'ShopController@index')->name('shops.index')->middleware('auth');

Route::get('/shops/{id}', 'ShopController@show')->name('shops.show')->middleware('auth')->where(['id' => '[0-9]+']);

Route::get('/shops/create', 'ShopController@create')->name('shops.create')->middleware('auth');
Route::post('/shops/create', 'ShopController@store')->name('shops.store')->middleware('auth');

Route::get('/shops/{id}/edit', 'ShopController@edit')->name('shops.edit')->middleware('auth')->where(['id' => '[0-9]+']);
Route::post('/shops/{id}/edit', 'ShopController@update')->name('shops.update')->middleware('auth')->where(['id' => '[0-9]+']);

Route::post('/shops/{id}/', 'ShopController@delete')->name('shops.delete')->middleware('auth')->where(['id' => '[0-9]+']); 



Route::get('/shops/{shop_id}/menus', 'MenuController@index')->name('menus.index')->middleware('auth')->where(['shop_id' => '[0-9]+']);

Route::get('/shops/{shop_id}/menus/{menu_id}', 'MenuController@show')->name('menus.show')->middleware('auth')->where(['shop_id' => '[0-9]+', 'menu_id' => '[0-9]+']);

Route::get('/shops/{shop_id}/menus/create', 'MenuController@create')->name('menus.create')->middleware('auth')->where(['shop_id' => '[0-9]+']);
Route::post('/shops/{shop_id}/menus/create', 'MenuController@store')->name('menus.store')->middleware('auth')->where(['shop_id' => '[0-9]+']);

Route::get('/shops/{shop_id}/menus/{menu_id}/edit', 'MenuController@edit')->name('menus.edit')->middleware('auth')->where(['shop_id' => '[0-9]+', 'menu_id' => '[0-9]+']);
Route::post('/shops/{shop_id}/menus/{menu_id}/edit', 'MenuController@update')->name('menus.update')->middleware('auth')->where(['shop_id' => '[0-9]+', 'menu_id' => '[0-9]+']);

Route::post('/shops/{shop_id}/menus/{menu_id}', 'MenuController@delete')->name('menus.delete')->middleware('auth')->where(['shop_id' => '[0-9]+', 'menu_id' => '[0-9]+']);



