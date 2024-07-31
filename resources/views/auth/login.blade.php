@extends('layouts.authbase')

@section('content')
<div class="container-login100">
    <div class="wrap-login100 p-6">
        <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
            @csrf>
            <span class="login100-form-title">System Login</span>
            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <input class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="you@mail.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <span class="focus-input100"></span>
                <span class="symbol-input100"><i class="fe fe-mail"></i></span>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="wrap-input100 validate-input" data-validate = "Password is required">
                <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="current-password">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fe fe-lock"></i>
                </span>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <div class="pt-1">
                <p class="mb-0 pull-left">
                    <input type="checkbox" class="custom-control-input">Remember Me
                </p>

                <p class="mb-0 pull-right">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-primary ms-1">Forgot Password?</a>
                @endif
                </p>
            </div>
            <div class="container-login100-form-btn">
                <a href="index.html" class="login100-form-btn btn-primary">
                    Login
                </a>
            </div>
            <div class="text-center pt-3">
                <p class="text-dark mb-0">New here?<a href="{{route('register')}}" class="text-primary ms-1"> Sign Up</a></p>
            </div>
            <div class=" flex-c-m text-center mt-2">
                <p class="text-muted">Or</p>
                <div class="btn-list">
                    <a class="btn btn-icon bg-danger-transparent"><i class="fa fa-google text-danger"></i></a>
                    <a class="btn btn-icon bg-primary-transparent"><i class="fa fa-facebook text-primary"></i></a>
                    <a class="btn btn-icon bg-info-transparent"><i class="fa fa-twitter text-info"></i></a>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection