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
					<a href="/shop/{{ $shop->id }}">{{$shop->name}}</a>	
				</div>
				<div class="card-body">
					{{$shop->address}}
					{{$shop->image_url}}
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>