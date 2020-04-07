<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    public function Events()
    {
        return $this->belongsToMany('App\Models\Events', 'events_genre', 'genres_id', 'events_id');
    }
}
