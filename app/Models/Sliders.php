<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    protected $fillable=[
        'events_id','title'
    ];
    public function Images()
    {
        return $this->morphMany("App\Models\Images","imageable");
    }
    public function Videos()
    {
        return $this->morphMany("App\Models\Videos","videoable");
    }
    public function Events()
    {
        return $this->belongsTo('App\Models\Events','events_id','id');
    }
}
