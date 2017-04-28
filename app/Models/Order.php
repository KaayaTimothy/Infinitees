<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\model;
	Class Order extends model
	{
		public function users()
		{
			return $this->belongsTo('App\User');
		}

		public function products()
		{
			return $this->belongsToMany('App\Models\Product', 'order_products')->withPivot('quantity');
		}

		public function getAll()
		{
			return static::all();
		}

	}
?>