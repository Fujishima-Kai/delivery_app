<html>
<head></head>
<body>
      <form method='post' action="{{ route('orders.update', ['menu_id' => $menu->id, 'order_id' => $order->id]) }}" >
            @csrf
            <ul class="list-group">
                  <li class="list-group-item"> 数量<input class="form-control" name="quantity" type="text" value="{{ $order->quantity }}"></li>
                  <li class="list-group-item">お届け先<input class="form-control" name="address" type="text" value="{{ $order->address }}"></li>
            </ul>
            <form>
                  <div class="form-submit">
                        <button type="submit" class="btn btn-primary btn-sm">更新する</button><br>
                  </div>
            </form>
           
            </div>
      </body>
</html>