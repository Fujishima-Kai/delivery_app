<!DOCTYPE html>
<html lang="ja">
  <head></head>
    <body>
      <div class="container">
		<div class="row justify-content-left">
			<?php dd($user_id); ?>
		  @foreach($menus as $menu)
			<div class="col-md-4 mb-2">
			  　<div class="card">
				　<div class="card-header">
					{{$menu->name}}
				　</div>
                  <div class="card-body">
					　{{$menu->description}}
					  {{$menu->image_url}}					  
				  </div>
				  <a href="#">メニューを選ぶ</a>
			    </div>
			</div>
		   @endforeach
		</div>
	  </div>
	</body>
</html>