<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/member_profile_new.css')}}">

    <title>profile</title>
<!--<script>

$(document).ready(
 
  function(){
   $("#").hide();
    $("img").click(function(){
	 $("#myModal").fadetoggle("slow");
	 
	 });
  });
</script>-->
</head>

<body>
<div class="container">

<!--navbar-->
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
<!--navbar-->

<div class ="row">
<!--sidebar-->
<div class="col-sm-4" style="height:auto">

            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    {{--<img alt="no image" stylerc="img/img.jpg">--}}
                    @if(Auth::user()->employee->profile_picture == null)
                        <img id="no-image" name="srk" src="img/img.jpg">
                    @else
                        <img id="no-image" name="srk" src="{{asset($auth_pp)}}">
                    @endif
                </div>
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



        </div>
		
		<ul class="nav navbar-inverse nav-pills nav-stacked profile">

                @if(Auth::user()->isCompany == 1)
                    @foreach(Auth::user()->users as $user)
                        <li class="active"><a class="chatMember btn" type="button" value="{!! $user['id'] !!}" onclick="getChatBox({!! $user['id'] !!})">{{$user->name}}</a></li>
                    @endforeach
					@elseif(Auth::user()->company != null)
                    @foreach(Auth::user()->company->users as $user)
                        <li class="active"><a href="#">{{$user->name}}</a></li>
                    @endforeach
                @endif
            </ul>

</div>
<!--sidebar-->>
<div class="col-sm-8" id="noman">
<div id="panel">
<a data-toggle="modal" data-target="#myModal">
    @if($u->employee->profile_picture == null)
        <img id="profile_pic" name="srk" src="img/img.jpg">
    @else
        <img id="profile_pic" name="srk" src="{{asset($pp)}}">
    @endif</a>
<div class="row">
<h2 id="pic_font">{{$u->employee->name}}</h2>
<h5 id="pic_font">click on the image to see the full details</h5>

 
</div>
</div>
</div>
</div>
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">USer Profile</h4>
        </div>
        <div class="modal-body">
            @if($u->employee->profile_picture == null)
                <img id="profile_pic" name="srk" src="img/img.jpg">
            @else
                <img id="profile_pic" name="srk" src="{{asset($pp)}}">
            @endif

            <div class="row">
                @if($u->employee != null)
             <h2 id="pic_font">{{$u->employee->name}}</h2>
             <h5 id="pic_font">{{$u->employee->email}}</h5>
                @endif
                @if($u->company != null)
			 <h5 id="pic_font">{{$u->company->name}}</h5>
			    @endif
			 <label style="margin-left:430px" for="pic_font">skills:</label>
			 <h5 class="pic_font_modal" id="skill">Acting,bussiness,speaking</h5>
			 
			 <label style="margin-left:410px" for="designation:">designation</label>
			 <h5 class="pic_font_modal" id="designation">{{$u->employee->designation}}</h5>
			 
			 <label style="margin-left:390px" class="pic_font_modal" for="complete">Project Completed</label>
			 <div id="complete" class="pic_font_modal" >
	            @foreach($u->employee->jobs as $job)
                     <p>{{$job->name}}</p>

                @endforeach
	         </div>	

 
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

            @if(Auth::user()->id == $u->id)
		        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal_edit">Edit</button>
            @endif
        </div>
      </div>
    </div>
  </div>
  
   <!-- Modal -->
  <div class="modal fade" id="myModal_edit" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Profile</h4>
        </div>
        <div class="modal-body">
            @if($u->employee->profile_picture == null)
                <img id="profile_pic" name="srk" src="img/img.jpg">
            @else
                <img id="profile_pic" name="srk" src="{{asset($pp)}}">
            @endif

                <div class="row">

		  {!! FORM::open(['route'=>['employee.update',$u->employee->id],'files'=>true,'method'=>'PUT']) !!}

                    {{ csrf_field() }}

                    <div class="modal_input">

                 <div>
                     <label class="pic_font_modal" for="complete">Upload Your Image</label></br>
                     <input type="file" accept="image/*" name="file" value="" />
                 </div>
             </div>

			 <div>
			  <label class="pic_font_modal" for="complete">Name:</label></br>
                   <input type="text" name="name" value="{{$u->employee->name}}" />
                </div>
			 </div>
			 
             <div class="modal_input">
			 <div>
			       <label  class="pic_font_modal" for="complete">Email:</label></br>
                   <input name="email" type="text" value="{{$u->employee->email}}" />
                </div>
			 </div>
			
			 <div class="modal_input">
			 {{--<div>--}}
			        {{--<label  class="pic_font_modal" for="complete">Company Name:</label></br>--}}
                   {{--<input type="text" />--}}
                {{--</div>--}}
			 {{--</div>--}}
			 
			<div class="modal_input">
			 <div>
			       <label  class="pic_font_modal" for="complete">Skills:</label></br>
                   <input type="text" />
                </div>
			 </div>
			
			 <div class="modal_input">
			 <div>
				   <label  class="pic_font_modal" for="complete">Designtion:</label></br>
                   <input type="text" />
                </div>
			 </div>
			 
			 
			 
			 
			 
			

 
          </div>
        </div>
        <div class="modal-footer">
         
		  <button type="submit" class="btn btn-success" >save</button>
        </div>
        {!! FORM::close() !!}
      </div>
    </div>
  </div>
</div>
</body>

<footer>
</footer>
</html>