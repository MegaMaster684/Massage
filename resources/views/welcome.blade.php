<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> 
        <title>Luba Massage</title>
        <style>
            html, body {
                background-size: cover;
                background-color: #595e61;
                color: #636b6f;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;

            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .titlesize {
                font-size: 100px;
            }

            .links > a {
                color: #636b6f;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .logonav {
                width: 50px;
                border-radius: 10px;

            }

            .btn-primary{
                position: absolute;
                background-color: #f1f1f1;
                
            }

            .bannerimg {
                border-radius: 30px;
                position: center;
            }

            .container-title-image {
                position: relative;
                text-align: center;
                color: white;
            }

            .border-text {
                -webkit-text-stroke: 1px black;
                text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;
            }
            .centrality-text {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

        </style>
    </head>
    <body>

    {{ App::setLocale(session('locale')) }}

    <!-- Верхняя навигация -->
  
    @include('partials.topbar')


<div class="container-title-image">
    <img class="bannerimg" src="{{asset('images/Mass.jpg')}}">  
    <div class="centrality-text text-primary titlesize border-text"> @lang('messages.title') </div>
</div> 

<br> <hr> 

<div class="text-primary display-1 border-text content"> <a name="about-service"> @lang('messages.about-service') </a> </div> <br>
<p class="text-white content h4"> 
    @lang('messages.textinfo-1')
</p>

<br> <hr>

<div class="text-primary display-1 border-text content"> <a name="price"> @lang('messages.price') </a> </div> <br>
<br>
<center>
    <div class="row">
        <div class="col-sm-6">
            <div class="card" style="width: 30rem;">
                <img class="card-img-top" src="images/Star.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">@lang('messages.standartprice')</h5>
                    <p class="card-text">@lang('messages.standartinfo')</p>
                    <a href="{{ route('login') }}" class="btn btn-primary active">@lang('messages.buy')</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card" style="width: 30rem;">
                <img class="card-img-top" src="images/Star.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">@lang('messages.premiumprice')</h5>
                    <p class="card-text">@lang('messages.premiuminfo')</p>
                    <a href="{{ route('login') }}" class="btn btn-primary active">@lang('messages.buy')</a>
                </div>
            </div>
        </div>
    </div>
</center>

    












<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <a name="price"> <b> price </b> </a>
        <a name="feedback"> <b> feedback </b> </a>
        <a name="about-us"> <b> about-us </b> </a>
        <a name="contact"> <b> contact </b> </a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>
