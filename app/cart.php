<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
	protected $table = 'cart';
	public $timestamps = true;

	protected $fillable = [
		'user_id', 'product_id',
	];
}
