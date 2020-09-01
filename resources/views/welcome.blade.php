<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>nemt.link</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col col-lg-2">
                        <div class="title m-b-md">
                            nemt link
                        </div>
                        <div class="prompt" style="">
                            <form action="{{ route('shorturl.store') }}" method="POST">
                                @csrf
                                <input type="url" data-test="focus-input" autocomplete="off" id="url" name="url">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
