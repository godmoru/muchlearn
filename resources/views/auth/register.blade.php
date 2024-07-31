@extends('layouts.authbase')

@section('content')
<div class="container-login100">
    <div class="wrap-login100 p-6">
        <form class="login100-form validate-form">
            <span class="login100-form-title">
                Registration
            </span>
            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <input class="input100" type="text" name="email" placeholder="User name">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fe fe-user"></i>
                </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <input class="input100" type="text" name="email" placeholder="Email">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fe fe-mail"></i>
                </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate = "Password is required">
                <input class="input100" type="password" name="pass" placeholder="Password">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fe fe-lock"></i>
                </span>
            </div>
            <label class="custom-control custom-checkbox mt-4">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-label">Agree the <a href="#">terms and policy</a></span>
            </label>
            <div class="container-login100-form-btn">
                <a href="#" class="login100-form-btn btn-primary">
                    Register
                </a>
            </div>
            <div class="text-center pt-3">
                <p class="text-dark mb-0">Already have account?<a href="{{route('login')}}" class="text-primary ms-1">Sign In</a></p>
            </div>
            <div class=" flex-c-m text-center mt-3">
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