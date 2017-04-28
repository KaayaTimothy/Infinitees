<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\model;
	Class Product extends model
	{
		public function categories()
		{
			return $this->belongsToMany('App\Models\Category', 'category_product');
		}

		public function subcategories()
		{
			return $this->belongsToMany('App\Models\Subcategory', 'subcategory_product');
		}

		public function orders()
		{
			return $this->belongsToMany('App\Models\Order', 'order_products')->withPivot('quantity');
		}

		public function views(){
			return $this->hasMany('App\Models\View');
		}

		public function getAll()
		{
			return static::all();
		}

		public static function ProductLocatedAt($param){
			return DB::table('products')->where('name', '=', $param)->first();
		}
	}
?>