<?php

namespace App\Http\Controllers;

use App\User;
use App\Shop;
use App\Menu;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function indexForUser($user_name)
	{
		$user = Auth::user()->first();
		$orders = Auth::user()->orders()->get();
		return view ('orders.indexforuser', ['orders' => $orders, 'user' => $user]);
	}


	public function indexForShop(int $shop_id)
	{
		$shop = Shop::where('name', $shop_name)->first();
		$orders = $shop->orders()->get();
		dd($orders);
		return view ('orders.index', ['orders' => $orders]);
	}



	public function show()
	{
		
	}

	public function create(int $menu_id)
	{
		$user = Auth::user()->first();		
		$menu = Menu::find($menu_id);
		$shop = $menu->shop()->first();

		return view('orders.create', ['shop' => $shop, 'menu' => $menu, 'user' => $user]);
	}

	public function store(Request $request, int $menu_id)
	{

		$user = Auth::user()->first();		
		$menu = Menu::find($menu_id);
		$shop = $menu->shop()->first();

		$order = new Order;
		$order->user_id = $user->id;
        $order->menu_id = $menu_id;
        $order->quantity = $request->quantity;
        $order->address = $request->address;
        $order->save();

        return redirect()->route('orders.indexforuser', ['user_name' => $user->name]);
	}

	public function edit(int $order_id)
	{
		
        $order = Order::find($order_id);
        $menu = $order->menu()->first();

        return view('orders.edit', [ 'menu' => $menu, 'order' => $order]);
	}

	public function update(Request $request, int $menu_id, int $order_id)
	{
		$order = Order::find($order_id);

        $order->quantity = $request->quantity;
        $order->address = $request->address;
        $order->save();
        $order->user_id = Auth::user()->first();

        return redirect()->route('orders.index', ['id' => $order->user_id]);
	}

	public function delete(int $menu_id, int $order_id)
    {
        //削除対象レコードを検索
        $order = Order::find($order_id);
        $order->user_id = Auth::user()->get();
        //削除
        $order->delete();
        //リダイレクト
        return redirect()->route('orders.index', ['id' => $order->user_id]);
    }

}
