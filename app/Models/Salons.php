<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salons extends Model
{
    protected $fillable = [
        'name','locations_id'
    ];

    public function Shows()
    {
        return $this->hasMany('App\Models\Shows','id','salons_id');
    }
    public function Locations()
    {
        return $this->belongsTo('App\Models\Locations','locations_id','id');
    }
    public function Segments()
    {
        return $this->belongsToMany('App\Models\Segments', 'arrangements', 'salons_id', 'segments_id');
    }
}
