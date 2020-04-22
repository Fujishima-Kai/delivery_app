<?php

namespace App\Http\Controllers;

use App\user;
use App\Shop;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class MenuController extends Controller
{
    public function index(Shop $shop){

    	$shop_id = $shop->id;
    	dd($shop_id);
    	//$menus = Shop::find($id)->menus()->get();
    	//$menus = Menu::find($shop_id);

		return view ('menus.index', ['menus' => $menus, 'shop_id' => $shop_id]);
	}
}
