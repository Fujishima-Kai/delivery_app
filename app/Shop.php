<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
	public function users(){

		return $this->belongsTo('App\User');

	}

	public function menus(){

		return $this->hasMany('App\Menu');

	}

	public function orders(){

		return $this->hasMany('App\Order');

	}
}
