@extends('layouts.app')

@section('content')
    @if($favourites)
        <div class="ms_free_download ms_purchase_wrapper">
            <div class="ms_heading">
                <h1>@lang('texts.yourFavourite')</h1>
            </div>
            <div class="album_inner_list">
                <div class="album_list_wrapper">
                    <ul class="album_list_name">
                        <li>#</li>
                        <li>Song Title</li>
                        <li>Album</li>
                        <li class="text-center">Artist</li>
                        <li class="text-center">Duration</li>
                        <li class="text-center">Add To Favourites</li>
                        <li class="text-center">More</li>
                        <li class="text-center">remove</li>
                    </ul>
                    @foreach($favourites as $key => $favourite)
                        <ul>
                            <li><a href="#"><span class="play_no">{{ $key + 1 }}</span><span class="play_hover"></span></a></li>
                            <li><a href="#"> {{ $favourite->getSong()->getName() }}</a></li>
                            <li><a href="#">{{ $favourite->getSong()->getAlbum()->getName() }}</a></li>
                            <li class="text-center"><a href="#">{{ $favourite->getSong()->getArtist()->getName() }}</a></li>
                            <li class="text-center"><a href="#">5:26</a></li>
                            <li class="text-center"><a href="#"><span class="ms_icon1 ms_fav_icon"></span></a></li>
                            <li class="text-center ms_more_icon"><a href="javascript:;"><span class="ms_icon1 ms_active_icon"></span></a>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>@lang('buttons.addToQueue')</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>@lang('buttons.addToPlaylist')</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>@lang('buttons.share')</a></li>
                                </ul>
                            </li>
                            <li class="text-center">
                                <a href="#">
                                    <span class="ms_close">
                                        <img src="images/svg/close.svg" alt="">
                                    </span>
                                </a>
                            </li>
                        </ul>
                    @endforeach

                    {{--<ul class="play_active_song">--}}
                        {{--<li><a href="#"><span class="play_no">04</span><span class="play_hover"></span></a></li>--}}
                        {{--<li><a href="#">Dark Alley Acoustic</a></li>--}}
                        {{--<li><a href="#">Dream Your Moments</a></li>--}}
                        {{--<li class="text-center"><a href="#">free willy</a></li>--}}
                        {{--<li class="text-center"><a href="#">5:26</a></li>--}}
                        {{--<li class="text-center"><a href="#"><span class="ms_icon1 ms_fav_icon"></span></a></li>--}}
                        {{--<li class="text-center ms_more_icon"><a href="javascript:;"><span class="ms_icon1 ms_active_icon"></span></a>--}}
                            {{--<ul class="more_option">--}}
                                {{--<li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>--}}
                                {{--<li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>--}}
                                {{--<li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>--}}
                                {{--<li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>--}}
                                {{--<li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="text-center"><a href="#"><span class="ms_close">--}}
                                        {{--<img src="images/svg/close.svg" alt=""></span></a></li>--}}
                    {{--</ul>--}}

                    <div class="ms_view_more">
                        <a href="#" class="ms_btn">@lang('buttons.viewMore')</a>
                    </div>

                </div>
            </div>
        </div>
    @endif
@endsection
