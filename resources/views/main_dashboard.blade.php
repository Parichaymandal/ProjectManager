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
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/chat-box-style.css')}}">



</head>

<body>
<div class="container-fluid">
<div class= "row">
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
            @if(Auth::user()->isCompany == 1)
                <li><a href="/company">Company Profile</a></li>
            @else
                <li><a href="{{route('employee.show',Auth::user()->employee->id)}}">Profile</a></li>

            @endif
                <li><a href="/logout">Logout</a></li>

        </ul>


    </div>
</nav>

</div>

<!--body content row-->

<div class="row">

        <div class="col-sm-3" style="height:auto">

            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    @if($user->employee->profile_picture == null)
                        <img id="profile_pic" name="srk" src="img/img.jpg">
                    @else
                        <img id="profile_pic" name="srk" src="files/{{Auth::user()->employee->profile_picture}}">
                    @endif                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="">{!! Auth::user()->employee['name'] !!}</a>
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
                <div class="row">
                    <a class="btn btn-warning" href="{{route('employee.show',Auth::user()->id)}}">
                        Edit Owner Profile
                    </a>
                </div>



        </div>
		
		<ul class="nav navbar-inverse nav-pills nav-stacked profile">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <input type="hidden" id="chaterMember" value="">

            @if(Auth::user()->isCompany == 1)
                @foreach(Auth::user()->users as $user)
                    <li class="active"><a class="chatMember btn" type="button" value="{!! $user['id'] !!}" onclick="getChatBox({!! $user['id'] !!})">{{$user->name}}</a></li>
                @endforeach
            @elseif(Auth::user()->company != null)
                @foreach(Auth::user()->company->users as $user)
                    <li class="active"><a class="chatMember btn" type="button" value="{!! $user['id'] !!}" onclick="getChatBox({!! $user['id'] !!})">{{$user->name}}</a></li>
                @endforeach
            @endif
            </ul>

</div>

<div class = "col-sm-8">
		
		
		
		<div class="row;charSection">
		
		
		 <!-- Chat section starts -->
            <div class="col-md-8 charSection" id="chatBoxSection">

                <div class="row">
                    <div class="col-md-offset-3 col-md-6">

                        <div class="row charMessages">
                            <div class="col-md-12">
                                <h1>Chat Area</h1>
                                <hr>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <textarea id="chatBox" class="form-control" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="row chatMessageInputBox">
                            <div class="col-md-12">
                                <input type="text" id="message" class="form-control" placeholder="Text input...">
                            </div>
                        </div>

                        <div class="row chatButtons">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-danger pull-left" onclick="exitWindow()">Exit Char</button>
                                <button type="button" id="send" class="btn btn-info pull-right">Send</button>
                                <a type="button" href="https://appr.tc/r/projectManager" id="video" class="btn btn-info pull-right">Video</a>


                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- Chat section ends -->
		
		
		
		</div>
		
		
		
		
		<div id="postSection" class="row">

            <button type="button" class="btn btn-warning btn-lg " id="sizeOfnotiText" style="margin-left: 250px">Job  <span class="badge"    id="sizeOfnotiText"></span></button>


       @foreach($jobs as $job)
      <div class="panel-group" id="accordion" style="margin-top: 30px">
          <div class="panel panel-danger">
              <div class="panel-heading">
                  <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"> {!! $job->name !!}</a>
                  </h4>

              </div>
              <div id="collapse1" class="panel-collapse collapse">
              <div class="panel-body">
                 {!! $job->description !!}
              </div>
              </div>
            <div>
                <a href="{{route('dashboard.show',$job->id)}}" class="btn btn-primary btn-xs" id="editBtn">Statistics</a>            </div>
              @if(sizeof($job->jobs) == 0)
              <a href="{{route('submit.edit',$job->id)}}" class="btn btn-primary btn-xs" id="editBtn">Submit</a>
          @endif
          </div>
          </div>

          @endforeach







      </div>

	  </div>

          </div>


{!! HTML::script('js/jquery.js') !!}
{!! HTML::script('bootstrap/js/bootstrap.min.js') !!}
{!! HTML::script('js/GoogleChartApi.js') !!}
<script src="{{URL::asset('js/approved_group_page_js.js')}}"></script>
<script src="{{URL::asset('js/chatting.js')}}"></script>

{{--{!! HTML::script('js/my-script.js') !!}--}}

</div>

</body>

<footer>
    <div class="container">

        <p>Copyright &copy; 2018 Noman</p>
    </div>
</footer>
<!--All Scripts-->


</html>











