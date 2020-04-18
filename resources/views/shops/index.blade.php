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
					<a href="#" class="list-group-item">
					　{{$shop->name}}
				　　</a>
				　</div>
                  <div class="card-body">
					　<td>{{$shop->address}}</td>					  
				  </div>
			    </div>
			</div>
		   @endforeach
		</div>
	  </div>
	</body>
</html>