<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factors extends Model
{
    public function Factors_Status()
    {
        return $this->belongsTo('App\Models\Factors_Status','status','id');
    }
    public function Transactions()
    {
        return $this->hasMany('App\Models\Transactions','id','factors_id');
    }
    public function User()
    {
        return $this->belongsTo('App\User','users_id','id');
    }
    public function Discounts()
    {
        return $this->belongsTo('App\Models\Discounts','discount','id');
    }
    public function Shows()
    {
        return $this->belongsToMany('App\Models\Shows', 'Factors_Show', 'factors_id', 'shows_id')->withPivot('seat_number');
    }
}
