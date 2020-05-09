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
				<a href="{{ route('shops.edit', ['shop_name' => $shop->name]) }}">編集</a>
				<form method="post" action="#">
                @csrf
                	<input type="submit" value="削除" class="btn btn-danger btn-sm" onclick='return confirm("本当に削除しますか？");'>
                </form>
                <a href="{{ route('orders.indexforshop', ['shop_name' => $shop->name]) }}">お店の注文一覧を表示する</a>
				<a href="{{ route('shops.index') }}">お店の一覧に戻る</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>