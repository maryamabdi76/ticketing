<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{

    use SoftDeletes;
    protected $date=['deleted_at'];

    protected $fillable = ['title', 'content','events_id', 'views',];
    public function Events()
    {
        return $this->belongsTo('App\Models\Events','events_id','id');
    }
    public function Comments()
    {
        return $this->hasMany('App\Models\Comments','id','posts_id');
    }
    public function Images()
    {
        return $this->morphMany("App\Models\Images","imageable");
    }
    public function Videos()
    {
        return $this->morphMany("App\Models\Videos","videoable");
    }
    public function Tags()
    {
        return $this->morphtoMany("App\Models\Tags","taggable");
    }
}
