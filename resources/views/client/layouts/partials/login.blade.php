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
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6 col-md-12 col-12">
                   <form action="{{route('loginUser')}}" method="post">
                    @csrf
                    <div class="login-form">
                        {{-- Hiển thị lỗi đăng nhập chung --}}
                        @if ($errors->has('login_error'))
                            <div class="alert alert-danger">
                                {{ $errors->first('login_error') }}
                            </div>
                        @endif

                        <div class="single-login">
                            <label>Nhập email<span>*</span></label>
                            <input type="text" name="email" value="{{ old('email') }}" />
                            {{-- Hiển thị lỗi cho trường email --}}
                            @if ($errors->has('email'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>

                        <div class="single-login">
                            <label>Nhập Password <span>*</span></label>
                            <input type="password" name="password" />
                            {{-- Hiển thị lỗi cho trường password --}}
                            @if ($errors->has('password'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
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
