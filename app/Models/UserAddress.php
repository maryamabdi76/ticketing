<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    public function Users()
    {
        return $this->belongsTo('App\Models\Users');
    }
    public function Factor()
    {
        return $this->hasMany('App\Models\Factor');
    }
}
