<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public function vehicleowners()
   {
    	return $this->hasMany('App\vehicleowner');
    }
}
