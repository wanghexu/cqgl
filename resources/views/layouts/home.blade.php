<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    @yield('info')
    <link href="{{asset('resources/views/home/css/top.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/home/css/main.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('resources/views/home/js/jquery-3.2.1.min.js')}}"></script>
    <![endif]-->
</head>
<body>
<header>
    <div id="logo"><a href="{{url('/')}}"></a></div>

</header>

@section('content')

@show

<footer>

</footer>
</body>
</html>
