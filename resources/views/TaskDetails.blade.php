
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Author" content="">
    <meta name="description" content="">

    <title></title>

    {!! HTML::style('bootstrap/css/bootstrap.min.css') !!}
    {!! HTML::style('css/style.css') !!}
    {!! HTML::style('bootstrap/icons/bootstrap.icon-large.min.css') !!}
    {!! HTML::style('css/custom.css') !!}


</head>

<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Project Manager</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="/main_dashboard">Profile</a></li>
            <li><a href="/project">Create New Project</a></li>
            <li><a href="/dashboard">All Projects</a></li>
        </ul>


    </div>
</nav>


<div class="row">
    <div class="col-sm-3">
        <div class="card hovercard">
            <div class="cardheader">

            </div>
            <div class="avatar">
                @if($user->employee->profile_picture == null)
                    <img id="profile_pic" name="srk" src="img/img.jpg">
                @else
                    <img id="profile_pic" name="srk" src="files/{{Auth::user()->employee->profile_picture}}">
                @endif            </div>
            <div class="info">
                <div class="title">
                    <a target="_blank" href="">{!! $user->employee['name'] !!}</a>
                </div>
                <div class="desc"></div>
                <div class="desc">Computer Science and Engineering Discipline</div>
                <div class="desc">Khulna University</div>
            </div>
            <div class="bottom">
                <a class="btn btn-primary btn-sm" href="https://twitter.com/">
                    <i class="fa fa-twitter" style="color: #0f0f0f"></i>
                </a>
                <a class="btn btn-danger btn-sm" rel="publisher"
                   href="https://plus.google.com/">
                    <i class="fa fa-google-plus"></i>
                </a>
                <a class="btn btn-primary btn-sm" rel="publisher"
                   href="https://www.facebook.com">
                    <i class="fa fa-facebook"></i>
                </a>

            </div>
        </div>


        <ul class="nav navbar-inverse nav-pills nav-stacked profile">
            <li class="active"><a href="/main_dashboard">Home</a></li>
            <li><a href="/project"><span class="glyphicon glyphicon-dashboard"></span>Create Project</a></li>
            <li><a href="/submit">Submit Project</a></li>
            <li><a href="#"></a></li>
        </ul>


    </div>



    @foreach($jobs as $key => $job)

        <div class="col-sm-7 row jobCard">
            <div class="col-sm-5" id="pieChart{!! $key+1 !!}">


                <input type="hidden" id="split{!! $key+1 !!}" value="{!! $count[$key] !!}">

                @foreach($job->jobs as $splits => $split)

                    <input type="hidden" id = "job{!! $key+1 !!}split{!! $splits+1 !!}" value="{!! $completeness[$key][$splits] !!}">

                @endforeach

                @if(sizeof($job->jobs) == 0)
                    <input type="hidden" id="split{!! 1 !!}" value="{!! $count[$key] !!}">
                    <input type="hidden" id = "job{!! $key+1 !!}split{!! 1 !!}" value="{!! $completeness[$key][0] !!}">


                @endif

                <input type="hidden" id="incomplete{!! $key+1 !!}" value="{!! $incomplete[$key] !!}">


            </div>


            <div class="col-sm-7 jobDesc">
                <div class="row descTitle">
                    <h4 style="text-align: center">{!! $job->name !!}</h4>
                </div>
                <div class="row overview">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th></th>
                            <th></th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Weight</td>
                            <td>{!! $job->weight !!}</td>

                        </tr>
                        <tr>
                            <td>Assigned To</td>
                            <td>{!! $job->employee['name'] !!}</td>

                        </tr>
                        <tr>
                            <td>Completed</td>
                            <td>{!! $totalComplete[$key] !!}</td>

                        </tr>

                        <tr>
                            <td>
                                @if(sizeof($job->jobs) == 0)
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                             aria-valuemin="0" aria-valuemax="100" style="width:{!! $job->partial_completeness !!}%">
                                            {!! $job->partial_completeness !!}% Complete
                                        </div>
                                    </div>
                                @endif
                            </td>
                            <td>

                                <a href="{{route('split.edit',$job->id)}}" class="btn btn-primary btn-xs" >Split</a>
                                <a href="{{route('show.edit',$job->id)}}" class="btn btn-primary btn-xs" >Reassign</a>


                            @if(sizeof($job->jobs) == 0 && $job->status == 0)
                                    <a href="{{route('taskdetails.edit',$job->id)}}" class="btn btn-primary btn-xs" >Accept</a>
                                @endif

                                @if($job->file != null )
                                    <a href="{{route('submit.show',$job->id)}}" class="btn btn-primary btn-xs" >Attachment</a>
                                @endif

                            </td>


                        </tr>

                        </tbody>
                    </table>


                </div>


            </div>
        </div>
    @endforeach
    <input type="hidden" id="key" value="{!! $key+1 !!}">






</div>

<footer>
    <div class="container">

        <p>Copyright &copy; 2018 Noman </p>
    </div>
</footer>
<!--All Scripts-->

{!! HTML::script('js/jquery.js') !!}
{!! HTML::script('bootstrap/js/bootstrap.min.js') !!}
{!! HTML::script('js/GoogleChartApi.js') !!}

{!! HTML::script('js/statistics.js') !!}

</body>
</html>


