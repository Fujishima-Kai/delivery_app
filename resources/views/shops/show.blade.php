<!DOCTYPE html>
<html lang="ja">
  <head>
  	
  </head>
  <body>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					{{$shop->name}}	
				</div>
				<div class="card-body">
					{{$shop->address}}
					{{$shop->image_url}}
				</div>
				<a href="{{ route('shops.edit', ['id' => $shop->id]) }}">編集</a>
				<form method="post" action="{{ route('shops.delete', [$shop->id])}}">
                @csrf
                	<input type="submit" value="削除" class="btn btn-danger btn-sm" onclick='return confirm("本当に削除しますか？");'>
                </form>
				<form action="{{ action('ShopController@index')}}" method='get'>
            		@csrf
            		<button type="submit" class="btn btn-block btn-default btn-sm">一覧に戻る</button>
      			</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>