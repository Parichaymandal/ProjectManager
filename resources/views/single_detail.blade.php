<!DOCTYPE html>
<html>
<head>
    {{--<link rel="stylesheet" href="css/workStatusDetails.css">--}}
    {{--<link rel ="stylesheet" href="bootstrap/css/bootstrap.min.css">--}}
    {{--<script src="bootstrap/js/bootstrap.min.js"></script>--}}
    <meta charset="UTF-8">
    <meta name="Author" content="">
    <meta name="description" content="">

{!! HTML::style('bootstrap/css/bootstrap.min.css') !!}
{!! HTML::style('css/style.css') !!}
{!! HTML::style('bootstrap/icons/bootstrap.icon-large.min.css') !!}
{!! HTML::style('css/custom.css') !!}
{!! HTML::style('css/workStatusDetails.css') !!}
<!--main Pie Chart-->
{{--<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>	--}}
<!-- end of main pie chart-->

    <!--fractional pie chart-->




    <title></title>
<!--All Scripts

{!! HTML::script('js/jquery.js') !!}
{!! HTML::script('bootstrap/js/bootstrap.min.js') !!}
{!! HTML::script('js/GoogleChartApi.js') !!}

{{--{!! HTML::script('js/my-script.js') !!}--}}-->
</head>

<body>
<div class="container">
    <!-- navbar-->
    <div class="row">
        <div class="col-sm-12"id="navbar">


            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">PROJECT MANAGER</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="/main_dashboard">Profile</a></li>
                        <li><a href="/project">Create New Project</a></li>
                        <li><a href="/dashboard">All Projects</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://localhost:8000/register"><span class="glyphicon glyphicon-user"></span>logout</a></li>
                    </ul>


                </div>
            </nav>



        </div>
    </div>

    <!--Description body-->

    <div class="row">
        <!--sidebar-->
        <div class="col-sm-4" style="height:auto">

            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="no image" src="img/unknown2.JPG">
                </div>
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

            <ul class="nav nav-pills nav-stacked profile"style="height:auto;position:static">
                <li class="active"><a href="/main_dashboard">Home</a></li>
                <li><a href="/project"><span class="glyphicon glyphicon-dashboard"></span>Create Project</a></li>
                <li><a href="/submit">Submit Project</a></li>
                <li><a href="#"></a></li>
            </ul>
        </div>



        <div class="col-sm-8">
            <div class=row>

                <!--main pie-->
                <div class="col-sm-7" id="pieChart1" style="height:350px">

                </div>

                <!--main pie details-->
                <div class="col-sm-5" Style="height:auto ;text-align:center">

                    <div class="card bg-success text-white">
                        <div class="card-body">title</div>
                        {{ $j->name }}
                    </div>
                    </br>
                    <div class="card bg-success text-white">
                        <div class="card-body">weight</div>
                        {!! $j->weight !!}
                    </div>
                    </br>
                    <div class="card bg-success text-white">
                        <div class="card-body">assigned to</div>
                        {!! $j->employee['name'] !!}
                    </div>
                    </br>
                    <div class="card bg-success text-white">
                        <div class="card-body">completed</div>
                        {!! $totalComplete[0] !!}
                    </div>
                    </br>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="{{ $j['partial_completeness'] }}"
                             aria-valuemin="0" aria-valuemax="100" style="width:{!! $j->partial_completeness !!}%">
                            {{ $j['partial_completeness'] }}% Complete
                        </div>
                    </div>

                    {{--<div class="progress">--}}
                    {{--<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">--}}
                    {{----}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <div>
                        @if(sizeof($jobs) == 0 && $j->status == 0)

                            <a type="button" class="btn btn-success"style="float:left">Accept</a>
                        @endif
                            <a href="{{route('split.edit',$j->id)}}" type="button" class="btn btn-danger"style="float:right">Split</a>
                            <a href="{{route('split.show',$j->id)}}" type="button" class="btn btn-primary btn-xs" style="float:right">Reassign</a>                    </div>

                </div>
            </div>

            <!--devided pie chart-->
            <div class="row" style="height:auto">


                @foreach($jobs as $key => $job)
                    <input type="hidden" id="split{!! $key+1 !!}" value="{!! $count[$key] !!}">


                    @if($key > 0)
                        <div class="col-sm-4">
                            <div class="row" id="pieChart{{$key+1}}" style= "height:150px">

                            </div>
                            <div class="row" style="align-content: center">
                                <a href="{{route('dashboard.edit',$job->id)}}" style="align-tex: center; height: 10px" class="btn btn-success">Details</a>
                            </div>
                        </div>

                    @endif

                    <input type="hidden" id="split{!! $key+1 !!}" value="{!! $count[$key] !!}">

                    @foreach($job->jobs as $splits => $split)

                        <input type="hidden" id = "job{!! $key+1 !!}split{!! $splits+1 !!}" value="{!! $completeness[$key][$splits] !!}">

                    @endforeach

                    @if(sizeof($job->jobs) == 0)
                        <input type="hidden" id="split{!! 1 !!}" value="{!! $count[$key] !!}">
                        <input type="hidden" id = "job{!! $key+1 !!}split{!! 1 !!}" value="{!! $completeness[$key][0] !!}">


                    @endif

                    <input type="hidden" id="incomplete{!! $key+1 !!}" value="{!! $incomplete[$key] !!}">



                @endforeach
                <input type="hidden" id="key" value="{!! $key+1 !!}">


            </div>







            <div class="row;_margin">
                <!--reqirement-->
                <div class="col-sm-6" Style="min-height:300px; max-height:auto">
                    <h2>Requirements</h2>

                    @foreach($j->requirements as $requirement)
                        <div class="panel panel-default">
                            <div class="panel-body">{{$requirement->resuirement}}</div>
                        </div>
                    @endforeach

                </div>
                <!--milestone-->
                <div class="col-sm-6 " Style="min-height:300px; max-height:auto" >
                    <h3>Milestone</h3>

                    @foreach($j->milestones as $milestone)
                        <div class="checkbox disabled">
                            <label style="margin-left:10px"><input type="checkbox" value="" disabled>{{$milestone->milestone}}</label>
                        </div>
                    @endforeach

                </div>
            </div>

            <div id="repository">
                <div class="row">
                    <button type="button" class="btn btn-warning" style="width:100%">Repository</button>
                </div>
                <div class="row" style="height:auto">

                    @if($j->file != null)
                        <div class=col-sm-2>
                            <a href="{{route('submit.show',$job->id)}}" target="_blank"><img id="file" src="/img/file.png" style="height:60px ;width:60px" alt ="no image"></a><br>
                            <a href="{{route('submit.show',$job->id)}}" target="_blank"><label for="file" id="label" >{{$job->file}} {{$job->file_uploaded_at}} {{$job->employee->name}}</label></a>
                        </div>
                    @endif

                    @if($jobs != null)
                        @foreach($jobs as $jb)
                            @if($jb->file != null)
                                <div class=col-sm-2>
                                    <a href="{{route('submit.show',$jb->id)}}" target="_blank"><img id="file" src="/img/file.png" style="height:60px ;width:60px" href="" alt ="no image">{{$j->file}} {{$job->file_uploaded_at}}</a><br>
                                    <a href="{{route('submit.show',$jb->id)}}" target="_blank"><label for="file" id="label" >{{$j->file}}</label></a>
                                </div>             @endif

                            @if($j->jobs != null)
                                <div class=col-sm-2>
                                    <a href="{{route('repogitory.show',$jb->id)}}" target="_blank"><img id="image" src="/img/folder.png" style="height:60px ;width:60px" href="" alt ="no image"></a><br>
                                    <a href="{{route('repogitory.show',$jb->id)}}" target=_blank><label for="image" id="label" >{{$j->name}} Folder</label></a>
                                </div>

                            @endif
                        @endforeach
                    @endif

                </div>
            </div>



        </div>



        <!--requirement+milestone-->


    </div>




</div>





</body>

{!! HTML::script('js/jquery.js') !!}
{!! HTML::script('bootstrap/js/bootstrap.min.js') !!}
{!! HTML::script('js/GoogleChartApi.js') !!}

{!! HTML::script('js/statistics.js') !!}

{{--<scriptript>--}}

{{--function loadFiles(s) {--}}
{{--console.log(s);--}}

{{--$.get('/repository-load/?id=' + s, function (data) {--}}
{{--console.log(data);--}}
{{--// $('#issue_table').empty();--}}
{{--$("#issue_table tbody").html(data); //Replace contents of <tbody> tag--}}


{{--console.log()--}}

{{--$("#repository").html(--}}
{{--'<div class="row">'+'<button type="button" class="btn btn-warning" style="width:100%">Repository</button>'+--}}
{{--'</div>'+--}}
{{--'<div class="row" style="height:auto">'+--}}

{{--if(data[0].file != null){--}}
{{--append('<div class=col-sm-2>'+--}}
{{--'<a href="" target="_blank"><img id="file" src="/img/file.png" style="height:60px ;width:60px" alt ="no image"></a>'+'<br>'+--}}
{{--'<a href="" target="_blank"><label for="file" id="label" >{{$job->file}} {{$job->file_uploaded_at}} {{$job->employee->name}}</label></a>'+--}}
{{--'</div>');--}}

{{--}--}}


{{--if(data[1] != null){--}}
{{--foreach(j in data[1])--}}
{{--{--}}
{{--if (j.file != null) {--}}
{{--append('<div class=col-sm-2>' +--}}
{{--'<a href="" target="_blank"><img id="file" src="/img/file.png" style="height:60px ;width:60px" href="" alt ="no image">{{$j->file}} {{$job->file_uploaded_at}}</a>' + '<br>' +--}}
{{--'<a href="" target="_blank"><label for="file" id="label" >{{$j->file}}</label></a>' +--}}
{{--'</div>');--}}
{{--}--}}


{{--if(j.jobs > 0){--}}
{{--append('<div class=col-sm-2>' +--}}
{{--'<a href="" target="_blank"><img id="image" src="/img/folder.png" style="height:60px ;width:60px" href="" alt ="no image"></a>'+'<br>'+--}}
{{--'<a href="" target=_blank><label for="image" id="label" >{{$j->name}} Folder</label></a>'+--}}
{{--'</div>');--}}
{{--}--}}

{{--}--}}


{{--}--}}

{{--+'</div'> ;--}}
{{--);--}}
{{--//                     $.each(data, function (i, d) {--}}
{{--//                         var $tr = $('<tr>').append(--}}
{{--//                                 $('<td>').text(d.title),--}}
{{--//                                 $('<td>').text(d.project_name),--}}
{{--//                                 $('<td>').text(d.current_status),--}}
{{--//                                 $('<td>').text(d.issue_type),--}}
{{--//                                 $('<td>').text(d.date_identified),--}}
{{--//                                 $('<td>').text(d.actual_resolution_date),--}}
{{--//                                 $('<td>').html('<a href="' + d.show_url + '" class="btn btn-primary btn-sm" title="View">' +--}}
{{--//                                         '<span class="fa fa-eye"></span> </a>' +--}}
{{--//--}}
{{--//                                         '<a href="' + d.edit_url + '" class="btn btn-primary btn-sm" title="Edit">' +--}}
{{--//                                         '<span class="fa fa-edit"></span> </a>' +--}}
{{--//--}}
{{--//                                         '<a href="' + d.delete_url + '" data-method = "delete"  data-confirm="Are u sure to Delete this !!!" class="btn btn-danger btn-sm" title="Delete">' +--}}
{{--//                                         '<span class="fa fa-trash"></span> </a>')--}}
{{--//                         ).appendTo('#issue_table');--}}
{{--//                         // console.log($tr.wrap('<p>').html());--}}
{{--//                     });--}}
{{--}--}}
{{--);--}}
{{--};--}}

{{--</script>--}}

{{--<footer>--}}
{{--<h6> <center>@Noman Mahmud,120209<center><h6>--}}
{{--</footer>--}}

{{--<!--All Scripts-->--}}



{{--</html>--}}