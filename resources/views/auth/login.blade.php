@extends('layouts.app')

@section('content')
    <!----Main Wrapper Start---->
    <div class="ms_main_wrapper">
        <div class="modal-dialog login_dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <div class="ms_register_img">
                        <img src="images/register_img.png" alt="" class="img-fluid" />
                    </div>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="ms_register_form">
                            <h2>login / Sign in</h2>
                            <div class="form-group">
                                <input type="text" name="email" placeholder="Enter Your Email" class="form-control" autocomplete="off">
                                <span class="form_icon">
                                    <i class="fa_icon form-envelope" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Enter Password" class="form-control" autocomplete="off">
                                <span class="form_icon">
                                    <i class="fa_icon form-lock" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="remember_checkbox">
                                <label>Keep me signed in <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            {{--<a href="profile.html" class="ms_btn" target="_blank">login now</a>--}}

                            <button type="submit">Login</button>

                            <div class="popup_forgot">
                                <a href="#">Forgot Password ?</a>
                            </div>
                            <p>Don't Have An Account? <a href="{{ route('register') }}" class="ms_modal1 hideCurrentModel">register here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
