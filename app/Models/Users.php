<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    // public $timestamps = false;
    protected $fillable = [
        'username','name', 'email', 'gender', 'mobile', 'password',
    ];
    public function Genders()
    {
        return $this->belongsTo('App\Models\Gender','gender','id');
    }
    public function Role()
    {
        return $this->belongsToMany('App\Models\Role', 'userrole', 'userid', 'roleid');
    }
    public function Review()
    {
        return $this->hasMany('App\Models\Review','id','userid');
    }
    public function UserAddress()
    {
        return $this->hasMany('App\Models\UserAddress');
    }
    public function Support()
    {
        return $this->hasMany('App\Models\Support');
    }
    public function Factor()
    {
        return $this->hasMany('App\Models\Factor');
    }
    public function Wallet()
    {
        return $this->hasOne('App\Models\Wallet');
    }
}
