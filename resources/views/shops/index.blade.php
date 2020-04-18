<!DOCTYPE html>
<html lang="ja">
  <head></head>
    <body>
      <div class="container">
		<div class="row justify-content-left">
		  @foreach($shops as $shop)
			<div class="col-md-4 mb-2">
			  　<div class="card">
				　<div class="card-header">
					<a href="/shop/{{ $shop->id }}">{{$shop->name}}</a>
				　</div>
                  <div class="card-body">
					　{{$shop->address}}					  
				  </div>
			    </div>
			</div>
		   @endforeach
		   <a href="/shops/create">新規登録</a>
		</div>
	  </div>
	</body>
</html>
