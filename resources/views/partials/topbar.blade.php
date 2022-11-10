<style>
.logonav {
                width: 50px;
                border-radius: 10px;
            }
}
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
        <button class="btn btn-secondary" onclick="openNav()">&#9776; Открыть меню</button>
        <a class="navbar-brand" href=""> <img class="logonav" src="{{ asset('images/Logo.jpg') }}"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">   
        <span class="navbar-toggler-icon"> </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-auto navbar-nav-scroll">
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
                    @if (Route::has('login'))
                        <li class="links nav-item"> 
                        @auth
                            <a class="nav-link" href="{{ url('/home') }}">@lang('messages.home')</a>
                        </li>
                        @else
                        <li class="links nav-item">
                            <a class="nav-link" href="{{ route('login') }}">@lang('messages.login')</a>
                            </li>
                            <li class="links nav-item">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">@lang('messages.register')</a>
                            </li>
                            @endif
                        @endauth
                    @endif
                </li>
            </ul>     
        </div> 
    </div>
</nav> <br>