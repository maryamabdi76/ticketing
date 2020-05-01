<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'comment','users_id','posts_id','status'
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
