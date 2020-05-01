<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shows extends Model
{

    use SoftDeletes;
    protected $date=['deleted_at'];

    protected $fillable = [
        'events_id','salons_id','date','begin','end','num','price'
    ];
    public function Sails()
    {
        return $this->hasOne('App\Models\Sails');
    }
    public function Factors()
    {
        return $this->belongsToMany('App\Models\Factors', 'factors_show', 'shows_id', 'factors_id')->withPivot('seat_number');
    }
    public function Salons()
    {
        return $this->belongsTo('App\Models\Salons','salons_id','id');
    }
    public function Events()
    {
        return $this->belongsTo('App\Models\Events','events_id','id');
    }
    public function Images()
    {
        return $this->morphMany("App\Models\Images","imageable");
    }
    public function Tags()
    {
        return $this->morphtoMany("App\Models\Tags","taggable");
    }
}
