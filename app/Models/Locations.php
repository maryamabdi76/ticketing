<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    protected $fillable = [
        'name','province','city','address'
    ];
    
    public function Salons()
    {
        return $this->hasMany('App\Models\Salons','id','locations_id');
    }
}
