<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckOwner;
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


Route::get('/user/shops', 'ShopController@indexForUser')->name('shopsforuser.index')->middleware('auth');


Route::get('/owner/shops', 'ShopController@indexForOwner')->name('shops.index')->middleware('auth', 'owner');

Route::get('/shops/create', 'ShopController@create')->name('shops.create')->middleware('auth');
Route::post('/shops/create', 'ShopController@store')->name('shops.store')->middleware('auth');


Route::get('/shops/{shop_name}', 'ShopController@show')->name('shops.show')->middleware('auth');


Route::get('/shops/{shop_name}/edit', 'ShopController@edit')->name('shops.edit')->middleware('auth');
Route::post('/shops/{shop_name}/edit', 'ShopController@update')->name('shops.update')->middleware('auth');

Route::post('/shops/{shop_name}/', 'ShopController@delete')->name('shops.delete')->middleware('auth'); 



Route::get('/shops/{shop_name}/menus', 'MenuController@index')->name('menus.index')->middleware('auth');

Route::get('/{shop_name}/menus/create', 'MenuController@create')->name('menus.create')->middleware('auth');
Route::post('/{shop_name}/menus/create', 'MenuController@store')->name('menus.store')->middleware('auth');

Route::get('/{menu_name}', 'MenuController@show')->name('menus.show')->middleware('auth');


Route::get('/{menu_name}/edit', 'MenuController@edit')->name('menus.edit')->middleware('auth');
Route::post('/{menu_name}/edit', 'MenuController@update')->name('menus.update')->middleware('auth');

Route::post('/{menu_name}', 'MenuController@delete')->name('menus.delete')->middleware('auth');





Route::get('/{user_name}/orders', 'OrderController@indexForUser')->name('orders.indexforuser')->middleware('auth');

Route::get('/{shop_name}/orders', 'OrderController@indexForShop')->name('orders.indexforshop')->middleware('auth');


Route::get('/order/{order_id}/detail', 'OrderController@show')->name('orders.show')->middleware('auth');

Route::get('/orders//{menu_id}create', 'OrderController@create')->name('orders.create')->middleware('auth');
Route::post('/orders//{menu_id}create', 'OrderController@store')->name('orders.store')->middleware('auth');

Route::get('/order/{order_id}/edit', 'OrderController@edit')->name('orders.edit')->middleware('auth')->where('order_id', '[0-9]+');
Route::post('/order//{order_id}/edit', 'OrderController@update')->name('orders.update')->middleware('auth');

Route::post('/order/{order_id}', 'OrderController@delete')->name('orders.delete')->middleware('auth');


















