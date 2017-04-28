<?php

namespace App\Models;

use Illuminate\Database\Eloquent\model;
	Class Subcategory extends model
	{
		protected $table = 'subcategories'; 
		public function categories(){
			return $this->belongsTo('App\Models\category');
		}

		public function products(){
		
			return $this->belongsToMany('App\Models\product', 'subcategory_product');
		}

		public function getAll()
		{
			return static::all();
		}
	}
?>