<?php

namespace App\Http\Controllers;

use App\Employee;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();

        return view('create_employee', compact('user'));

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
        $emp = Employee::create($input);
        $user = Auth::user();
        $user->employee()->save($emp);

        if($user->isCompany == 1)
            return redirect('company');

        return redirect('main_dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $u = User::find($id);
//        dd($user->employee);
        $auth_user = Auth::user();
        $pp = 'files/'.$u->employee->profile_picture;
        $auth_pp = 'files/'.$auth_user->employee->profile_picture;
        return view('member_profile_new', compact(['u','pp','auth_pp']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $employee = Employee::find($id);
        $employee->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        //file

        $filename = null;

        if($request->hasFile('file'))
        {


            $destinationPath="files";
            $file = $request->file('file');
            $filename=$file->getClientOriginalName();
            $request->file('file')->move($destinationPath,$filename);
//            $job->update(['file'=> $filename]);

        }


        $employee->update(['profile_picture'=> $filename]);


        $user = $employee->auth;
        $pp = 'files/'.$employee->profile_picture;
        return view('member_profile_new', compact(['user','pp']));
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
