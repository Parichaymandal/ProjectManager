<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected  $fillable = [
        'name', 'age','contact', 'email','profile_picture'
    ];

    public function jobs()
    {
        return $this->hasMany('App\Job', 'employee_id');
    }

    public function designation()
    {
        return $this->belongsTo('App\Designation');
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function auth()
    {
        return $this->belongsTo('App\User','user_id');
    }


}
