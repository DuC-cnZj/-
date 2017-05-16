<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCompany extends Model
{
        protected $fillable = [
        'name', 'email', 'description', 'addr', 'phone'
    ];

    public function stations()
    {
    	return $this->hasMany('App\Substation');
    }

    public function couriers()
    {
        return $this->hasManyThrough('App\Courier', 'App\Substation');
    }
}
