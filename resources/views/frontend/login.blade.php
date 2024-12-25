@extends('frontend.layouts.app')
@section('title', 'Login')
@section('css')
<style>
    .btn-google {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #4285F4;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    text-decoration: none;
}
.btn-google:hover {
    background-color: #357AE8;
    text-decoration: none;
    color: white;
}

</style>
@endsection

@section('content')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title">Account</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- LOGIN AREA START -->
<div class="ltn__login-area pb-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1>Sign In <br>To Your Account</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br> Sit aliquid, Non distinctio vel iste.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="account-login-inner">
                    <form action="#" class="ltn__form-box contact-form-box">
                        <input type="text" name="email" placeholder="Email*">
                        <input type="password" name="password" placeholder="Password*">
                        <div class="btn-wrapper mt-0">
                            <button class="theme-btn-1 btn btn-block" type="submit">SIGN IN</button>
                        </div>
                        <div class="go-to-btn mt-20">
                            <a href="#"><small>FORGOTTEN YOUR PASSWORD?</small></a>
                        </div>
                        <div class="or-text mt-30">
                            <span>OR</span>
                        </div>
                        <div class="social-login mt-20">
                            <a class="btn btn-google btn-block" id="googleLoginButton">
                                <img src="{{ asset('images/google-icon.jpeg') }}" alt="Google Icon" style="width: 20px; margin-right: 10px;">
                                Sign in with Google
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="account-create text-center pt-50">
                    <h4>DON'T HAVE AN ACCOUNT?</h4>
                    <p>Add items to your wishlist, get personalised recommendations <br> check out more quickly, and track your orders by registering.</p>
                    <div class="btn-wrapper">
                        <a href="register.html" class="theme-btn-1 btn black-btn">CREATE ACCOUNT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGIN AREA END -->
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#googleLoginButton').click(function(e) {
            e.preventDefault();
            var popup = window.open(
            '{{ route("login.google") }}',
            'googleLogin',
            'width=800,height=600,top=200,left=400'
            );

            var checkPopup = setInterval(function() {
            if (popup.closed) {
                clearInterval(checkPopup);
                // Reload or close the login modal after successful Google login
                window.location.reload(); // Adjust based on your app's needs
            }
            }, 1000);
        });
    });
</script>
@endsection
