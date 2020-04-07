<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factors_Status extends Model
{
    public function Factors()
    {
        return $this->hasMany('App\Models\Factors','id','status');
    }
}
