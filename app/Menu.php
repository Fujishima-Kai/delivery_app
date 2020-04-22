<?php

namespace App;
use App\Shop;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function shop(){

		return $this->belongsTo('App\Shop');

	}
}
