<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicleowner extends Model
{
  

    public function vehicles()
   {
    	return $this->hasMany('App\vehicle');
    }
}

