<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        .modal-dialog {
            margin: 0px auto;
        }

        .modal-backdrop.fade {
            opacity: 0.1;
            filter: alpha(opacity=0.1);
        }

        .modal-content {
            position: relative;
            background-color: #FFF;
            border: 1px solid #CECECE;
            border-radius: 0px;
            -webkit-box-shadow:none;
            box-shadow: none;
            background-clip: padding-box;
            outline: 0;
        }


        .modal-header {
            padding: 11px 15px;
            background-color: #F8F8F8;
            background: -webkit-linear-gradient(top, #F8F8F8, #F2F2F2);
            background: -moz-linear-gradient(top, #f8f8f8, #f2f2f2);
            background: -ms-linear-gradient(top, #f8f8f8, #f2f2f2);
            background: -o-linear-gradient(top, #f8f8f8, #f2f2f2);
            background: linear-gradient(top, #f8f8f8, #f2f2f2);
        }

        #map {
            height: 100%;
        }
    </style>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>
<body>
<nav class="navbar fixed-top bg-light navbar-expand navbar navbar-default ">

    <a class="nav-link" href="#">AVST-Automated Vehilcle Speed Trap</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav">
            <!-- Authentication Links -->
            @guest

                <li class="nav-item active">
                <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                </li>
                <li class="nav-item active">
                <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                </li>
            @else
                <li class="nav-item ">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/allimges">Snaps</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/addnew">Software</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/locations">Units</a>
                </li>

            @endguest
        </ul>

    </div>
    @guest
    @else

        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu btn pull-right" aria-labelledby="navbarDropdownMenuLink">

                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <a class="dropdown-item" href="/settings">Settings</a>
                </div>
            </li>
            <li class=" nav-item">
                <p class="nav-link"></p>
            </li>
        </ul>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    @endguest
</nav>

<br><br><br>
@guest
    <br>
    <br>
    <p></p>
    <h1>&nbsp;&nbsp;&nbsp;Login or Create an Acount</h1>
@else
    <br>
    <br>

    @yield('content');
@endguest
</body>
</html>
{{--
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    --}}{{--add navbar--}}{{--
                    <div  class="navbar-brand" >
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ url('/home') }}">Home</a>
                    </div>


                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>--}}

