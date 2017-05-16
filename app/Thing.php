<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thing extends Model
{
    protected $fillable = ['destination', 'sub_company', 'person', 'weight', 'RMB', 'courier_id', 'status', 'number', 'path'];
      protected $dates = ['date'];
    public function courier()
    {
    	 return $this->belongsTo('App\Courier');
    }
}
