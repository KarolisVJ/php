<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    public function mechanicTruck()
    {
        return $this->hasMany('App\Models\Truck', 'mechanic_id', 'id');
    }
    
}
