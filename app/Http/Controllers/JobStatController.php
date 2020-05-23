<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class JobStatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $jobs = Job::where('id','=',5)->first();
        $jobs = $jobs->jobs;




        foreach ($jobs as $i =>$job)
        {


            $totalWeight[$i] = 0;
            $count[$i] = 0;
            foreach ($job->jobs as $j)
            {
                $totalWeight[$i] = $totalWeight[$i] + $j['weight'];
                $count[$i] = $count[$i]+1;

            }

        }

        foreach ($jobs as $i =>$job)
        {
            $totalComplete[$i] = 0;
            $weight = 1;

            foreach ($job->jobs as $j => $jb)
            {
                if($totalWeight[$i] != 0)
                    $weight = ($jb['weight']/$totalWeight[$i] );

                $completeness[$i][$j] =  ($jb['completeness']*$weight);

                $totalComplete[$i] = $totalComplete[$i] + $completeness[$i][$j];

            }

            $incomplete[$i] = 100 - $totalComplete[$i];

        }
        $user = Auth::user();
       //return $user;


        return view('details',compact('jobs','completeness','incomplete','totalComplete','count','user'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobs = Job::where('id','=',$id)->first();
        $j = $jobs;

        $user = Auth::user();

//        dd();

        if ($jobs->jobs->count()<1){
            $user = Auth::user();

            $jobs = Job::where('id','=',$id)->get();
            $j=Job::where('id','=',$id)->first() ;

//            dd("OK");

            foreach ($jobs as $i =>$job)
            {

//                echo $i;
                $totalWeight[$i] = 0;
                $count[$i] = 0;
                foreach ($job->jobs as $j)
                {
                    $totalWeight[$i] = $totalWeight[$i] + $j['weight'];
                    $count[$i] = $count[$i]+1;

                }

                if(sizeof($job->jobs)==0)
                {
                    $totalWeight[$i] = $job['weight'];
                    $count[$i] = 1;
                }

            }

            foreach ($jobs as $i =>$job)
            {
                $totalComplete[$i] = 0;
                $weight = 1;

                foreach ($job->jobs as $j => $jb)
                {
                    if($totalWeight[$i] != 0)
                        $weight = ($jb['weight']/$totalWeight[$i] );

                    $completeness[$i][$j] =  ($jb['completeness']*$weight);

                    $totalComplete[$i] = $totalComplete[$i] + $completeness[$i][$j];

                }

                if(sizeof($job->jobs)==0)
                {
                    if($totalWeight[$i] != 0)
                        $weight = ($job['weight']/$totalWeight[$i] );

                    $completeness[$i][0] =  ($job['completeness']*$weight);

                    $totalComplete[$i] = $completeness[$i][0];
                }

                $incomplete[$i] = 100 - $totalComplete[$i];

            }


            $user = Auth::user();

            return view('single_detail',compact('j','jobs','completeness','incomplete','totalComplete','count','user'));

        }

        $jobs = $jobs->jobs;

        if(false)
            return redirect('main_dashboard');
        else
        {
            foreach ($jobs as $i =>$job)
            {


                $totalWeight[$i] = 0;
                $count[$i] = 0;
                foreach ($job->jobs as $j)
                {
                    $totalWeight[$i] = $totalWeight[$i] + $j['weight'];
                    $count[$i] = $count[$i]+1;

                }

                if(sizeof($job->jobs)==0)
                {
                    $totalWeight[$i] = $job['weight'];
                    $count[$i] = 1;
                }

            }

            foreach ($jobs as $i =>$job)
            {
                $totalComplete[$i] = 0;
                $weight = 1;

                foreach ($job->jobs as $j => $jb)
                {
                    if($totalWeight[$i] != 0)
                        $weight = ($jb['weight']/$totalWeight[$i] );

                    $completeness[$i][$j] =  ($jb['completeness']*$weight);

                    $totalComplete[$i] = $totalComplete[$i] + $completeness[$i][$j];

                }

                if(sizeof($job->jobs)==0)
                {
                    if($totalWeight[$i] != 0)
                        $weight = ($job['weight']/$totalWeight[$i] );

                    $completeness[$i][0] =  ($job['completeness']*$weight);

                    $totalComplete[$i] = $completeness[$i][0];
                }

                $incomplete[$i] = 100 - $totalComplete[$i];

            }


            $user = Auth::user();

            return view('details',compact('j','jobs','completeness','incomplete','totalComplete','count','user'));
        }





    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::find($id);
//        return $job;

        $job->update(['status'=>'1','completeness'=>$job['partial_completeness']]);

        return redirect('dashboard');
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
