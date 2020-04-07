<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sail extends Model
{
    public function Kala()
    {
        return $this->hasOne('App\Models\Kala');
    }
}
