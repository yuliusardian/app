@extends('layouts.app')

@section('content')
    <!-- @lang('texts.topAlbum') -->
    @if($featured_albums)
        <div class="ms_fea_album_slider padder_top10 ">
            <div class="ms_heading">
                <h1>@lang('texts.topAlbum')</h1>
                <span class="veiw_all"><a href="#">@lang('buttons.viewMore')</a></span>
            </div>
                <div class="ms_album_slider swiper-container">
                    <div class="swiper-wrapper">
                            @foreach($featured_albums as $featured_album)
                                <div class="swiper-slide">
                                    <div class="ms_rcnt_box">
                                        <div class="ms_rcnt_box_img">
                                            <img src="{{ $featured_album['img'] }}" alt="">
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
                                            <h3><a href="{{ $featured_album['id'] }}">{{ $featured_album['name'] }}</a></h3>
                                            <p>{{ $featured_album['artist'] }}</p>
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
    <!-- @lang('texts.topAlbum') -->


@endsection
