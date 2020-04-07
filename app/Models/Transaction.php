<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function TranStatus()
    {
        return $this->belongsTo('App\Models\TranStatus');
    }
    public function TranType()
    {
        return $this->belongsTo('App\Models\TranType');
    }
    public function Factor()
    {
        return $this->belongsTo('App\Models\Factor');
    }
}
