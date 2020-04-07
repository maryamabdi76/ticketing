<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transactions_Type extends Model
{
    public function Transactions()
    {
        return $this->hasMany('App\Models\Transactions','id','type');
    }
}
