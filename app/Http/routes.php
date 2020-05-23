<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Job;

Route::get('/fuck', function () {
    return view('index4');
});

Route::get('/company_register',function (){
    return view('auth/company_register');
});

//Route::get('/dashboard', function () {
//    return view('DashBoard');
//})->middleware('auth');


Route::get('/details', function () {
    return view('TaskDetails');
})->middleware('auth');

//Route::get('/main_dashboard', function () {
//    return view('main_dashboard');
//})->middleware('auth');
Route::get('/newproject', function () {
    return view('NewProject');
})->middleware('auth');

Route::get('/submittest', function () {
    return view('JobSubmit');
})->middleware('auth');

Route::get('/mamun', function () {
    return view('mamun');
})->middleware('auth');
Route::get('/p','basicController@index');
Route::resource('', 'AdminController');
Route::get('admin','AdminController@index');
Route::post('store','AdminController@store');

Route::resource('project','ProjectController');
Route::resource('main_dashboard','MainDashboardController');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('newjob','NewJobController');
Route::resource('split','SplitController');
Route::resource('dashboard','StatisticsController');
Route::resource('employee','EmployeeController');
Route::resource('taskdetails','JobStatController');
Route::resource('submit','jobSubmit');
Route::resource('course','CourseController');
Route::resource('repogitory','RepogitoryController');

Route::post('/add-requirement','RequirementController@store');

Route::resource('requirement','RequirementController');

Route::post('/add-milestone','MilestoneController@store');

Route::resource('milestone','MilestoneController');




Route::get('/download', function () {
    return view('Importer_Registration');
});


Route::get('/importer', function () {
    return view('Importer_Registration');
});

Route::get('/chatting',function (){
    $reciever_id = (int)Input::get('member_id');
    $reciever = App\User::find($reciever_id);


    $user = App\User::find(Auth::user()->id);

//    dd($reciever_id);

    $messages = null;


    $message1 = $user->messages->where('reciever_id',$reciever_id);


    $messages = $reciever->messages
        ->where('reciever_id',$user['id'])
        ->union($message1);
//        ->sortBy('created_at');

    $messages->sort();
    $i = 0;
    $users = null;
    foreach ($messages as $m)
    {
        $users[$i] = $m->user->name;
        $i++;
    }

    return [$messages,$users];

});

Route::post('send','MessageController@store');
Route::resource('message','MessageController');

Route::get('/repository-load',function (){

    $id = Input::get('id');
    $job = Job::find($id);

    return [$job,$job->jobs];
});


Route::get('member','CompanyController@member');
Route::resource('company','CompanyController');
Route::resource('designation','DesignationController');
Route::resource('search-member','MemberController');
Route::get('/video',function (){
    return view('video');
});
