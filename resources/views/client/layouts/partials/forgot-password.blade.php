@extends('client.layouts.master')
@section('content')
 <!-- breadcrumbs-area-start -->
 <div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#" class="active">quên mật khẩu</a></li>
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
                    <h2>Quên mật khẩu?</h2>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6 col-md-12 col-12">
                <form action="#">
                    <div class="login-form">
                        <div class="single-login">
                            <label>Địa Chỉ Email<span>*</span></label>
                            <input type="email" required />
                        </div>
                        <button style="margin-bottom: 20px" class="custom-button">Xác Nhận Tại Đây</button>
                        <p>Bạn đã nhớ mật khẩu chưa? <a href="{{route('login')}}">Đăng Nhập Tại Đây</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- forgot-password-area-end -->
@endsection
