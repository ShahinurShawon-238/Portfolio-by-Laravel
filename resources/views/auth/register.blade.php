@extends('admin.login_master')
@section('login')
<!-- Sign up form -->
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                <form method="POST" class="register-form" id="register-form" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="Your Name" required />
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email" required />
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password" required />
                    </div>
                    <div class="form-group">
                        <label for="re-password_confirmation"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="Repeat your password" required />
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                            statements in <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="{{ asset('backendLogin/images/signup-image.jpg') }}" alt="sing up image"></figure>
                <a href="{{ route('login') }}" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
</section>
@endsection
