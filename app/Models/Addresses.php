<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    public function User()
    {
        return $this->belongsTo('App\User','users_id','id');
    }
}
