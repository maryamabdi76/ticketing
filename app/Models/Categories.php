<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function Events()
    {
        return $this->hasMany('App\Models\Events','id','categories_id');
    }
}
