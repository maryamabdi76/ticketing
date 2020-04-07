<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    public function User()
    {
        return $this->hasMany('App\User','gender','id');
    }
}
