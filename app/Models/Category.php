<?php

namespace App\Models;

use Illuminate\Database\Eloquent\model;
	Class Category extends model
	{
		protected $table = 'categories'; 
		public function subcategories(){
			return $this->hasMany('App\Models\subcategory');
		}

		public function products(){
		
			return $this->belongsToMany('App\Models\product', 'category_product');
		}

		public function getAll()
		{
			return static::all();
		}
	}
?>