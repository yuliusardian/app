@extends('layouts.app')

@section('content')
    <!---Side Menu Start--->
    <div class="ms_sidemenu_wrapper">
        <div class="ms_nav_close">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </div>
        <div class="ms_sidemenu_inner">
            <div class="ms_logo_inner">
                <div class="ms_logo">
                    <a href="index-2.html"><img src="images/logo.png" alt="" class="img-fluid"/></a>
                </div>
                <div class="ms_logo_open">
                    <a href="index-2.html"><img src="images/open_logo.png" alt="" class="img-fluid"/></a>
                </div>
            </div>
            <div class="ms_nav_wrapper">
                <ul>
                    <li><a href="index-2.html">
                        <span class="nav_icon">
                            <span class="icon icon_discover"></span>
                        </span>
                            <span class="nav_text">
                            discover
                        </span>
                        </a>
                    </li>
                    <li><a href="album.html">
                        <span class="nav_icon">
                            <span class="icon icon_albums"></span>
                        </span>
                            <span class="nav_text">
                            albums
                        </span>
                        </a>
                    </li>
                    <li><a href="artist.html">
                        <span class="nav_icon">
                            <span class="icon icon_artists"></span>
                        </span>
                            <span class="nav_text">
                            artists
                        </span>
                        </a>
                    </li>
                    <li><a href="genres.html">
                        <span class="nav_icon">
                            <span class="icon icon_genres"></span>
                        </span>
                            <span class="nav_text">
                            genres
                        </span>
                        </a>
                    </li>
                    <li><a href="top_track.html">
                        <span class="nav_icon">
                            <span class="icon icon_tracks"></span>
                        </span>
                            <span class="nav_text">
                            top tracks
                        </span>
                        </a>
                    </li>
                    <li><a href="favourite.html" title="Favourites">
                        <span class="nav_icon">
                            <span class="icon icon_favourite"></span>
                        </span>
                            <span class="nav_text">
                            favourites
                        </span>
                        </a>
                    </li>
                    <li><a href="history.html">
                        <span class="nav_icon">
                            <span class="icon icon_history"></span>
                        </span>
                            <span class="nav_text">
                            history
                        </span>
                        </a>
                    </li>
                </ul>
                <ul class="nav_playlist">
                    <li><a href="feature_playlist.html">
                        <span class="nav_icon">
                            <span class="icon icon_fe_playlist"></span>
                        </span>
                            <span class="nav_text">
                            featured playlist
                        </span>
                        </a>
                    </li>
                    <li><a href="add_playlist.html" class="active">
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
    <!---Main Content Start--->
    <div class="padder_top80">
        <!---Header--->
        <div class="ms_header">
            <div class="ms_top_left">
                <div class="ms_top_search">
                    <input type="text" class="form-control" placeholder="Search Music Here..">
                    <span class="search_icon">
							<img src="images/svg/search.svg" alt="">
						</span>
                </div>
                <div class="ms_top_trend">
                    <span><a href="#"  class="ms_color">Trending Songs :</a></span> <span class="top_marquee"><a href="#">TODO FETCH FROM DB</a></span>
                </div>
            </div>
            <div class="ms_top_right">
                <div class="ms_top_lang">

                </div>
                <div class="ms_top_btn">

                    <a href="javascript:;" class="ms_admin_name">{{ Auth::user()->name }}<span class="ms_pro_name">@php echo mb_substr(Auth::user()->name, 0, 1); @endphp</span>
                    </a>
                    <ul class="pro_dropdown_menu">
                        {{--<li><a href="profile.html">Profile</a></li>--}}
                        {{--<li><a href="manage_acc.html" target="_blank">Pricing Plan</a></li>--}}
                        {{--<li><a href="blog.html" target="_blank">Blog</a></li>--}}
                        {{--<li><a href="#">Setting</a></li>--}}
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!----Main div close---->
    </div>
@endsection
