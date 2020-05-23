<!DOCTYPE html>
<html>
 <link rel="stylesheet" href="/css/stylesheet.css">
 <link rel ="stylesheet" href="/bootstrap/css/bootstrap.min.css">
<head>

</head>

<body>
<div class="container">
<div class="row">

 @if($job->file != null)
        <div class=col-sm-2>
            <a href="{{route('submit.show',$job->id)}}" value = "$job->id" target="_blank"><img id="file" src="/img/file.png" alt ="no image"></a><br>
            <a href="{{route('submit.show',$job->id)}}" target="_blank"><label for="file" id="label" >{{$job->file}} {{$job->file_uploaded_at}} {{$job->employee->name}}</label></a>
        </div>
    @endif

 @if($job->jobs != null)
    @foreach($job->jobs as $j)
             @if($j->file != null)
                 <div class=col-sm-2>
                     <a href="{{route('submit.show',$j->id)}}" target="_blank"><img id="file" src="/img/file.png" href="" alt ="no image">{{$j->file}} {{$job->file_uploaded_at}}</a><br>
                     <a href="{{route('submit.show',$j->id)}}" target="_blank"><label for="file" id="label" >{{$j->file}}</label></a>
                 </div>             @endif

             @if($j->jobs != null)
                     <div class=col-sm-2>
                         <a href="{{route('repogitory.show',$j->id)}}" target="_blank"><img id="image" src="/img/folder.png" href="" alt ="no image"></a><br>
                         <a href="{{route('repogitory.show',$j->id)}}" target=_blank><label for="image" id="label" >{{$j->name}} Folder</label></a>
                     </div>                @endif
    @endforeach
 @endif

     {{--<div class=col-sm-2>--}}
{{--<a href="{{route('repogitory.show',$j->id)}}" target="_blank"><img id="image" src="../../public/img/folder.png" href="" alt ="no image"></a><br>--}}
{{--<a href="{{route('repogitory.show',$j->id)}}" target=_blank><label for="image" id="label" >{{$j->name}} Folder</label></a>--}}
{{--</div>--}}

{{--<div class=col-sm-2>--}}
{{--<a href="{{route('submit.show',$job->id)}}" target="_blank"><img id="file" src="../../public/img/file.png" href="" alt ="no image"></a><br>--}}
{{--<a href="{{route('submit.show',$job->id)}}" target="_blank"><label for="file" id="label" >{{$job->file}}</label></a>--}}
{{--</div>--}}


</div>
</div>


</body>

<footer>

<h6> <center>@Noman Mahmud,120209<center><h6>
</footer>

</html>