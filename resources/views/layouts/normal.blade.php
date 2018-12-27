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

    <div class="ms_sidemenu_wrapper">
        <div class="ms_nav_close">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </div>
        <div class="ms_sidemenu_inner">
            <div class="ms_logo_inner">
                <div class="ms_logo">
                    <a href="{{ route('home') }}"><img src="{{ URL('/') }}/images/logo.png" alt="" class="img-fluid"/></a>
                </div>
                <div class="ms_logo_open">
                    <a href="{{ route('home') }}"><img src="{{ URL('/') }}/images/open_logo.png" alt="" class="img-fluid"/></a>
                </div>
            </div>
            <div class="ms_nav_wrapper">
                <ul>
                    <li>
                        <a href="{{ route('home') }}" class=" {{ Request::is('home') ? 'active' : '' }}">
                                <span class="nav_icon">
                                    <span class="icon icon_discover"></span>
                                </span>
                            <span class="nav_text">
                                    discover
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('album') }}" class="{{ Request::is('album') ? 'active' : '' }}" title="@lang('menus.album')">
                                <span class="nav_icon">
                                    <span class="icon icon_albums"></span>
                                </span>
                            <span class="nav_text">
                                    @lang('menus.album')
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('artist') }}" class="{{ Request::is('artist') ? 'active' : '' }}" title="@lang('menus.artist')">
                                <span class="nav_icon">
                                    <span class="icon icon_artists"></span>
                                </span>
                            <span class="nav_text">
                                    @lang('menus.artist')
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('genre') }}" class="{{ Request::is('genre') ? 'active' : '' }}" title="@lang('menus.genre')">
                                <span class="nav_icon">
                                    <span class="icon icon_genres"></span>
                                </span>
                            <span class="nav_text">
                                    @lang('menus.genre')
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('toptrack') }}" class="{{ Request::is('toptrack') ? 'active' : '' }}" title="@lang('menus.toptrack')">
                                <span class="nav_icon">
                                    <span class="icon icon_tracks"></span>
                                </span>
                            <span class="nav_text">
                                    @lang('menus.toptrack')
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('favourite') }}" class="{{ Request::is('favourite') ? 'active' : '' }}" title="@lang('menus.favourite')">
                                <span class="nav_icon">
                                    <span class="icon icon_favourite"></span>
                                </span>
                            <span class="nav_text">
                                    @lang('menus.favourite')
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('history') }}" class="{{ Request::is('history') ? 'active' : '' }}" title="@lang('menus.history')">
                                <span class="nav_icon">
                                    <span class="icon icon_history"></span>
                                </span>
                            <span class="nav_text">
                                    @lang('menus.history')
                                </span>
                        </a>
                    </li>
                </ul>
                <ul class="nav_playlist">
                    <li>
                        <a href="feature_playlist.html">
                                <span class="nav_icon">
                                    <span class="icon icon_fe_playlist"></span>
                                </span>
                            <span class="nav_text">
                                    featured playlist
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="add_playlist.html">
                                <span class="nav_icon">
                                    <span class="icon icon_c_playlist"></span>
                                </span>
                            <span class="nav_text">
                                    create playlist
                                </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="ms_content_wrapper padder_top80">
        <div class="ms_header">
            <div class="ms_top_left">
                <div class="ms_top_search">
                    <form method="post" action="{{ Route('web.interaction.search') }}">
                        @csrf
                        <input type="text" name="keyword" class="form-control" placeholder="@lang('placeholder.searchSong')" autocomplete="off">
                        <button type="submit">
                                <span class="search_icon">
                                    <img src="images/svg/search.svg" alt="">
                                </span>
                        </button>
                    </form>
                </div>
                {{--<div class="ms_top_trend">--}}
                {{--<span><a href="#"  class="ms_color">@lang('texts.newSong') :</a></span> <span class="top_marquee"><a href="#">..</a></span>--}}
                {{--</div>--}}
            </div>
            <div class="ms_top_right">
                <div class="ms_top_lang">

                </div>
                <div class="ms_top_btn">

                    <a href="javascript:;" class="ms_admin_name">{{ Auth::user()->name }}<span class="ms_pro_name">@php echo mb_substr(Auth::user()->name, 0, 1); @endphp</span>
                    </a>
                    <ul class="pro_dropdown_menu">
                        <li><a href="{{ route('profile') }}">@lang('menus.profile')</a></li>
                        {{--<li><a href="manage_acc.html" target="_blank">Pricing Plan</a></li>--}}
                        {{--<li><a href="blog.html" target="_blank">Blog</a></li>--}}
                        {{--<li><a href="#">Setting</a></li>--}}
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">@lang('menus.logout')</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        @yield('content')

    </div>

    <div class="ms_player_wrapper">
        <div class="ms_player_close">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </div>
        <div class="player_mid">
            <div class="audio-player">
                <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                    <div class="player_left">
                        <div class="ms_play_song">
                            <div class="play_song_name">
                                <a href="javascript:void(0);" id="playlist-text">
                                    <div class="jp-now-playing flex-item">
                                        <div class="jp-track-name"></div>
                                        <div class="jp-artist-name"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        {{--<div class="play_song_options">--}}
                        {{--<ul>--}}
                        {{--<li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_fav"></i></span>Add To Favourites</a></li>--}}
                        {{--<li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_playlist"></i></span>Add To Playlist</a></li>--}}
                        {{--<li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_share"></i></span>Share</a></li>--}}
                        {{--</ul>--}}
                        {{--</div>--}}
                        <span class="play-left-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                    </div>
                    <!----Right Queue---->
                    <div class="jp_queue_wrapper">
                        <span class="que_text" id="myPlaylistQueue"><i class="fa fa-angle-up" aria-hidden="true"></i> @lang('buttons.queue')</span>
                        <div id="playlist-wrap" class="jp-playlist">
                            <div class="jp_queue_cls"><i class="fa fa-times" aria-hidden="true"></i></div>
                            <h2>@lang('buttons.queue')</h2>
                            <div class="jp_queue_list_inner">
                                <ul>
                                    <li>&nbsp;</li>
                                </ul>
                            </div>
                            <div class="jp_queue_btn">
                                <a href="javascript:;" class="ms_clear" data-toggle="modal" data-target="#clear_modal">@lang('buttons.clear')</a>
                            </div>
                        </div>
                    </div>
                    <div class="jp-type-playlist">
                        <div class="jp-gui jp-interface flex-wrap">
                            <div class="jp-controls flex-item">
                                <button class="jp-previous" tabindex="0">
                                    <i class="ms_play_control"></i>
                                </button>
                                <button class="jp-play" tabindex="0">
                                    <i class="ms_play_control"></i>
                                </button>
                                <button class="jp-next" tabindex="0">
                                    <i class="ms_play_control"></i>
                                </button>
                            </div>
                            <div class="jp-progress-container flex-item">
                                <div class="jp-time-holder">
                                    <span class="jp-current-time" role="timer" aria-label="time">&nbsp;</span>
                                    <span class="jp-duration" role="timer" aria-label="duration">&nbsp;</span>
                                </div>
                                <div class="jp-progress">
                                    <div class="jp-seek-bar">
                                        <div class="jp-play-bar">
                                            <div class="bullet">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jp-volume-controls flex-item">
                                <div class="widget knob-container">
                                    <div class="knob-wrapper-outer">
                                        <div class="knob-wrapper">
                                            <div class="knob-mask">
                                                <div class="knob d3"><span></span></div>
                                                <div class="handle"></div>
                                                <div class="round">
                                                    <img src="images/svg/volume.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <input></input> -->
                                    </div>
                                </div>
                            </div>
                            <div class="jp-toggles flex-item">
                                <button class="jp-shuffle" tabindex="0" title="Shuffle">
                                    <i class="ms_play_control"></i></button>
                                <button class="jp-repeat" tabindex="0" title="Repeat"><i class="ms_play_control"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--main div-->
    </div>

</div>

@if (Request::is('home'))
    <!-- Modal iklan -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                {{--<div class="modal-header">--}}
                {{--<h5 class="modal-title" id="exampleModalLabel">Iklan</h5>--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                {{--<span aria-hidden="true">&times;</span>--}}
                {{--</button>--}}
                {{--</div>--}}
                <div class="modal-body">
                    <img src="{{ $first }}" class="img-fluid" >
                </div>
                {{--<div class="modal-footer">--}}
                {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
@endif

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins/swiper/js/swiper.min.js') }}"></script>
<!-- modif this file -->
<script src="{{ asset('js/plugins/player/jplayer.playlist.min.js') }}"></script>
<!-- modif this file -->
<script src="{{ asset('js/plugins/player/jquery.jplayer.min.js') }}"></script>

{{--<script src="{{ asset('js/plugins/player/audio-player.js') }}"></script>--}}

<script type="text/javascript">
    $(document).ready(function(){

        /**
         * @param bind, playlistdata, options
         * @type {jPlayerPlaylist}
         */
        var myPlaylist = new jPlayerPlaylist({
            jPlayer: "#jquery_jplayer_1",
            cssSelectorAncestor: "#jp_container_1"
        }, @json($userPlaylist), {
            playlistOptions: {
                autoPlay: false,
            },
            swfPath: "js/plugins",
            supplied: "oga, mp3",
            wmode: "window",
            useStateClassSkin: true,
            autoBlur: false,
            smoothPlayBar: true,
            keyEnabled: true,
        });

        $("#jquery_jplayer_1").on($.jPlayer.event.ready + ' ' + $.jPlayer.event.play, function(event) {
            var current = myPlaylist.current;
            var playlist = myPlaylist.playlist;
            $.each(playlist, function(index, obj) {
                if (index == current) {
                    $(".jp-now-playing").html("<div class='jp-track-name'><span class='que_img'><img src='"+obj.image+"' class='img-fluid' style='min-height: 45px;min-width: 75px'></span><div class='que_data'>" + obj.title + " <div class='jp-artist-name'>" + obj.artist + "</div></div></div>");
                }
            });
            $('.knob-wrapper').mousedown(function() {
                $(window).mousemove(function(e) {
                    var angle1 = getRotationDegrees($('.knob')),
                        volume = angle1 / 270

                    if (volume > 1) {
                        $("#jquery_jplayer_1").jPlayer("volume", 1);
                    } else if (volume <= 0) {
                        $("#jquery_jplayer_1").jPlayer("mute");
                    } else {
                        $("#jquery_jplayer_1").jPlayer("volume", volume);
                        $("#jquery_jplayer_1").jPlayer("unmute");
                    }
                });

                return false;
            }).mouseup(function() {
                $(window).unbind("mousemove");
            });


            function getRotationDegrees(obj) {
                var matrix = obj.css("-webkit-transform") ||
                    obj.css("-moz-transform")    ||
                    obj.css("-ms-transform")     ||
                    obj.css("-o-transform")      ||
                    obj.css("transform");
                if(matrix !== 'none') {
                    var values = matrix.split('(')[1].split(')')[0].split(',');
                    var a = values[0];
                    var b = values[1];
                    var angle = Math.round(Math.atan2(b, a) * (180/Math.PI));
                } else { var angle = 0; }
                return (angle < 0) ? angle + 360 : angle;
            }

            var timeDrag = false;
            $('.jp-play-bar').mousedown(function(e) {
                timeDrag = true;
                updatebar(e.pageX);

            });
            $(document).mouseup(function(e) {
                if (timeDrag) {
                    timeDrag = false;
                    updatebar(e.pageX);
                }
            });
            $(document).mousemove(function(e) {
                if (timeDrag) {
                    updatebar(e.pageX);
                }
            });
            var updatebar = function(x) {
                var progress = $('.jp-progress');
                var position = x - progress.offset().left;
                var percentage = 100 * position / progress.width();
                if (percentage > 100) {
                    percentage = 100;
                }
                if (percentage < 0) {
                    percentage = 0;
                }
                $("#jquery_jplayer_1").jPlayer("playHead", percentage);
                $('.jp-play-bar').css('width', percentage + '%');
            };
            $('#playlist-toggle, #playlist-text, #playlist-wrap li a').unbind().on('click', function() {
                $('#playlist-wrap').fadeToggle();
                $('#playlist-toggle, #playlist-text').toggleClass('playlist-is-visible');
            });
            $('.hide_player').unbind().on('click', function() {
                $('.audio-player').toggleClass('is_hidden');
                $(this).html($(this).html() == '<i class="fa fa-angle-down"></i> HIDE' ? '<i class="fa fa-angle-up"></i> SHOW PLAYER' : '<i class="fa fa-angle-down"></i> HIDE');
            });
            $('body').unbind().on('click', '.audio-play-btn', function() {
                $('.audio-play-btn').removeClass('is_playing');
                $(this).addClass('is_playing');
                var playlistId = $(this).data('playlist-id');
                myPlaylist.play(playlistId);
            });

        });

        $("#clearAllPlaylist").click(function() {
            myPlaylist.remove();
        });

        // added 27 12 2018
        $(".addToFavouriteAction").click(function() {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "POST",
                url: "{{ Route('web.interaction.favourite') }}/" + $(this).attr('song-id'),
                data: {_token: CSRF_TOKEN},
                dataType: 'JSON',
                success: function(result) {
                    alert(result.message);
                }
            });
        });
        $(".addToQueueAction").click(function () {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "POST",
                url: "{{ Route('web.interaction.queue') }}/" + $(this).attr('song-id'),
                data: {_token: CSRF_TOKEN},
                dataType: 'JSON',
                success: function(result) {
                    alert(result.message);
                }
            });
        });

    });
</script>

<script src="{{ asset('js/plugins/player/volume.js') }}"></script>
<script src="{{ asset('js/plugins/nice_select/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/plugins/scroll/jquery.mCustomScrollbar.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

@stack('scripts')

</body>
</html>
