<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function Role()
    {
        return $this->hasOne('App\Models\Role');
    }
}
