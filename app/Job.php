<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected  $fillable = [
        'name', 'description','isNew', 'weight','completeness','partial_completeness','file','file_uploaded_at','file_uploaded_by','status','deadline'
    ];

    public function employee()
    {
        return $this->belongsTo('App\Employee','employee_id');
    }

    public function jobs()
    {
        return $this->hasMany('App\Job','job_id');
    }

    public function job()
    {
        return $this->belongsTo('App\Job','job_id');
    }

    public function requirements()
    {
        return $this->hasMany('App\Requirement','job_id');
    }

    public function milestones()
    {
        return $this->hasMany('App\Milestone','job_id');
    }




}
