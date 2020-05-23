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
            <li><a href="/newproject">Create New Project</a></li>
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

    <div class="row">

        <div class="col-sm-3">
            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="no image" src="unknown2.png">
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

            <ul class="nav navbar-inverse nav-pills nav-stacked profile">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="/employee"><span class="glyphicon glyphicon-dashboard"></span>Be an Employee</a></li>
                <li><a href="/submit">Submit Project</a></li>
                <li><a href="#"></a></li>
            </ul>



        </div>


        <div class="col-sm-9">



                <div class="container">
                    <br>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">

                            <div class="item active">
                                <img src="pic1.jpg" alt="sorry" width="cover" height="auto">
                                <div class="carousel-caption">
                                    <h1 style="margin-left:110px ">Wanna Create a Project ??? </h1>
                                    <p style="margin-left: 280px">Here we are in your side for your help</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="pic3.jpg" alt="sorry" width="cover" height="auto">
                                <div class="carousel-caption">
                                    <h1 style="margin-left:110px ">Wanna Create a Project ??? </h1>
                                    <p style="margin-left: 280px">Here we are in your side for your help</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="pic3.jpg" alt="sorry" width="cover" height="auto">
                                <div class="carousel-caption">
                                    <h1 style="margin-left:110px ">Wanna Create a Project ??? </h1>
                                    <p style="margin-left: 280px">Here we are in your side for your help</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="pic4.jpg" alt="sorry" width="cover" height="auto">
                                <div class="carousel-caption">
                                    <h1 style="margin-left:110px ">Wanna Create a Project ??? </h1>
                                    <p style="margin-left: 280px">Here we are in your side for your help</p>
                                </div>
                            </div>

                        </div>

            </div>
                </div>
            <div class="container">
                {!! FORM::open(['route'=>'project.store']) !!}

                    <div class="form-group">

                        <input type="Name" class="form-control" id="name" name="name" style="margin-top: 20px" placeholder="Pick a Projectname">

                    </div>
                    <div class="form-group">

                        <textarea class="form-control" rows="6" id="comment" name="description" placeholder="Project Description"></textarea>

                    </div>
                    <div class="form-group">
                        <input type="Name" class="form-control" id="name" name="deadline" placeholder="Duration">

                    </div>

                    {{--<div class="form">--}}
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#assignModal">Assign</button>
                    {{--</div>--}}

                    <div id="assignModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <h3>Designation:</h3>
                                    <select name="Select Designation">
                                        <option value="CEO">CEO</option>
                                        <option value="Manager">Manager</option>
                                        <option value="Snr. Programmer">Senior programmer</option>
                                        <option value="Junior programmer">Junior programmer</option>
                                    </select>
                                    <h3>Name:</h3>
                                    <select name="id">

                                        @if(Auth::user()->isCompany == 1)
                                            @foreach(Auth::user()->users as $user)
                                                <option value="{!! $user->employee->id !!}">{!! $user->employee->name !!}</option>
                                            @endforeach
                                        @elseif(Auth::user()->company != null)
                                            @foreach(Auth::user()->company->users as $user)
                                                <option value="{!! $user->employee->id !!}">{!! $user->employee->name !!}</option>
                                            @endforeach
                                        @endif

                                        {{--@foreach($emp as $e)--}}
                                            {{--<option value="{!! $e->id !!}">{!! $e->name !!}</option>--}}
                                        {{--@endforeach--}}
                                    </select>




                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>

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
    {{--{!! HTML::script('js/GoogleChartApi.js') !!}--}}

    {{--{!! HTML::script('js/my-script.js') !!}--}}

    </body>
    </html>
