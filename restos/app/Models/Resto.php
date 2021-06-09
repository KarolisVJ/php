<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resto extends Model
{
    use HasFactory;
    public function restoMenu()
    {
        return $this->belongsTo('App\Models\Menu', 'menu_id', 'id');
    }
 
}
