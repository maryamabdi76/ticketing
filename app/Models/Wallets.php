<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallets extends Model
{

    protected $fillable = [
        'users_id','money'
    ];

    public function User()
    {
        return $this->hasOne('App\User','users_id','id');
    }
}
