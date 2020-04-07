<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    public $table='category';
    
    public function Kala()
    {
        return $this->hasMany('App\Models\Kala','id','categoryid');
    }
}
