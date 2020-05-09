<!DOCTYPE html>
<html lang="ja">
  <head></head>
    <body>
      <div class="container">
		<div class="row justify-content-left">
		  @foreach($orders as $order)
			<div class="col-md-4 mb-2">
			  　<div class="card">
				　<div class="card-header">
					<p>注文ID：{{$order->id}}</p>>
				　</div>
                  <div class="card-body">
                  		<p>{{ $order->menu->name }}</p>
                  		<p>{{ $order->menu->description }}</p>
                  		<p>{{ $order->menu->shop->name }}</p>
                  		<p>{{ $order->address }}</p>
				  </div>
				  <a href="{{ route('orders.edit', ['order_id' => $order->id]) }}">編集</a>
				  <form method="post" action="#">
                @csrf
                	<input type="submit" value="削除" class="btn btn-danger btn-sm" onclick='return confirm("本当に削除しますか？");'>
                
			    </div>
			</div>
		   @endforeach		   
		   <a href="{{ route('shops.index')}}">お店一覧へ戻る</a>
		</div>
	  </div>
	</body>
</html>
