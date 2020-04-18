<html>
<head></head>
<body>
      <form action="{{action('ShopController@update', $shop->id)}}" method='post'>
            @csrf
            <ul class="list-group">
                  <li class="list-group-item"> ショップ名<input class="form-control" name="name" type="text" value="{{ $shop->name }}"></li>
                  <li class="list-group-item">住所<input class="form-control" name="address" type="text" value="{{ $shop->address }}"></li>
                  <li class="list-group-item">画像　<input class="form-control" name="image_url" type="text" value="{{ $shop->image_url }}"></li>
            </ul>
            <form>
                  <div class="form-submit">
                        <button type="submit" class="btn btn-primary btn-sm">更新する</button><br>
                  </div>
            </form>
            <form action="{{ action('ShopController@index')}}" method='get'>
                  @csrf
                  <button type="submit" class="btn btn-block btn-default btn-sm">一覧に戻る</button>
            </form>
            </div>
      </body>
</html>