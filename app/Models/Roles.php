<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public function User()
    {
        return $this->belongsToMany('App\User', 'roles_user', 'roles_id', 'users_id');
    }
}
