<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transactions_Status extends Model
{
    public function Transactions()
    {
        return $this->hasMany('App\Models\Transactions','id','status');
    }
}
