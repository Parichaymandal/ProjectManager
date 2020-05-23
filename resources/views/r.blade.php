<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    @if($job->file != null)
        <a href="{{route('submit.show',$job->id)}}" class="btn btn-primary btn-xs" >{{$job->file}}</a>
    @endif

    @if($job->jobs != null)
        @foreach($job->jobs as $j)
            @if($j->file != null)
                <a href="{{route('submit.show',$j->id)}}" class="btn btn-primary btn-xs" >{{$job->file}}</a>
            @endif

            @if($j->jobs != null)
                <a href="{{route('repogitory.show',$j->id)}}" class="btn btn-primary btn-xs" >{{$j->name}} Folder</a>
            @endif
        @endforeach
    @endif
</body>
</html>