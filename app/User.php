<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','isCompany',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function employee()
    {
        return $this->hasOne('App\Employee','user_id');
    }

    public function company()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function users()
    {
        return $this->hasMany('App\User','user_id');
    }

    public function messages(){
        return $this->hasMany('App\Message','user_id');
    }

    public function designations(){
        return $this->hasMany('App\Designation','user_id');
    }
}
