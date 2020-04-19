<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
	public function users(){

		return $this->belongsTo('App\User');

	}
}
