<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
     protected $table = 'category';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'category_name', 'category_desc','image',
	];
}
