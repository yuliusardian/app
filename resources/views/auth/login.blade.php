@extends('layouts.app')

@section('content')
    <!----Loader Start---->
    <div class="ms_loader">
        <div class="wrap">
            <img src="images/loader.gif" alt="">
        </div>
    </div>
    <!----Main Wrapper Start---->
    <div class="ms_main_wrapper">
        <div class="modal-dialog login_dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <div class="ms_register_img">
                        <img src="images/register_img.png" alt="" class="img-fluid" />
                    </div>
                    <form>
                        <div class="ms_register_form">
                            <h2>login / Sign in</h2>
                            <div class="form-group">
                                <input type="text" placeholder="Enter Your Email" class="form-control">
                                <span class="form_icon">
                            <i class="fa_icon form-envelope" aria-hidden="true"></i>
                        </span>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Enter Password" class="form-control">
                                <span class="form_icon">
                        <i class="fa_icon form-lock" aria-hidden="true"></i>
                        </span>
                            </div>
                            <div class="remember_checkbox">
                                <label>Keep me signed in
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <a href="profile.html" class="ms_btn" target="_blank">login now</a>
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
