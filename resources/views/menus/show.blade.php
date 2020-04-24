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
				<a href="{{ route('menus.edit', ['shop_id' => $shop->id, 'menu_id' => $menu->id]) }}">編集</a>
				<form method="post" action="{{ route('menus.delete', ['shop_id' => $shop->id, 'menu_id' => $menu->id])}}">
                @csrf
                	<input type="submit" value="削除" class="btn btn-danger btn-sm" onclick='return confirm("本当に削除しますか？");'>
                </form>
				<a href="{{ route('menus.index', ['shop_id' => $shop->id]) }}">一覧に戻る</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>