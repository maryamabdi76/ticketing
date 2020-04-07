<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','name', 'email', 'gender', 'phone', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Genders()
    {
        return $this->belongsTo('App\Models\Genders','gender','id');
    }
    public function Roles()
    {
        return $this->belongsToMany('App\Models\Roles', 'roles_user', 'users_id', 'roles_id');
    }
    public function Reviews()
    {
        return $this->hasMany('App\Models\Reviews','id','users_id');
    }
    public function Addresses()
    {
        return $this->hasMany('App\Models\Addresses','id','users_id');
    }
    public function Factors()
    {
        return $this->hasMany('App\Models\Factors','id','users_id');
    }
    public function Wallets()
    {
        return $this->hasOne('App\Models\Wallets','id','users_id');
    }
}
