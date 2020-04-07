<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallets extends Model
{
    public function User()
    {
        return $this->hasOne('App\User','users_id','id');
    }
}
