<html>
<head></head>
<body>
      <form action="{{action('ShopController@store')}}" method='post'>
      @csrf

      <ul>
            <li>ショップ名<input class="form-control" name="name" type="text" id="name"></li>       
            <li>住所<input class="form-control" name="address" type="text" id="address"></li>          
            <li>画像<input class="form-control" name="image_url" type="text" id="image_url"></li>
                 
      </ul>
          <form>
            <div class="form-submit">
               <button type="submit" class="btn btn-primary btn-sm">登録する</button><br>
            </div>
          </form>
      <form action="{{ action('ShopController@index')}}" method='get'>
            @csrf
            <button type="submit" class="btn btn-block btn-default btn-sm">一覧に戻る</button>
      </form>
      </div>
</body>
</html>