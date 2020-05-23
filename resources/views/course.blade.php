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

<div class="container">
    <div class="col-md-6">

        {!! FORM::open(array('route'=>'course.store')) !!}

           <div class="panel panel-danger">
                    <div class="form-group">
                       <input type="id" class="form-control" id="course_id" name="course_id" placeholder="put an course id">
                        {!! FORM::text('name',$value=null,$attributes=array('class'=>'form-control','id'=>'course_id')) !!}

                   </div>
                   <div class="form-group">

                       <input type="title" class="form-control" id="course_title" placeholder="Your course title",type="required" >
                   </div>
                   <div class="form-group" >

                       <input type="credit" class="form-control" id="course_credit" placeholder="Course credit">
                   </div>
                   <div class="form-group">
                       {!! Form::submit('Click Me!') !!}
                   </div>
           </div>
        {!! FORM::close() !!}

    </div>
</div>


</body>

</html>