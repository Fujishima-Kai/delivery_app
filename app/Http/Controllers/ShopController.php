<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
	public function index(){

		$shops = Shop::all();

		return view ('shops.index', [

			'shops' => $shops,

		]);
	}


	public function show ($id){

		$shop = Shop::find($id);

		return view('shops.show', ['shop' => $shop]);
	}


}
