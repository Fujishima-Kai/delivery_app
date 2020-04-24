<!DOCTYPE html>
<html lang="ja">
  <head></head>
    <body>
      <div class="container">
		<div class="row justify-content-left">
		  @foreach($menus as $menu)
			<div class="col-md-4 mb-2">
			  　<div class="card">
				　<div class="card-header">
					{{$menu->name}}
				　</div>
                  <div class="card-body">
					  {{$menu->image_url}}					  
				  </div>
				  <a href="{{ route('menus.show', ['shop_id' => $shop->id, 'menu_id' => $menu->id]) }}">このメニューを詳しく見る</a>
			    </div>
			</div>
		   @endforeach
		</div>
		<a href="{{ route('shops.index') }}">お店の一覧に戻る</a>
		<a href="{{ route('menus.create', ['shop_id' => $shop->id]) }}">新規作成</a>
	  </div>
	</body>
</html>