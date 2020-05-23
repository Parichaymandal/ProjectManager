<?php

namespace App\Http\Controllers;

use App\course;
use Illuminate\Http\Request;

use App\Http\Requests;

class CourseController extends Controller
{

    public function index()
    {

        return view('course');
    }
    public function store(Request $request)
    {
        $input=$request->all();
        course::create($input);
        redirect('course');

    }

    public function create()
    {
        //
    }


    //
}
