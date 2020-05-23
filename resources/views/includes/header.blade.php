<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="Author" content="">
	<meta name="description" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}" >


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
			<li><a href="http://localhost:8000/register"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
			<li><a href="http://localhost:8000/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		</ul>
	</div>
</nav>

@yield('content')

<footer>
	<div class="container">

		<p>Copyright &copy; 2016 Noman, Riyan, Sujit</p>
	</div>
</footer>
<!--All Scripts-->

{!! HTML::script('js/jquery.js') !!}
{!! HTML::script('bootstrap/js/bootstrap.min.js') !!}
{{--{!! HTML::script('js/GoogleChartApi.js') !!}--}}

{{--{!! HTML::script('js/my-script.js') !!}--}}

</body>
</html>
