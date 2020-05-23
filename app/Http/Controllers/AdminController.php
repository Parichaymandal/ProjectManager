<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\laravel;

use Illuminate\support\Facades\Input;

class AdminController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create()
    {
      //  return view('Main');
    }
    public function store(Request $request)
    {

       // $name = $request->input("name");
        //$email = $request->input('email');
        //$password = $request->input('pwd');
       //$input = $request->all();
        //return $name;
        $user=new laravel;
        $user->name=Input::get("name");
        $user->email=Input::get("email");
        $user->pwd=Input::get("pwd");
      //  return $user->name;
        $user->save();

    }
}
