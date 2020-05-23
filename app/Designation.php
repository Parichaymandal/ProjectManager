<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected  $fillable = [
        'designation', 'salary', 'rank',
    ];

    public function employee()
    {
        return $this->hasMany('App\Employee','designation_id');
    }

    public function company()
    {
        return $this->belongsTo('App\User','user_id');
    }

}
