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
                            <li><a href="#" class="active">đăng ký</a></li>
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
                        <h2>Đăng ký</h2>
                    </div>
                </div>
                <form action="{{route('dangkyUser')}}" method="post">
                    @csrf <!-- Để bảo mật và tránh tấn công CSRF -->

                    <div class="offset-lg-2 col-lg-8 col-md-12 col-12">
                        <div class="billing-fields">
                            <div class="single-register">
                                <label>Họ và Tên<span>*</span></label>
                                <input type="text" name="name" class="form-control" required placeholder="Nhập họ và tên" />
                            </div>
                            <div class="single-register">
                                <label>Email<span>*</span></label>
                                <input type="email" name="email" class="form-control" required placeholder="Nhập email" />
                            </div>
                            <div class="single-register">
                                <label>Số Điện Thoại<span>*</span></label>
                                <input type="text" name="phone" class="form-control" required placeholder="Nhập số điện thoại" />
                            </div>
                            <div class="single-register">
                                <label>Địa Chỉ<span>*</span></label>
                                <input type="text" name="address" class="form-control" required placeholder="Nhập địa chỉ" />
                            </div>
                            <div class="single-register">
                                <label>Mật khẩu<span>*</span></label>
                                <input type="password" name="password" class="form-control" required placeholder="Nhập mật khẩu" />
                            </div>
                            <div class="single-register">
                                <label>Xác nhận mật khẩu<span>*</span></label>
                                <input type="password" name="password_confirmation" class="form-control" required placeholder="Xác nhận mật khẩu" />
                            </div>
                            <div class="single-login single-login-2">
                                <button type="submit" class="custom-button">Đăng ký</button>
                            </div>
                        </div>
                    </div>
                </form>

                            @if ($errors->any())
                                <div class="alert alert-danger mt-3">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- user-login-area-end -->
@endsection
