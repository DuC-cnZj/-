<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
	protected $fillable = ['name', 'age', 'addr', 'phone', 'substation_id'];
    public function station()
    {
    	return $this->belongsTo('App\Substation');
    }
        public function things()
    {
    	return $this->hasMany('App\Thing');
    }
}
