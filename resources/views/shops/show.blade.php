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