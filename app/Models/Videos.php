<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    protected $fillable=[
        'source','code','title','width','height','videoable_id','videoable_type'
    ];
    public function videoable()
    {
        return $this->morphTo();
    }
    public function tags()
    {
        return $this->morphtoMany("App\Models\Tags","taggable");
    }
}
