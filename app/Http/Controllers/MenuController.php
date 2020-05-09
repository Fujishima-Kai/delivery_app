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
	public function index($shop_name)
	{
		$shop = Shop::where('name', $shop_name)->first();
		$menus = $shop->menus()->get();
		return view ('menus.index', ['menus' => $menus, 'shop' => $shop]);
	}

	public function show($menu_name)
	{
		$menu = Menu::where('name', $menu_name)->first();
		$shop = $menu->shop()->first();
		return view('menus.show', ['menu' => $menu, 'shop' => $shop]);
	}

	public function create($shop_name)
	{
		$shop = Shop::where('name', $shop_name)->first();
		return view('menus.create', ['shop' => $shop]);
	}

	public function store($shop_name, Request $request)
	{
		
		$shop = Shop::where('name', $shop_name)->first();
		
		$menu = new Menu;
		$menu->name = $request->name;
        $menu->description = $request->description;
        $menu->image_url = $request->image_url;
        $menu->shop_id = $shop->id;

        $menu->save();

        return redirect()->route('menus.index', ['shop_name' => $shop_name]);
	}

	public function edit($menu_name)
	{
		
        $menu = Menu::where('name', $menu_name)->first();
		$shop = $menu->shop()->first();

        return view('menus.edit', [ 'menu' => $menu, 'shop' => $shop]);
	}

	public function update($menu_name, Request $request)
	{
		$menu = Menu::where('name', $menu_name)->first();
		$shop = $menu->shop()->first();

        $menu->name = $request->name;
        $menu->description = $request->description;
        $menu->image_url = $request->image_url;
     	$menu->shop_id = $shop->id;

        $menu->save();

        return redirect()->route('menus.index', ['shop_name' => $shop->name]);
	}

	public function delete($menu_name)
    {
        
        $menu = Menu::where('name', $menu_name)->first();
        $shop = $menu->shop()->first();
        $menu->delete();
        //リダイレクト
        return redirect()->route('menus.index', ['shop_name' => $shop->name]);
    }

}
