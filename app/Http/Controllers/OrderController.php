<?php

namespace App\Http\Controllers;

use App\User;
use App\Shop;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function index(int $id)
	{
		$orders = Auth::user($id)->orders()->get();
		//$orders = $user->order()->get();
		return view ('orders.index', ['orders' => $orders, 'id' => $id]);
	}

	public function show(int $shop_id, int $menu_id)
	{
		$menu = Menu::find($menu_id);
		$shop = Shop::find($shop_id);
		return view('menus.show', ['menu' => $menu, 'shop' => $shop]);
	}

	public function create(int $shop_id)
	{
		$shop = Shop::find($shop_id);
		return view('menus.create', ['shop' => $shop]);
	}

	public function store(int $shop_id, Request $request)
	{
		$menu = new Menu;
		$menu->name = $request->name;
        $menu->description = $request->description;
        $menu->image_url = $request->image_url;
        $menu->shop_id = $shop_id;

        $menu->save();

        return redirect()->route('menus.index', ['shop_id' => $shop_id]);
	}

	public function edit(int $shop_id, int $menu_id)
	{
		
        $menu = Menu::find($menu_id);
        $shop = Shop::find($shop_id);

        return view('menus.edit', [ 'shop_id' => $shop_id, 'menu_id' => $menu_id, 'menu' => $menu, 'shop' => $shop]);
	}

	public function update(Request $request, int $shop_id, int $menu_id)
	{
		$menu = Menu::find($menu_id);

        $menu->name = $request->name;
        $menu->description = $request->description;
        $menu->image_url = $request->image_url;
     	$menu->shop_id = $shop_id;

        $menu->save();

        return redirect()->route('menus.index', ['shop_id' => $shop_id, 'menu_id' => $menu_id, 'menu' => $menu]);
	}

	public function delete(int $shop_id, int $menu_id)
    {
        //削除対象レコードを検索
        $menu = Menu::find($menu_id);
        //削除
        $menu->delete();
        //リダイレクト
        return redirect()->route('menus.index', ['shop_id' => $shop_id, 'menu_id' => $menu_id, 'menu' => $menu]);
    }

}
