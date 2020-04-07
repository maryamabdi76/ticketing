<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function Users()
    {
        return $this->belongsToMany('App\User', 'roles_users', 'roles_id', 'users_id');
    }
    public function Permission()
    {
        return $this->hasOne('App\Models\Permission');
    }
}
