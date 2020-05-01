<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Factors extends Model
{

    use SoftDeletes;
    protected $date=['deleted_at'];

    protected $fillable = [
        'users_id','sum','discount','total','purchase_date'
    ];

    public function Factors_Status()
    {
        return $this->belongsTo('App\Models\Factors_Status','status','id');
    }
    public function Transactions()
    {
        return $this->hasMany('App\Models\Transactions','id','factors_id');
    }
    public function User()
    {
        return $this->belongsTo('App\User','users_id','id');
    }
    public function Discounts()
    {
        return $this->belongsTo('App\Models\Discounts','discount_id','id');
    }
    public function Shows()
    {
        return $this->belongsToMany('App\Models\Shows', 'Factors_Show', 'factors_id', 'shows_id')->withPivot('seat_number');
    }
}
