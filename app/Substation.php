<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Substation extends Model
{
    protected $fillable = [
        'name', 'email', 'description', 'addr', 'phone', 'sub_company_id'
    ];

    public function SubCompany()
    {
    	 return $this->belongsTo('App\SubCompany');
    }

    public function couriers()
    {
    	return $this->hasMany('App\Courier');
    }
}
