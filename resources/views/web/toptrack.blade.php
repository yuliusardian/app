@extends('layouts.app')

@section('content')
    <div class="ms_weekly_wrapper">
        <div class="ms_weekly_inner">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ms_heading">
                        <h1>@lang('texts.weeklyTop', ['number' => 50])</h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 padding_right40">
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                                    <span class="w_top_no">
										1
									</span>
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="images/weekly/song7.jpg" alt="">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Endless Things</a></h3>
                                    <p>Ava Cornish</p>
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
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                        </ul>
                    </div>
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box ms_active_play">
                        <div class="weekly_left">
                                    <span class="w_top_no">
										2
									</span>
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="images/weekly/song8.jpg" alt="">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <div class="ms_bars">
                                            <div class="bar"></div>
                                            <div class="bar"></div>
                                            <div class="bar"></div>
                                            <div class="bar"></div>
                                            <div class="bar"></div>
                                            <div class="bar"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Dream Your Moments</a></h3>
                                    <p>Ava Cornish</p>
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
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                        </ul>
                    </div>
                    <div class="ms_divider"></div>
                </div>
            </div>
        </div>
    </div>
@endsection