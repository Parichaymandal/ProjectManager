<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\laravel;

class basicController extends Controller
{
    public function index()
    {
       // $myname="this is noman mahmud creation";
        $name="noman";
        $roll="120209";
        $suntum="CSE";
        //return view('practise')->with('name',$myname);
        return view('practise',compact('name','roll','suntum'));
    }
}
