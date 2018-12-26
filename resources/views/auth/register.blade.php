@extends('layouts.apps')

@section('content')
    <div class="modal-dialog login_dialog">
        <div class="modal-content">
            <div class="modal-body">
                <p style="color:#fff">{{ session('success') }}</p>
                <div class="ms_register_img">
                    <img src="images/register_img.png" alt="" class="img-fluid" />
                </div>
                <form method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="ms_register_form">
                        <h2>@lang('texts.register')</h2>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="@lang('placeholder.name')" class="form-control" autocomplete="off">
                            <span class="form_icon">
                                <i class="fa_icon form-user" aria-hidden="true"></i>
                            </span>
                            @if ($errors->has('name'))
                                <p class="text-danger font-weight-normal text-left">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
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
                        <div class="form-group">
                            <input type="password" placeholder="@lang('placeholder.passwordConfirmation')" class="form-control" autocomplete="off">
                            <span class="form_icon">
                                <i class=" fa_icon form-lock" aria-hidden="true"></i>
                            </span>
                        </div>

                        {{--<a href="{{ route('register') }}" class="ms_btn">register now</a>--}}

                        <button type="submit">@lang('buttons.register')</button>

                        <p>@lang('texts.alreadyHaveAnAccount') <a href="{{ route('login') }}" class="ms_modal hideCurrentModel">@lang('buttons.loginHere')</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
