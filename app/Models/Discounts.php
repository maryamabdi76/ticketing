<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discounts extends Model
{
    public function Factors()
    {
        return $this->hasMany('App\Models\Factors','id','discount_id');
    }
}
