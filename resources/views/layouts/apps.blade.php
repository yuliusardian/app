<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '.') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/plugins/swiper/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/plugins/nice_select/nice-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/plugins/player/volume.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/plugins/scroll/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <link rel="shortcut icon" type="image/png" href="{{ url('images/favicon.png') }}">


</head>
<body>

    <div class="ms_main_wrapper ms_profile">
        @yield('content')
    </div>

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins/swiper/js/swiper.min.js') }}"></script>
<script src="{{ asset('js/plugins/player/jplayer.playlist.min.js') }}"></script>
<script src="{{ asset('js/plugins/player/jquery.jplayer.min.js') }}"></script>
<script src="{{ asset('js/plugins/player/audio-player.js') }}"></script>
<script src="{{ asset('js/plugins/player/volume.js') }}"></script>
<script src="{{ asset('js/plugins/nice_select/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/plugins/scroll/jquery.mCustomScrollbar.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
