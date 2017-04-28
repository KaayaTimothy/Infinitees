<?php

namespace App\Models;

use Illuminate\Database\Eloquent\model;
	Class Department extends model
	{
		public function categorys(){
			return $this->hasMany('App\Models\category');
		}

		public function getAll()
		{
			return static::all();
		}
	}
?>