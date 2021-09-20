@extends('admin.login_master')
@section('login')
<!-- Sing in  Form -->
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="{{ asset('backendLogin/images/signin-image.jpg') }}" alt="sing in image"></figure>
                <!-- <a href="{{ route('register') }}" class="signup-image-link">Dont't Have Account?</a> -->
                <!-- <a class="signup-image-link" href="{{ route('password.request') }}">Forgot Your Password?</a> -->
            </div>

            <div class="signin-form">
                <h2 class="form-title">Sign In</h2>
                <form method="POST" class="register-form" id="login-form" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email" required />
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password" required />
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                        <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
                            me</label>

                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
