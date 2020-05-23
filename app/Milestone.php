<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    protected $fillable = ['milestone', 'deadline','file'];

    public function job()
    {
        return $this->belongsTo('App\Job','job_id');
    }

    public function requirements()
    {
        return $this->hasMany('App\Requirement', 'milestone_id');
    }
}
