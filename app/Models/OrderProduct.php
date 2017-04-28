<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\model;
	Class OrderProduct extends model
	{

		public function getAll()
		{
			return static::all();
		}

	}
?>