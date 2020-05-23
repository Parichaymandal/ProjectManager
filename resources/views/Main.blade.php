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
            {{--<li class="active"><a href="/login">Home</a></li>--}}
            {{--<li><a href="/login">Profile</a></li>--}}
            {{--<li><a href="/login">Create New Project</a></li>--}}
            {{--<li><a href="/login">All Projects</a></li>--}}
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li>
                <a href="/login">
                    <span class="glyphicon glyphicon-log-in"></span> Login
                </a>

            </li>
        </ul>
    </div>
</nav>
    <div class ="row" id="background">

        <div class="row">

           {{--<  {!! Form::open(array('route' => 'admin.store')) !!} >--}}

            <div class="col-sm-6" id="main_text">

                <h id=size>WHY PEOPLE Will
                    USE PROJECT MANAGER</h>
                <p id=sizeofP>this software will help people to work together</p>
            </div>


            <form method="POST" action="store" accept-charset="UTF-16">
                <?php echo csrf_field();?>


            <div class="col-sm-3" id="main_text_box">


                <!--    <div class="form-group">

                        <input type="Name" class="form-control" id="name" placeholder="put an username">
                    </div>
                    <div class="form-group">

                        <input type="email" class="form-control" id="email" placeholder="Your email address">
                    </div>
                    <div class="form-group" >

                        <input type="password" class="form-control" id="pwd" placeholder="Create a password">
                    </div>
                    <div class="checkbox">
                        <label id=sizeofP><input type="checkbox" > Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-success">Sign up for Project Manager</button>

-->


            </div>


            </form>

           {{--<{!! Form::close() !!}>--}}
        </div>


    </div>


    <div class = "row" id="Textbackground">
        <h id="sizeBkText" >Welcome to the workfield,folks</h>
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

{{--{!! HTML::script('js/my-script.js') !!}--}}

</body>
</html>
