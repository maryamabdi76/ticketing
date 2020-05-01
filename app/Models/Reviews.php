<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    // use SoftDeletes;
    // protected $date = ["deleted_at"];

    protected $fillable = [
        'rating','comment','like','dislike','status'
    ];



    public function Events()
    {
        return $this->belongsTo('App\Models\Events','events_id','id');
    }
    public function User()
    {
        return $this->belongsTo('App\User','users_id','id');
    }
}
