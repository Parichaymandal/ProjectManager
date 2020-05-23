<html>
<head>
    <title>
        @yield('title');
    </title>
</head>
<body>
@section('menubar')
    this is the website sidebar
    @show
<div class="container"style="width: auto;height: 540px">
    @yield('content')
</div>

<div class="footer" style="width:auto;height: 150px">
    @yield('footer')

</div>

</body>
</html>