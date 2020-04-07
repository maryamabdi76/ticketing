<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $fillable=[
        'path','imageable_id','imageable_type'
    ];
    public function Imageable()
    {
        return $this->morphTo();
    }
}
