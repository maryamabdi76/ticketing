<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    public function Transaction()
    {
        return $this->hasMany('App\Models\Transaction');
    }
    public function Users()
    {
        return $this->belongsTo('App\Models\Users');
    }
    public function Discount()
    {
        return $this->belongsTo('App\Models\Discount');
    }
    public function UserAddress()
    {
        return $this->belongsTo('App\Models\UserAddress');
    }
    public function Kala()
    {
        return $this->belongsToMany('App\Models\Kala', 'FactorKala', 'factorid', 'kalaid');
    }
}
