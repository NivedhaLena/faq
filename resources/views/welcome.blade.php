<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: darkseagreen;
                color:black;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                text-align: center;
            }


            .full-height {
                height: 100vh;
            }
            .modal-body{
                background-color: darkseagreen;
                color:black;
                text-align: center;
                font-size: x-large;
                margin: 30px;
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
                font-size: x-large;

            }



            .title {
                font-size: 60px;
                color: black;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: x-large;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth

                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div id="app">

                <div class="modal-body">
                    <h1>LARAVEL</h1>
                    @hashtag({{$string}})
                </div>

            </div>
        </div>
    </body>
</html>
