@extends('layouts.app')

@section('content')
<div class="ms_profile_wrapper">
    <h1>Edit Profile</h1>
    <div class="ms_profile_box">
        <div class="ms_pro_img">
            <img src="images/pro_img.jpg" alt="" class="img-fluid">
            <div class="pro_img_overlay">
                <i class="fa_icon edit_icon"></i>
            </div>
        </div>
        <div class="ms_pro_form">
            <form action="{{ route('profile') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Your Name *</label>
                    <input type="text" name="name" placeholder="@lang('placeholder.name')" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Your Email *</label>
                    <input type="text" name="email" placeholder="@lang('placeholder.email')" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Your Password *</label>
                    <input type="password" name="password" placeholder="******" class="form-control">
                </div>
                <div class="form-group">
                    <label>Confirm Password *</label>
                    <input type="password" placeholder="******" class="form-control">
                </div>
                <div class="pro-form-btn text-center marger_top15">
                    <button type="submit" class="ms_btn">@lang('buttons.save')</button>
                    {{--<a href="#" class="ms_btn">save</a>--}}
                    <a href="{{ route('home') }}" class="ms_btn">@lang('buttons.cancel')</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
