<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Segments extends Model
{
    protected $fillable = [
        'name','row','seat','capicity','orders','price'
    ];

    public function Salons()
    {
        return $this->belongsToMany('App\Models\Salons', 'arrangements', 'segments_id', 'salons_id');
    }
}
