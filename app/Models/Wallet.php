<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    public function Users()
    {
        return $this->hasOne('App\Models\Users');
    }
}
