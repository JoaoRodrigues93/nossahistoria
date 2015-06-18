<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>
        @yield('title')
    </title>
    @section('links')
     <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}" />
     <link rel="script"  href="{{URL::asset('js/bootstrap.js')}}" />
     <link rel="stylesheet" href="{{URL::asset('css/style.css')}}"   />
     @show

    @yield('head')
</head>
<body>
@section('header')
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Nossa História</a>
            </div>
            <div>
    <ul class="nav navbar-nav">
        <li><a href='#'>Home</a></li>
        <li><a href='#'>About</a></li>
        <li><a href='#'>Contact</a></li>
    </ul>

        </div>
        </div>
                </nav>
@show
@yield('body')
@section('footer')
<p style="text-align:center ">&copy;Nossa História {{date('Y')}}</p>
<p style="text-align:center ">&copy;Todos direitos reservados!</p>
@show
</body>
</html>