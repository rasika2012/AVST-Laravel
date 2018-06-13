<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <style type="text/css">
        .bg {
            /* The image used */
            background-image: url('/img/back.png');
            z-index: -10;
            /* Half height */
            height: 50%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

</head>
<body class="bg">
<nav class="navbar navbar-light bg-light fixed-top navbar-expand">

    <a class="nav-link" href="#">AVST</a>

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
                    <a class="nav-link " href="/getAllUnits">Units</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/addunit">Add unit</a>
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
                    <a class="dropdown-item" href="/settings">Send News</a>
                    <a class="dropdown-item" href="/password/reset">Reset Password</a>
                </div>
            </li>
            <li class=" nav-item">
                <p class="nav-link"></p>
            </li>
        </ul>
    @endguest
</nav>
<br><br><br>
@guest
    <img src="/img/logo.jpg " height="500">
@else
    @yield('content');
@endguest

</body>
</html>


