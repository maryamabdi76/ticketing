<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transactions extends Model
{
    use SoftDeletes;
    protected $date=['deleted_at'];

    protected $fillable=[
        'factors_id','authority','refid','amount','status','type'
    ];

    public function Transactions_Status()
    {
        return $this->belongsTo('App\Models\Transactions_Status','status','id');
    }
    public function Transactions_Type()
    {
        return $this->belongsTo('App\Models\Transactions_Type','type','id');
    }
    public function Factors()
    {
        return $this->belongsTo('App\Models\Factors','factors_id','id');
    }
}
