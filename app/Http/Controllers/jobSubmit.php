<?php

namespace App\Http\Controllers;

use App\Job;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;


class jobSubmit extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('JobSubmit',compact('user'));
        //
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
        $filename = null;

        $submit_count = sizeof($request->all())-3;
        $input = $request->all();
        $job = Job::find($input['jobid']);
        $total_req_count = $job->requirements->count();
        $completeness = ($submit_count/$total_req_count)*100;
//        dd($completeness);

        if($request->hasFile('file'))
        {


            $destinationPath="files";
            $file = $request->file('file');
            $filename=$file->getClientOriginalName();
            $request->file('file')->move($destinationPath,$filename);
//            $job->update(['file'=> $filename]);

        }




        $job->update(['partial_completeness'=> $completeness]);
        $job->update(['file'=> $filename]);
        $job->update(['file_uploaded_at' => Carbon::now()]);
        $job->update(['file_uploaded_by' => Auth::user()->id]);
        $job->update(['status'=>'0']);






        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::find($id);
        return response()->download("files/".$job->file);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $job = Job::find($id);
        return view('JobSubmit', compact('job','user'));
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
        //
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
