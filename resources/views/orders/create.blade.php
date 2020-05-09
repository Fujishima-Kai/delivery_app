<html>
<head>注文画面</head>
<body>
      <form method="post" action="{{ route('orders.store', ['id' => $user->id, 'menu_id' => $menu->id, 'shop' => $shop])}}">
      @csrf
      <ul>
            <li>メニュー名:{{ $shop->name }}</li>
            <li>メニュー名:{{ $menu->name }}</li>       
            <li>メニューの詳細:{{ $menu->description }}</li>          
            <li>メニュー画像:{{ $menu->image_url }}</li>       
            <li>数量:<input class="form-control" name="quantity" type="text" id="quantity"></li>          
            <li>お届け先:<input class="form-control" name="address" type="text" id="address"></li>
      </ul>
          <form>
            <div class="form-submit">
               <button type="submit" class="btn btn-primary btn-sm">注文リストに入れる</button><br>
            </div>
          </form>
            <a href="{{ route('menus.index', ['shop_name' => $shop->name]) }}">一覧に戻る</a>
      </div>
</body>
</html>