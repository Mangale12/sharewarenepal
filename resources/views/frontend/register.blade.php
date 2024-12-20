@extends('frontend.layouts.app')
@section('title', 'Register')

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
                            <li>Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- LOGIN AREA START (Register) -->
<div class="ltn__login-area pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1>Register <br>Your Account</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br> Sit aliquid, Non distinctio vel iste.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="account-login-inner">
                    <form action="{{ route('user.store') }}" method="POST" class="ltn__form-box contact-form-box">
                        @csrf <!-- Add CSRF token for security -->
                    
                        <!-- First Name -->
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Full Name">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    
                        <!-- Email -->
                        <input type="text" name="email" value="{{ old('email') }}" placeholder="Email*">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    
                        <!-- Password -->
                        <input type="password" name="password" placeholder="Password*">
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    
                        <!-- Confirm Password -->
                        <input type="password" name="password_confirmation" placeholder="Confirm Password*">
                        @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    
                        <!-- Marketing Consent -->
                        <label class="checkbox-inline">
                            <input type="checkbox" name="marketing_consent" value="1">
                            I consent to Herboil processing my personal data in order to send personalized marketing material in
                            accordance with the consent form and the privacy policy.
                        </label>
                    
                        <!-- Privacy Policy Consent -->
                        <label class="checkbox-inline">
                            <input type="checkbox" name="privacy_policy" value="1" required>
                            By clicking "create account", I consent to the privacy policy.
                        </label>
                        @error('privacy_policy')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    
                        <div class="btn-wrapper">
                            <button class="theme-btn-1 btn reverse-color btn-block" type="submit">CREATE ACCOUNT</button>
                        </div>
                    </form>
                    
                    <div class="by-agree text-center">
                        <p>By creating an account, you agree to our:</p>
                        <p><a href="#">TERMS OF CONDITIONS  &nbsp; &nbsp; | &nbsp; &nbsp;  PRIVACY POLICY</a></p>
                        <div class="go-to-btn mt-50">
                            <a href="login.html">ALREADY HAVE AN ACCOUNT ?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGIN AREA END -->
@endsection

@section('scripts')
@endsection