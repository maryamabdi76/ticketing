<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    public $table="review";
    use SoftDeletes;
    protected $date = ["deleted_at"];

    protected $fillable = [
        'comment','kalaid','rating','liked','userid'
    ];

    public function Kala()
    {
        return $this->belongsTo('App\Models\Kala','kalaid','id');
    }
    public function Users()
    {
        return $this->belongsTo('App\Models\Users','userid','id');
    }
    public function getLikedAttribute($value)
    {
        if ($value)
            return 'دارد';
        else
            return 'ندارد';
    }

}
