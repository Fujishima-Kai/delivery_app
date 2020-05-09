<html>
<head></head>
<body>
      <form method="post" action="{{ route('menus.store', ['shop_name' => $shop->name])}}">
      @csrf

      <ul>
            <li>メニュー名<input class="form-control" name="name" type="text" id="name"></li>       
            <li>メニューの詳細<input class="form-control" name="description" type="text" id="description"></li>          
            <li>画像<input class="form-control" name="image_url" type="text" id="image_url"></li>
                 
      </ul>
          <form>
            <div class="form-submit">
               <button type="submit" class="btn btn-primary btn-sm">登録する</button><br>
            </div>
          </form>
            <a href="{{ route('menus.index', ['shop_name' => $shop->name]) }}">一覧に戻る</a>
      </div>
</body>
</html>