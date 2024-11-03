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
                        <h2>Đăng Nhập</h2>
                    {{-- </div>
                    @if (session('success'))
                    <div>{{ session('success') }}</div>
                @endif --}}
                </div>
                <div class="offset-lg-3 col-lg-6 col-md-12 col-12">
                   <form action="{{route('loginUser')}}" method="post">
                    @csrf

                    <div class="login-form">
                        <div class="single-login">
                            <label>Nhập email<span>*</span></label>
                            <input type="text" name="email" />
                        </div>
                        <div class="single-login">
                            <label>Nhập Passwords <span>*</span></label>
                            <input type="text" name="password" />
                        </div>
                        <button type="submit" class="btn btn-danger">Đăng Nhập</button>
                        <a href="{{route('khoiphucmatkhau')}}">Bạn Quên password?</a>
                        <div>
                            <a href="{{route('dangky')}}">Bạn Chưa Có Tài Khoản?</a>
                        </div>
                    </div>
                   </form>

                </div>
            </div>
        </div>
    </div>
@endsection
