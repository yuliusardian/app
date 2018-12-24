@extends('layouts.app')

@section('content')
    <!----Free Download Css Start---->
    <div class="ms_free_download ms_purchase_wrapper">
        <div class="ms_heading">
            <h1>Your Favourites</h1>
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
                <ul>
                    <li><a href="#"><span class="play_no">03</span><span class="play_hover"></span></a></li>
                    <li><a href="#">Until I Met You</a></li>
                    <li><a href="#">Dream Your Moments</a></li>
                    <li class="text-center"><a href="#">Luffy</a></li>
                    <li class="text-center"><a href="#">5:26</a></li>
                    <li class="text-center"><a href="#"><span class="ms_icon1 ms_fav_icon"></span></a></li>
                    <li class="text-center ms_more_icon"><a href="javascript:;"><span class="ms_icon1 ms_active_icon"></span></a>
                        <ul class="more_option">
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                        </ul>
                    </li>
                    <li class="text-center"><a href="#"><span class="ms_close">
									<img src="images/svg/close.svg" alt=""></span></a></li>
                </ul>
                <ul class="play_active_song">
                    <li><a href="#"><span class="play_no">04</span><span class="play_hover"></span></a></li>
                    <li><a href="#">Dark Alley Acoustic</a></li>
                    <li><a href="#">Dream Your Moments</a></li>
                    <li class="text-center"><a href="#">free willy</a></li>
                    <li class="text-center"><a href="#">5:26</a></li>
                    <li class="text-center"><a href="#"><span class="ms_icon1 ms_fav_icon"></span></a></li>
                    <li class="text-center ms_more_icon"><a href="javascript:;"><span class="ms_icon1 ms_active_icon"></span></a>
                        <ul class="more_option">
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                        </ul>
                    </li>
                    <li class="text-center"><a href="#"><span class="ms_close">
									<img src="images/svg/close.svg" alt=""></span></a></li>
                </ul>

                <div class="ms_view_more">
                    <a href="#" class="ms_btn">@lang('buttons.viewMore')</a>
                </div>
            </div>
        </div>
    </div>
    <!----Live Radio Section Start---->
    <div class="ms_radio_wrapper padder_top30">
        <div class="ms_heading">
            <h1>Recently Played</h1>
            <span class="veiw_all"><a href="#">@lang('buttons.viewMore')</a></span>
        </div>
        <div class="ms_radio_slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/radio/img4.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Dark Alley Acoustic</a></h3>
                            <p>Ava Cornish &amp; Brian Hill</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next4 slider_nav_next"></div>
        <div class="swiper-button-prev4 slider_nav_prev"></div>
    </div>
    <!----Main div close---->
    </div>
@endsection
