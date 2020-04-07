<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    public function Genres()
    {
        return $this->belongsToMany('App\Models\Genres', 'events_genre', 'events_id', 'genres_id');
    }
    public function Categories()
    {
        return $this->belongsTo('App\Models\Categories','categories_id','id');
    }
    public function Reviews()
    {
        return $this->hasMany('App\Models\Reviews','id','events_id');
    }
    public function Shows()
    {
        return $this->hasMany('App\Models\Shows','id','events_id');
    }
    public function Posts()
    {
        return $this->hasMany('App\Models\Posts','id','events_id');
    }
    public function Images()
    {
        return $this->morphMany("App\Models\Images","imageable");
    }
    public function Videos()
    {
        return $this->morphMany("App\Models\Videos","videoable");
    }
    public function Tags()
    {
        return $this->morphtoMany("App\Models\Tags","taggable");
    }
}
