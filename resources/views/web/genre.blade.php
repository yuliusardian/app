@extends('layouts.app')

@section('content')

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

@endsection
