@extends('layouts.app')

@section('content')

    @if (!empty($ads))
        @foreach($ads as $ad)
            @php
                $first = $ad['img'];
            @endphp
        @endforeach
    @endif

    <div class="ms_rcnt_slider padder_top20">
        <div class="ms_heading">
            <h1>@lang('texts.recentlyPlayed')</h1>
            <span class="veiw_all"><a href="#">@lang('buttons.viewMore')</a></span>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/music/r_music4.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>@lang('buttons.addToFavourite')</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>@lang('buttons.addToQueue')</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>@lang('buttons.addToPlaylist')</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>@lang('buttons.share')</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Dark Alley Acoustic</a></h3>
                            <p>Ava Cornish & Brian Hill</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next slider_nav_next"></div>
        <div class="swiper-button-prev slider_nav_prev"></div>
    </div>

    @if ($topWeekly)
    <div class="ms_weekly_wrapper">
        <div class="ms_weekly_inner">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ms_heading">
                        <h1>@lang('texts.weeklyTop', ['number' => count($topWeekly)])</h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 padding_right40">
                    @foreach($topWeekly as $key => $top)
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                                    <span class="w_top_no">
										{{ $key + 1 }}
									</span>
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="{{ $top['image'] }}" alt="" class="img-fluid">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">{{ $top['title'] }}</a></h3>
                                    <p>{{ $top['artist'] }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="images/svg/more.svg" alt="">
									</span>
                        </div>
                        <ul class="more_option">
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>@lang('buttons.addToFavourite')</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>@lang('buttons.addToQueue')</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>@lang('buttons.addToPlaylist')</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>@lang('buttons.share')</a></li>
                        </ul>
                    </div>
                    <div class="ms_divider"></div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
    @endif

    @if($topArtist)
    <div class="ms_featured_slider">
        <div class="ms_heading">
            <h1>@lang('texts.featuredArtist')</h1>
            <span class="veiw_all"><a href="#">@lang('buttons.viewMore')</a></span>
        </div>
        <div class="ms_feature_slider swiper-container">
            <div class="swiper-wrapper">

                @foreach($topArtist as $artist)
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="{{ $artist['img'] }}" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>@lang('buttons.addToPlaylist')</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>@lang('buttons.share')</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">{{ $artist['name'] }}</a></h3>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next1 slider_nav_next"></div>
        <div class="swiper-button-prev1 slider_nav_prev"></div>
    </div>
    @endif

    <div class="ms_advr_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="#"><img src="{{ $first }}" class="img-fluid"/></a>
                </div>
            </div>
        </div>
    </div>

    @if($newRealease)
    <div class="ms_releases_wrapper">
        <div class="ms_heading">
            <h1>@lang('texts.newReleases')</h1>
            <span class="veiw_all"><a href="#">@lang('buttons.viewMore')</a></span>
        </div>
        <div class="ms_release_slider swiper-container">
            <div class="ms_divider"></div>
            <div class="swiper-wrapper">

                @foreach($newRealease as $rilis)
                <div class="swiper-slide">
                    <div class="ms_release_box">
                        <div class="w_top_song">
                            <span class="slider_dot"></span>
                            <div class="w_tp_song_img">
                                <img src="{{ $rilis['image'] }}" alt="">
                                <div class="ms_song_overlay">
                                </div>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                            <div class="w_tp_song_name">
                                <h3><a href="#">{{ $rilis['title'] }}</a></h3>
                                <p>{{ $rilis['artist'] }}</p>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next2 slider_nav_next"></div>
        <div class="swiper-button-prev2 slider_nav_prev"></div>
    </div>
    @endif

    @if ($topAlbum)
    <div class="ms_fea_album_slider">
        <div class="ms_heading">
            <h1>@lang('texts.topAlbum')</h1>
            <span class="veiw_all"><a href="#">@lang('buttons.viewMore')</a></span>
        </div>
        <div class="ms_album_slider swiper-container">
            <div class="swiper-wrapper">

                @foreach($topAlbum as $album)
                    <div class="swiper-slide">
                        <div class="ms_rcnt_box">
                            <div class="ms_rcnt_box_img">
                                <img src="{{ $album['img'] }}">
                                <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    <div class="ms_more_icon">
                                        <img src="images/svg/more.svg" alt="">
                                    </div>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>@lang('buttons.addToPlaylist')</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>@lang('buttons.share')</a></li>
                                    </ul>
                                    <div class="ms_play_icon">
                                        <img src="images/svg/play.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ms_rcnt_box_text">
                                <h3><a href="#">{{ $album['title'] }}</a></h3>
                                <p>{{ $album['artist'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next3 slider_nav_next"></div>
        <div class="swiper-button-prev3 slider_nav_prev"></div>
    </div>
    @endif

    @if($genres)
        <div class="ms_featured_slider">
            <div class="ms_heading">
                <h1>@lang('texts.topGenre')</h1>
                <span class="veiw_all"><a href="#">@lang('buttons.viewMore')</a></span>
            </div>
            <div class="ms_feature_slider swiper-container">
                <div class="swiper-wrapper">

                    @foreach($genres as $genre)
                        <div class="swiper-slide">
                            <div class="ms_rcnt_box">
                                <div class="ms_rcnt_box_img">
                                    <img src="{{ $genre['img'] }}" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="images/svg/more.svg" alt="">
                                        </div>
                                        <ul class="more_option">
                                            <li><a href="#"><span class="opt_icon">@lang('buttons.viewMore')</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ms_rcnt_box_text">
                                    <h3><a href="#">{{ $genre['name'] }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next1 slider_nav_next"></div>
            <div class="swiper-button-prev1 slider_nav_prev"></div>
        </div>
    @endif

    <div class="ms_advr_wrapper ms_advr2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="#"><img src="http://via.placeholder.com/730x90" alt="" class="img-fluid"/></a>
                </div>
            </div>
        </div>
    </div>


@endsection
