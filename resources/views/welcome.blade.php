<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" ng-app="milestones">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{asset('/css/stylesheet.css')}}" rel="stylesheet" type="text/css">

        <!-- AngularJS -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
        <script src="{{ asset('js/angular.js') }}"></script>

        <!-- Scripts -->
        <script src="{{ asset('js/jquery.js') }}"></script>


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
                            <a href="{{ route('register') }}">Registrieren</a>
                        @endif

                    @endauth
                </div>
            @endif

                <div class="content">
                    <div class="title m-b-md">
                        <img src="{{asset('images/milestone_logo_RGB.jpg')}}" id="milestonelogo">
                    </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="{{route('pruefung')}}">Prüfungssimulation</a>
                    <a href="{{route('uebung')}}">Übungsmodus</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
