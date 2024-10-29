@extends('client.layouts.master')
@section('content')
    <!-- breadcrumbs-area-start -->
    <div class="breadcrumbs-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs-menu">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#" class="active">login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs-area-end -->
    <!-- user-login-area-start -->
    <div class="user-login-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="login-title text-center mb-30">
                        <h2>Login</h2>
                        <p>doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo<br>inventore veritatis et quasi
                            architecto beat</p>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6 col-md-12 col-12">
                    <div class="login-form">
                        <div class="single-login">
                            <label>Username or email<span>*</span></label>
                            <input type="text" />
                        </div>
                        <div class="single-login">
                            <label>Passwords <span>*</span></label>
                            <input type="text" />
                        </div>
                        <div class="single-login single-login-2">
                            <a href="#">login</a>
                            <input id="rememberme" type="checkbox" name="rememberme" value="forever">
                            <span>Remember me</span>
                        </div>
                        <a href="#">Lost your password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
