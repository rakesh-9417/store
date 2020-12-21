<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
	protected $table = 'products';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'prouct_name', 'prouct_desc','price', 'qty','image',
	];
	public function setFilenamesAttribute($value)
	{
		$this->attributes['filenames'] = json_encode($value);
	}
}
