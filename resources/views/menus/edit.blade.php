<html>
<head></head>
<body>
      <form method='post' action="{{ route('menus.update', ['shop_name' => $shop->name, 'menu_name' => $menu->name]) }}" >
            @csrf
            <ul class="list-group">
                  <li class="list-group-item"> メニュー名<input class="form-control" name="name" type="text" value="{{ $menu->name }}"></li>
                  <li class="list-group-item">メニューの詳細<input class="form-control" name="description" type="text" value="{{ $menu->description }}"></li>
                  <li class="list-group-item">画像　<input class="form-control" name="image_url" type="text" value="{{ $menu->image_url }}"></li>
            </ul>
            <form>
                  <div class="form-submit">
                        <button type="submit" class="btn btn-primary btn-sm">更新する</button><br>
                  </div>
            </form>
            <a href="{{ route('menus.index', ['shop_name' => $shop->name]) }}">メニューの一覧に戻る</a>
            </div>
      </body>
</html>