<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    protected $fillable = ['resuirement'];

    public function jod(){
        return $this->belongsTo('App\Job','job_id');
    }

    public function milestone(){
        return $this->belongsTo('App\Milestone','milestone_id');
    }
}
