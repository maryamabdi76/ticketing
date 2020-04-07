<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable=[
        'path','imaggable_id','imaggable_type'
    ];
    public function Kala()
    {
        return $this->morphedByMany("App\Models\Kala","taggable");
    }

}
