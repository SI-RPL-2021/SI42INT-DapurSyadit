<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Icon -->
    <link rel="icon" href="images/logo_title.png" type="image/x-icon">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">
                                <h5 class="fs-1 ">Home</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <h5 class="nav-link ">|</h5>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('orderList') }}">
                                <h5 class="fs-1 ">My Order</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <h5 class="nav-link ">|</h5>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://wa.me/6281236020875">
                                <h5 class="fs-1 ">Contact Admin 1 : Adam</h5>
                            </a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <h5 class="nav-link ">|</h5>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://wa.me/6282143321000">
                                <h5 class="fs-1 ">Contact Admin 2 : Farras</h5>
                            </a>
                        </li>
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <p class="text-center">
                                Hai, <b> {{ Auth::user()->name }} </b> !
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Click here to {{ __('Logout') }}
                                </a>
                            </p>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>