<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genders extends Model
{
    public function User()
    {
        return $this->hasMany('App\User','id','gender');
    }
}
