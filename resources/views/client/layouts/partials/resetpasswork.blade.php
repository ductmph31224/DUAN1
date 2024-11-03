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
                   <form action="{{route('')}}" method="post">
                    @csrf

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
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
@endsection
