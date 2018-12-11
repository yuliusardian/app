@extends('layouts.apps')

@section('content')
    <div class="modal-dialog login_dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="ms_register_img">
                    <img src="images/register_img.png" alt="" class="img-fluid" />
                </div>
                <form method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="ms_register_form">
                        <h2>Register / Sign Up</h2>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Enter Your Name" class="form-control" autocomplete="off">
                            <span class="form_icon">
                                <i class="fa_icon form-user" aria-hidden="true"></i>
                            </span>
                            @if ($errors->has('name'))
                                <p class="text-danger font-weight-normal text-left">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" placeholder="Enter Your Email" class="form-control" autocomplete="off">
                            <span class="form_icon">
                                <i class="fa_icon form-envelope" aria-hidden="true"></i>
                            </span>
                            @if ($errors->has('email'))
                                <p class="text-danger font-weight-normal text-left">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Enter Password" class="form-control" autocomplete="off">
                            <span class="form_icon">
                                <i class="fa_icon form-lock" aria-hidden="true"></i>
                            </span>
                            @if ($errors->has('password'))
                                <p class="text-danger font-weight-normal text-left">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Confirm Password" class="form-control" autocomplete="off">
                            <span class="form_icon">
                                <i class=" fa_icon form-lock" aria-hidden="true"></i>
                            </span>
                        </div>

                        {{--<a href="{{ route('register') }}" class="ms_btn">register now</a>--}}

                        <button type="submit">REGISTER</button>

                        <p>Already Have An Account? <a href="{{ route('login') }}" class="ms_modal hideCurrentModel">login here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
