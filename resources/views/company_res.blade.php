<!DOCTYPE html>
<html>

<head>
	{!! HTML::script('js/jquery.js') !!}

	<link rel="stylesheet" href="css/company-style.css">
<link rel ="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
<title>registration</title>
</head>

<body>
<div class="container" >

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
	
	<div class="col-sm-12">
	<div class="resize">
		{{ csrf_field() }}

		<div class="card hovercard">
	<label >Company Name:</label>
		<label >{{$company->name}}</label>

	</div>
	</div>

		<div class="resize">

			<div class="card hovercard">
				<label >Owner Name:</label>
				<label >{{$company->employee->name}}</label>

			</div>
		</div>

		<div class="resize">
	<div class="card hovercard" >
	<div style="margin-left:70px">
	<label >Email:</label>
		<label >{{$company->email}}</label>

	</div>
	</div>
	</div>
	<!--<div class="resize">
	<div class="card hovercard" >
	<div style="margin-left:30px">
	<label >Designation:</label>
	<input type="text" id="designation:"></input>
	</div>
	</div>
	</div>-->
	
	
	<!--designation-->
	
	<div class="resize">
	<div class="card hovercard" >
	<div style="margin-left:30px">
	                      <label for="requirements">Designation</label>

                          <!--  <div class="form-group row">-->

								<input id="des" type="text"  placeholder="Designation">
                                <button type="button" id="add_designation" class="btn btn-default">+</button>
								<input id="url" type="hidden" value="{{route('designation.store')}}">
                           <!--</div>-->
							
	</div>
	</div>
	</div>
	<!--designation-->
	
	
	
	
	<div class="resize">
	<div class="card hovercard" >
	{{--<a><button id="save" href="/main_dashboard" type="button" class="btn btn-success"style="width:300px;margin-left:20px">Save</button></a>--}}
	<a href="/main_dashboard" type="submit" id="save" class="btn btn-success" style="width:300px;margin-left:20px">Save</a>
	</div>
	</div>
	
	</div>
	
	
	<!--designation show-->
	
	<div class="row"syle="height:auto">
	<label style="margin-left:555px">Registered Designation:</label>
	<div id="designation" style="margin-left:555px;margin-top:10px">

		@foreach($company->designations as $designation)
	    	<p>{{$designation->designation}}</p>
		@endforeach
	</div>	
	</div>
	
	<div class="card hovercard" >
	<div class="row">
	<a href="member" class="btn btn-success"style="margin-left:20px;margin-top:20px;width:300px">Member</a>
	</div>
	</div>
	
	<!--<div class="card hovercard">
	<label style="margin-right:160px" >Deignation:</label>
	</br>
	<div class="panel panel-default">
        <div class="panel-body">CEO</div>
		<div class="panel-body">Huaman Relaion</div>
		<div class="panel-body">Sr.Software Eng. </div>
		<div class="panel-body">Jr.soft eng</div>
     </div>
	</div>-->
	
	
	</div>
	</div>

</div>
</body>

<footer>
</footer>
{!! HTML::script('js/jquery.js') !!}

	<script src="/js/add_designation.js"></script>

</html>