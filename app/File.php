<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class File extends Model
{
    
  
    protected $fillable = [
        'filenames'
    ];
  
    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function setFilenamesAttribute($value)
    {
        $this->attributes['filenames'] = json_encode($value);
    }
}
