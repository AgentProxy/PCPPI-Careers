<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    @yield('head')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style type="text/css">

        .navbar-brand .logo{
            width: 30px;
            height: 30px;
            padding: 0;
        }

        .navbar{
            margin-bottom: 0;
        }

        body{
            /*background-color:rgb(66, 244, 238);*/
        }
    </style>

    <!-- Scripts -->

    <script type="text/javascript" src="/js/js.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>
    <script type="text/javascript" src="/js/crud.js"></script>


    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="container">
        <div id="app">
            <div class="jumbotron" style=" background-image: url('images/pcppi-banner1.png'); background-repeat: no-repeat; background-size: 100%; height: 300px;">
                
            <!-- navbar-static-top -->
            <nav class="navbar " style="position: relative; bottom: -200px; background: rgb(66, 238, 244); font-color: white; ">
                <div class="container">
                    <div class="navbar-header" >

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="/">
                        <span>                        
                            <img class="logo" src="/img-uploads/gojammitLogo.png" /> PCPPI
                        </span>
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse" style="font-size: 20px;">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav" style="">
                            <!-- <ul class="dropdown-menu" role="menu"> -->
                                <li style="margin-left: 50px;"><a href="/careers">Careers</a></li>
                                <li style="margin-left: 50px;"><a href="/#">Vision-Mission</a></li>
                                <li  style="margin-left: 50px;"><a href="/history">History</a></li>
                                <li  style="margin-left: 50px;"><a href="/admin">Edit</a></li>
                                 
                            <!-- </ul> -->
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                                <li><a href="{{ route('login') }}" style="color: white; font-size: 20px;">Admin Login</a></li>
                                <!-- <li><a href="{{ route('register') }}" style="color: white; font-size: 20px;">Register</a></li> -->
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="/profile/{{ Auth::user()->username }}/about">My profile</a></li>
                                        <li><a href="/home">Timeline</a></li>
                                         <li><a href="/discover_intro/{{ Auth::user()->username }}">Find Jammers</a></li>
                                        <li>

                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>


                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>

                </div>
            </nav>
            </div>
        </div>
    </div>
     @yield('content')
</body> 
</html>
