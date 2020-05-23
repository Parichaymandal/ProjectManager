@extends("includes/header")
@section("content")

    <div class="row">

        <div class="col-sm-3">
            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="no image" src="/unknown2.png">
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
                <!-- <li class="active"><a href="#">Home</a></li>
                 <li><a href="http://localhost:8000/project"><span class="glyphicon glyphicon-dashboard"></span> Create New Project</a></li>
                 <li><a href="http://localhost:8000/submit">Submit Your Project</a></li>
               <!--  <li><a href="#">Current Job</a></li>-->
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
                            <img src="/submit1.jpg" alt="sorry" width="cover" height="auto">
                            <div class="carousel-caption">
                                <h1 style="margin-left:110px ">Game Over !!! </h1>
                                <p style="margin-left: 280px">Now Submit Your Project Here </p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="/submit2.jpg" alt="sorry" width="cover" height="auto">
                            <div class="carousel-caption">
                                <h1 style="margin-left:110px ">Game Over!!!</h1>
                                <p style="margin-left: 280px">Now Submit Your Project Here</p>
                            </div>
                        </div>
                 <!--
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
                        </div> -->

                    </div>

                </div>
            </div>
            <div class="container">

                {!! FORM::open(['route'=>'submit.store', 'files'=>true, 'methos'=>'POST','enctype' => 'multipart/form-data']) !!}

                <div class="row">

                    @foreach($job->requirements as $key => $requirement)
                        <div class="checkbox">
                            <label style="margin-left:15px"><input type="checkbox" id="requirement{{$key}}" name="requirement{{$key}}" value="{{$requirement->resuirement}}">{{$requirement->resuirement}}</label>
                        </div>

                        <input type="text" id="count" value="{{$key+1}}">
                    @endforeach

                </div>


                {{--<div class="form">--}}
                <button id="req" type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#assignModal">Submit Document</button>
                {{--</div>--}}

                <div id="assignModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">

                                <!--here is the file picker-->

                                <div class="container">
     <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <img src="/unknown.jpg"style="width:150px; height:150px; float:left; border-radius: 50%;margin-right: 25px;">
            <h2></h2>

            <h3> File Upload </h3>

            {{--<input type="file" id="myFile"> <br>--}}
            {{--<input type="button" value="submit" class="btn btn-success">--}}

            {{--<script>--}}
                {{--function myFunction() {--}}
                    {{--var x = document.getElementById("myFile");--}}
                    {{--x.disabled = true;--}}
                {{--}--}}
            {{--</script>--}}



        <!--
            <form  action="/profile" method="post">

                <label>Sending File</label><br>
                <input type="file" name="file">
                 <input type="hidden" name="_token" value="{{csrf_token()}}">
            </form>
        -->

        </div>
    </div>
</div>

                                <!--end of file picker-->
                                <!--sendingAddress-->

                             <!--   <div class="modal-body">
                                    <h3>Sending Person:</h3>
                                    <select name="Sending Person">
                                        <option value="CEO">CEO</option>
                                        <option value="Manager">Manager</option>
                                        <option value="Snr. Programmer">Senior programmer</option>
                                        <option value="Junior programmer">Junior programmer</option>
                                    </select>
                                       </div>
                                job-->
                                  <!--sendingAddress-->
                                <div class="modal-body">
                                    <h3>send your current status:</h3>
                                    <div class="form-group">


                                        <input type="file" name="file" id="myFile"> <br>

                                        {{ csrf_field() }}




                                        <textarea type="text" class="form-control" id="complete" name="completeness" placeholder="completeness"></textarea>
                                        <input type="hidden" class="form-control" name="jobid" value="{!! $job->id !!}" >



                                    </div>
                                </div>




                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Submit</button>

                                {!! FORM::close() !!}

                                <button id="close" type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                            </div>
                        </div>

                    </div>
                </div>





            </div>

        </div>
    </div>
</div>



@endsection
{!! HTML::script('js/jquery.js') !!}

<script src="/js/job_submit_requirements.js"></script>