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
					<p>注文者ID：{{$order->user_id}}</p>>
				　</div>
                  <div class="card-body">
                  		<p>{{ $order->menu->name }}</p>
                  		<p>{{ $order->menu->description }}</p>
                  		<p>{{ $order->menu->shop->name }}</p>
				  </div>
				  <a href="#">注文を確定する</a>
				  
			    </div>
			</div>
		   @endforeach		   
		   <a href="{{ route('shops.index')}}">お店一覧へ戻る</a>
		</div>
	  </div>
	</body>
</html>
