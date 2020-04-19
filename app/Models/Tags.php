<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable=[
        'path','taggable_id','taggable_type'
    ];
    public function Events()
    {
        return $this->morphedByMany('App\Models\Events', 'taggable');
    }
    public function Shows()
    {
        return $this->morphedByMany('App\Models\Shows', 'taggable');
    }
    public function Posts()
    {
        return $this->morphedByMany('App\Models\Posts', 'taggable');
    }
}
