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

        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li>
                <a href="#" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-log-in"></span> Login
                </a>
                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">


                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">LogIn Form</h4>
                            </div>
                            <div class="modal-body">

                                <div class="form-group">
                                    <input type="Name" class="form-control" id="name" placeholder="User Name:">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" id="pass" placeholder="Password:">
                                </div>

                                <div class="checkbox">
                                    <label id=sizeofP style="color: #0f0f0f"><input type="checkbox" > Remember me</label>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success" data-dismiss="modal">LogIn for Project Manager</button>
                            </div>
                        </div>

                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>

    <div class="row split">
        <div class="col-sm-3">


            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="unknown2.png">
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


            <ul class="nav navbar-inverse nav-pills nav-stacked profile" style="height: 800px">
            <!--  <li class="active"><a href="#">Home</a></li>
                <li><a href="/employee"><span class="glyphicon glyphicon-dashboard"></span>Be an employee</a></li>
                <li><a href="/submit">Submit</a></li>
                <li><a href="#"></a></li> -->
            </ul>


        </div>


            <div class="col-sm-7 row jobCard">

                <div class="jobDesc col-sm-10 col-sm-offset-1">
                    <div class="row descTitle">
                        <h4 style="text-align: center">New Team</h4>
                    </div>

                    @if($isSplit)
                        {!! FORM::open(['route'=>'split.store']) !!}
                    @else
                        {!! FORM::open(['route'=>['split.update',$id], 'method'=>'PUT'])!!}
                    @endif


                        <h3>Name:</h3>
                        <select name="Selectname">

                            @foreach($emp as $e)
                            <option value="{!! $e->id !!}">{!! $e->name !!}</option>
                            @endforeach

                        </select>

                        <input type="hidden" id="parent_id" name="parent_id" value="{!! $id !!}">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name ="name" @if(!$isSplit)value="{{$job->name}}"@endif>
                        </div>
                        <label style="" for="desc">Description</label>
                        <div class="form-group">

                            <textarea name="description" rows="4" cols="50" @if(!$isSplit) value="{{$job->description}}"@endif>
                        </textarea>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="weight">Weight</label>
                                <input type="text" name="weight" class="form-control" id="weight" @if(!$isSplit) value="{{$job->weight}}" @endif>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="deadLine">Dead Line</label>
                                <input type="date" class="form-control" id="deadLine" @if(!$isSplit) value="{{$job->deadLine}}" @endif>
                            </div>


                        </div>


                        <div>
                            <label for="requirements">Requirements</label>


                            <div class="form-group" id="requirements">
                                <p id="para">
                                    @foreach($job->requirements as $req)
                                        <p>{{$req->resuirement}}</p>
                                    @endforeach
                                </p>
                                <input type="text" class="form-control" id="requirement"  placeholder="Requiremnt">
                                <input type="hidden" name="req_count" id="req_count" value="0">
                                <input type="hidden" class="form-control" name="req[]" value="">
                            </div>
                            <button type="button" id="add_requirement" class="btn btn-default">+</button>


                            <label for="requirements">Milestone</label>

                            <div class="form-group row" id="milestones">
                                <p id="para1"></p>

                                <input type="text" class="form-control col-lg-6" id="milestone"  placeholder="milestone">
                                <input type="date" name="deadline" id="deadline">

                                <input type="hidden" name="mile_count" id="mile_count" value="0">
                                {{--<input type="hidden" class="form-control" name="milestone" value="">--}}
                                    {{--<div class="form-group col-lg-6" id="milestone_requirements">--}}
                                        {{--<select class="form-control" id="milestone_requirement"  placeholder="Requiremnt">--}}
                                            {{----}}
                                        {{--</select>--}}
                                        {{--<button type="button" id="add_milestone_requirement" class="btn btn-default">+</button>--}}
                                    {{--</div>--}}
                                <button type="button" id="add_milestone" class="btn btn-default">+</button>
                            </div>

                        </div>



                        <button type="submit" class="btn btn-default">Submit</button>

                    {!! FORM::close() !!}
                </div>
            </div>



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

    {!! HTML::script('js/my-script.js') !!}
    {!! HTML::script('js/job_requirements.js') !!}



    </body>
    </html>
