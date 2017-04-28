<?php

namespace App;
use Illuminate\Database\Eloquent\model;
	Class Department extends model
	{
		public function getAll()
		{
			return static::all();
		}
	}
?>