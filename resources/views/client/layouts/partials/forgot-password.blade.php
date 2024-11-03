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
                        <li><a href="#" class="active">Forgot Password</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs-area-end -->

<!-- forgot-password-area-start -->
<div class="user-login-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="login-title text-center mb-30">
                    <h2>Forgot Your Password?</h2>
                    <p>Please enter your email address. You will receive a link to create a new password via email.</p>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6 col-md-12 col-12">
               <form action="{{route('sendResetLinkEmail')}}" method="post">
                <div class="login-form">
                    <div class="single-login">
                        <label>Địa Chỉ Email<span>*</span></label>
                        <input type="email" required />
                    </div>
                    <div class="single-login single-login-2">
                        <button type="submit">Xác Nhận Qua Email</button>
                    </div>
                    <p>Bạn đã nhớ mật khẩu chưa? <a href="{{route('login')}}">Đăng Nhập Tại Đây</a></p>
                </div>
               </form>
            </div>
        </div>
    </div>
</div>
<!-- forgot-password-area-end -->
@endsection
