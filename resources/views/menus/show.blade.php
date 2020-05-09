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
					{{$menu->name}}	
				</div>
				<div class="card-body">
					{{$menu->description}}
					{{$shop->name}}
				</div>
				  <a href="{{ route('orders.create', ['menu_id' => $menu->id]) }}">このメニューを注文する</a>
				<a href="{{ route('menus.edit', ['menu_name' => $menu->name]) }}">編集</a>
				<form method="post" action="#">
                @csrf
                	<input type="submit" value="削除" class="btn btn-danger btn-sm" onclick='return confirm("本当に削除しますか？");'>
                </form>
				<a href="{{ route('menus.index', ['shop_name' => $shop->name]) }}">一覧に戻る</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>