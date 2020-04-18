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


	public function create()
    {
        return view('shops.create');
    }


    public function store(Request $request)
    {
        $shop = new Shop;
        $shop->name = $request->name;
        $shop->address = $request->address;
        $shop->image_url = $request->image_url;
        $shop->user_id = Auth::user()->shop();
        $shop->save();
        
        return redirect()->route('shop.index', [
        	'id' => $shop->id,
        ]);
    }

    public function edit($id){
        $shop = Shop::find($id);
        return view('shops.edit', [
        	'shop' => $shop,
        ]);
    }

    public function update(Request $request,$id)
    {

    	$shop = Shop::find($id);

        $shop->name = $request->name;
        $shop->address = $request->address;
        $shop->image_url = $request->image_url;
        $shop->save();

        return redirect()->route('shops.index', [
        	'id' => $shop->id,
        ]);
    }


}
