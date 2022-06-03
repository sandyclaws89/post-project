<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle')</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="{{ asset('js/app.js')}}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            margin-top: -5rem;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        a {
            color: #636b6f !important;
            text-decoration: none !important;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <ul class="navbar-nav">
            <li class="nav-item active h4">
              <a class="nav-link" href="{{ route('admin.home') }}">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active h4">
                @auth
                    <a class="nav-link" href="{{ route('admin.posts.index') }}">Listing guest</a>
                @endauth
                @guest
                    <a class="nav-link" href="{{ route('admin.posts.index') }}">Listing guest</a>
                @endguest
            </li>
            <li class="nav-item">
                @if (Route::has('login'))
            <div class="top-right links">
                <ul class="navbar-nav ml-auto d-flex align-items-center">
                    @auth
                        <li class="nav-item dropdown active h4">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>

                        </li>
                        <span class="px-3 align-top">Admin</span>
                    {{-- <a href="{{ route('admin.home') }}">Home</a> --}}
                @else
                <li class="nav-item active h4 px-3">
                    <a href="{{ route('login') }}">Login</a>
                </li>

                <li class="nav-item active h4">
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                </li>
                @endauth
            </ul>
            </div>
        @endif
              </li>
          </ul>
    </nav>
    @yield('pageMain')
</body>
</html>
