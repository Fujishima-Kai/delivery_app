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
					<p>注文者：{{$order->user_id}}</p>>
				　</div>
                  <div class="card-body">
                  	<p>ご注文品：{{$order->menu_id}}</p>
					<p>数量：{{$order->quantity}}</p>
					<p>お届け先：{{$order->address}}</p>			  
				  </div>
				  <a href="/shops/create">注文を確定する</a>
			    </div>
			</div>
		   @endforeach		   
		   <a href="{{ route('shops.index')}}">お店一覧へ</a>
		</div>
	  </div>
	</body>
</html>
