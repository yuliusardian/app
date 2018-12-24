@extends('layouts.apps')

@section('content')
    <div class="modal-dialog login_dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="ms_register_img">
                    <img src="images/register_img.png" alt="" class="img-fluid" />
                </div>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="ms_register_form">
                        <h2>@lang('texts.login')</h2>
                        <div class="form-group">
                            <input type="text" name="email" placeholder="@lang('placeholder.email')" class="form-control" autocomplete="off">
                            <span class="form_icon">
                                <i class="fa_icon form-envelope" aria-hidden="true"></i>
                            </span>
                            @if ($errors->has('email'))
                                <p class="text-danger font-weight-normal text-left">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="@lang('placeholder.password')" class="form-control" autocomplete="off">
                            <span class="form_icon">
                                <i class="fa_icon form-lock" aria-hidden="true"></i>
                            </span>
                            @if ($errors->has('password'))
                                <p class="text-danger font-weight-normal text-left">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                        {{--<div class="remember_checkbox">--}}
                            {{--<label>Keep me signed in <input type="checkbox">--}}
                                {{--<span class="checkmark"></span>--}}
                            {{--</label>--}}
                        {{--</div>--}}

                        {{--<a href="profile.html" class="ms_btn" target="_blank">login now</a>--}}

                        <button type="submit">@lang('buttons.login')</button>

                        <div class="popup_forgot">
                            <a href="#">@lang('buttons.forgotPassword')</a>
                        </div>
                        <p>@lang('texts.dontHaveAnAccount') <a href="{{ route('register') }}" class="ms_modal1 hideCurrentModel">@lang('buttons.registerHere')</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
