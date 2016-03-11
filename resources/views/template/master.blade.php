<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=devide-width, initial-scale=1.0"/>

    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

    @if(Config::get('app.debug'))
        <link href="{{ asset('build/css/vendor/bootstrap.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('build/css/vendor/style.css') }}" rel="stylesheet"/>
    @else
        <link href="{{ elixir('css/all.css') }}" rel="stylesheet"/>
    @endif

</head>
<body>

    @yield('content')

    @if(Config::get('app.debug'))
        <script src="{{ asset('build/js/vendor/jquery.min.js') }}"></script>
        <script src="{{ asset('build/js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('build/js/vendor/jquery.maskedinput.min.js') }}"></script>
        <script src="{{ asset('build/js/vendor/scripts.js') }}"></script>
    @else
        <script src="{{ elixir('js/all.js') }}"></script>
    @endif

</body>
</html>

s