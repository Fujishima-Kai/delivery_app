<?php

namespace App\Http\Controllers;

use App\user;
use App\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ShopController extends Controller
{
	public function indexForUser(){

        $user = Auth::user();
		$shops = Shop::all();

		return view ('shops.indexforuser', [

            'user' => $user,
			'shops' => $shops,
        
		]);
	}

    public function indexForOwner(){

        $user = Auth::user();
        $shops = Shop::all();
        
        return view ('shops.index', [

            'user' => $user,
            'shops' => $shops,
        
        ]);
    }


	public function show ($shop_name){

		$shop = Shop::where('name', $shop_name)->first();
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
        $shop->user_id = Auth::user()->id;

        $shop->save();

        return redirect()->route('shops.index');
    }

    public function edit($shop_name){

        $shop = Shop::where('name', $shop_name)->first();
        
		if (Auth::user()->id != $shop->user_id) {
		    return redirect()->route('shops.index');
		}


        return view('shops.edit', [
        	'shop' => $shop,
        ]);
    }

    public function update(Request $request, $shop_name)
    {

    	$shop = Shop::where('name', $shop_name)->first();

        $shop->name = $request->name;
        $shop->address = $request->address;
        $shop->image_url = $request->image_url;
        $shop->save();

        return redirect()->route('shops.index');
    }

    public function delete($shop_name)
    {
        $shop = Shop::where('name', $shop_name)->first();
        
        $shop->delete();
        return redirect('/shops');
    }


}
