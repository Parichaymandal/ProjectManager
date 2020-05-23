<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="css/searchMember.css">
<link rel ="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
<title>Search Member</title>
</head>

<body>
<div class="container">
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
<div class="row">

<div class="col-sm-4" style="height:auto">

            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="no image" src="img/img.jpg">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="">{!! Auth::user()->name !!}</a>
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
<!--profile body-->
<div class="col-sm-6">

  <div class="search-container">
    {!! FORM::open(['route'=>'search-member.store']) !!}
      <input type="text" placeholder="Search Member.."style="margin-left:245px;margin-bottom:20px" name="search">
      <button type="submit" ><i class="fa fa-search">search</i></button>
    {!! FORM::close() !!}
  </div>


    <div class="col-sm-6">
        @if($users != null)
        @foreach($users as $member)

            @if($member->isCompany != 1)
            <div class="row">
                <div class="card bg-warning">
                    <div  class="card-body">
                        <!--image-->
                        <div class="col-sm-5">
                            <img src="img/img.jpg" class="card-img-left" id="profile">
                        </div>
                        <!--info-->
                        <div class="col-sm-7">
                            <p>{{$member->name}}</p>

                            <h6>{{$member->email}}</h6>
                            <!--see prfl buttn-->
                            <a href="{{route('employee.show',$member->id)}}" class="btn btn-primary" style="margin-top:100px">See Profile</a>
                            <a href="{{route('search-member.edit',$member->id)}}" class="btn btn-primary"style="margin-top:100px;margin-left:40px">Add Member</a>                        </div>
                    </div>
                </div>

            </div>
            @endif

    @endforeach
    @endif
    <!--add member buttn-->
        {{--<button type="button" class="btn btn-success"style="width:300px;margin-left:250px ;margin-top:20px">ADD NEW</button>--}}
    </div>

    <!--add member buttn-->
	{{--<button type="button" class="btn btn-success"style="width:300px;margin-left:250px ;margin-top:20px">ADD NEW MEMBER</button>--}}
	</div>
   <div class="col-sm-2">
	<h4></h4>  
   </div>
   </div>
</div>
</body>

<footer>
</footer>

</html>