<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        
  .logonav {
                width: 50px;
                border-radius: 10px;
            }
    </style>
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href=""> <img class="logonav" src="{{ asset('images/Logo.jpg') }}"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">   
        <span class="navbar-toggler-icon"> </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-auto navbar-nav-scroll">
                <li class="links nav-item">
                    <a class="nav-link" aria-current="page" href="#about-service"> @lang('messages.about-service') </a>
                </li>
                <li class="links nav-item">
                    <a class="nav-link" aria-current="page" href="#price"> @lang('messages.price') </a>
                </li>
                <li class="links nav-item">
                    <a class="nav-link" aria-current="page" href="#feedback"> @lang('messages.feedback') </a>
                </li>
                <li class="links nav-item">
                    <a class="nav-link" aria-current="page" href="#about-us"> @lang('messages.about-us') </a>
                </li>
                <li class="links nav-item">
                    <a class="nav-link" aria-current="page" href="#contact"> @lang('messages.contact') </a>
                </li>
                <li class="links nav-item dropdown">
                    <button class="btn-secondary btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ App::getLocale()}}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{route('setlocale',['locale'=>'en'])}}">English</a></li>
                        <li><a class="dropdown-item" href="{{route('setlocale',['locale'=>'ua'])}}">Український</a></li>
                        <li><a class="dropdown-item" href="{{route('setlocale',['locale'=>'ru'])}}">Русский</a></li>
                    </ul>  
                </li>
            </ul>
            <ul class="navbar-nav"> 
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
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
