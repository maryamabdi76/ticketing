<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sails extends Model
{
    public function Shows()
    {
        return $this->hasOne('App\Models\Shows');
    }
}
