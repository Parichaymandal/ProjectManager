<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Job;
use App\Milestone;
use App\Requirement;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class SplitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $emp = Employee::all();
        return view('JobSplit',compact('emp','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $parentJob = Job::find($input['parent_id']);
        $childJob = Job::create($input);
        $parentJob->jobs()->save($childJob);

        $user = Auth::user();

        $childJob['isNew'] = 1;

//        $user->employee->jobs()->save($childJob);
        $emp = Employee::find($input['Selectname']);
        $emp->jobs()->save($childJob);

        for ($i = 0; $i < $input['req_count'];$i++){

            $req = Requirement::create(['resuirement'=>$input['requirement'.$i]]);
            $childJob->requirements()->save($req);
        }

        for ($i = 0; $i < $input['mile_count'];$i++){

            $mile = Milestone::create(['milestone'=>$input['milestone'.$i],'deadline'=>$input['deadline'.$i]]);
//            dd($mile);
            $childJob->milestones()->save($mile);
        }
//        foreach ($input[])



        return redirect('/main_dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $emp = Employee::all();
        $user = Auth::user();
        $isSplit = false;
        $job = Job::find($id);

        return view('JobSplit',compact('emp','id','user', 'isSplit','job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emp = Employee::all();
        $user = Auth::user();
        $isSplit = true;
        $job = Job::find($id);


        return view('JobSplit',compact('emp','id','user', 'isSplit','job'));
       // return redirect('/main_dashboard');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $job = Job::find($id);
        $job->name = $input['name'];
        $job->description = $input['description'];
        $job -> save();
        $emp = Employee::find($input['Selectname']);
        $emp->jobs()->save($job);

        return redirect('/main_dashboard');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
