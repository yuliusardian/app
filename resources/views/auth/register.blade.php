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
                    <form method="post" action="{{ route('register') }}">
                        <div class="ms_register_form">
                            <h2>Register / Sign Up</h2>
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Enter Your Name" class="form-control">
                                <span class="form_icon">
                            <i class="fa_icon form-user" aria-hidden="true"></i>
                            </span>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" placeholder="Enter Your Email" class="form-control">
                                <span class="form_icon">
                            <i class="fa_icon form-envelope" aria-hidden="true"></i>
                        </span>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Enter Password" class="form-control">
                                <span class="form_icon">
                        <i class="fa_icon form-lock" aria-hidden="true"></i>
                        </span>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Confirm Password" class="form-control">
                                <span class="form_icon">
                        <i class=" fa_icon form-lock" aria-hidden="true"></i>
                        </span>
                            </div>
                            <a href="{{ route('register') }}" class="ms_btn">register now</a>
                            <p>Already Have An Account? <a href="{{ route('login') }}" class="ms_modal hideCurrentModel">login here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
