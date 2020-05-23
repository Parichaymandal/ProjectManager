<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
protected  $fillable = [
'conpany_name', 'domain', 'email',
];

    public function employee()
    {
        return $this->hasMany('App\Employee', 'company_id');
    }

    public function designation()
    {
        return $this->hasMany('App\Designation', 'company_id');
    }


}
