<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    public function menuRestos()
    {
        return $this->hasMany('App\Models\Resto', 'menu_id', 'id');
    }
 
}
