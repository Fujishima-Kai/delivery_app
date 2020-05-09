<!DOCTYPE html>
<html lang="ja">
  <head>
  	<?php dd($shops); ?>
  </head>
    <body>
      <div class="container">
		<div class="row justify-content-left">
		  @foreach($shops as $shop)
			<div class="col-md-4 mb-2">
			  　<div class="card">
				　<div class="card-header">
					<a href="{{ route('shops.show', ['shop_name' => $shop->name]) }}">{{$shop->name}}</a>
				　</div>
                  <div class="card-body">
					　{{$shop->address}}					  
				  </div>
				  <a href="{{ route('menus.index', ['shop_name' => $shop->name]) }}">このお店のメニューを見る</a>
				   <a href="{{ route('orders.indexforshop', ['shop_name' => $shop->name]) }}">このお店の注文を見る</a>
			    </div>
			</div>
		   @endforeach
		   <a href="{{ route('shops.create') }}">>新規登録</a>
		   <a href="{{ route('orders.indexforuser', ['user_name' => $user->name]) }}">注文一覧へ</a>
		</div>
	  </div>
	</body>
</html>
