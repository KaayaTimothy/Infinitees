<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\model;
	Class View extends model
	{
		public function products(){
			return $this->belongsTo('App\Models\Product');
		}
	}
?>