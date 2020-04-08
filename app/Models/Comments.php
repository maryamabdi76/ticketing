<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $fillable = [
        'comment'
    ];
    public function Posts()
    {
        return $this->belongsTo('App\Models\Posts','posts_id','id');
    }
    public function User()
    {
        return $this->belongsTo('App\User','users_id','id');
    }
}
