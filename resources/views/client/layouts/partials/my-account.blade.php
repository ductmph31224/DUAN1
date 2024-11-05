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
                            <li><a href="#" class="active">tài khoản của tôi</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs-area-end -->
    <!-- entry-header-area-start -->
    <div class="entry-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="entry-header-title">
                        <h2>Tài khoản của tôi</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- entry-header-area-end -->
    <!-- my account wrapper start -->
    <div class="my-account-wrapper mb-70">
        <div class="container">
            <div class="section-bg-color">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- My Account Page Start -->
                        <div class="myaccount-page-wrapper">
                            <!-- My Account Tab Menu Start -->
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="myaccount-tab-menu nav" role="tablist">
                                        <a href="#dashboad" class="active" data-bs-toggle="tab"><i
                                                class="fa fa-dashboard"></i>
                                            Tổng quan</a>
                                        <a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                                            Đơn hàng</a>
                                        <a href="#payment-method" data-bs-toggle="tab"><i class="fa fa-credit-card"></i>
                                            Phương thức thanh toán</a>
                                        <a href="#address-edit" data-bs-toggle="tab"><i class="fa fa-map-marker"></i>
                                            Địa chỉ</a>
                                        <a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i> Tài khoản
                                            chi tiết</a>
                                        <a href=""><i class="fa fa-sign-out"></i> Đăng xuất</a>
                                    </div>
                                </div>
                                <!-- My Account Tab Menu End -->

                                <!-- My Account Tab Content Start -->
                                <div class="col-lg-9 col-md-8">
                                    <div class="tab-content" id="myaccountContent">
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h5>Tổng quan</h5>
                                                <div class="welcome">
                                                    <p>Xin chào, <strong>Đức</strong> ( Nếu không phải <strong>Đức
                                                            !</strong><a href="" class="logout">
                                                            Đăng xuất</a>)</p>
                                                </div>
                                                <p class="mb-0">Từ bảng điều khiển tài khoản của bạn. bạn có thể dễ dàng
                                                    kiểm tra &
                                                    xem các đơn đặt hàng gần đây của bạn, quản lý địa chỉ giao hàng và thanh
                                                    toán của bạn
                                                    và chỉnh sửa mật khẩu và chi tiết tài khoản của bạn.</p>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->

                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="orders" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h5>Đơn hàng</h5>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Đơn đặt hàng</th>
                                                                <th>Ngày đặt hàng</th>
                                                                <th>Trạng thái</th>
                                                                <th>Tổng tiền</th>
                                                                <th>Hành động</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Aug 22, 2018</td>
                                                                <td>Pending</td>
                                                                <td>$3000</td>
                                                                <td><a href="cart.html" class="btn btn-sqr">View</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>July 22, 2018</td>
                                                                <td>Approved</td>
                                                                <td>$200</td>
                                                                <td><a href="cart.html" class="btn btn-sqr">View</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>June 12, 2017</td>
                                                                <td>On Hold</td>
                                                                <td>$990</td>
                                                                <td><a href="cart.html" class="btn btn-sqr">View</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->

                                        <!-- Single Tab Content End -->

                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h5>Phương thức thanh toán</h5>
                                                <p class="saved-message">Bạn không được lưu tài khoản thanh toán của
                                                    mình ở đây</p>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->

                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h5>Địa chỉ thanh toán</h5>
                                                <address>
                                                    <p><strong>Erik Jhonson</strong></p>
                                                    <p>1355 Market St, Suite 900 <br>
                                                        San Francisco, CA 94103</p>
                                                    <p>Mobile: (123) 456-7890</p>
                                                </address>
                                                <a href="#" class="btn btn-sqr"><i class="fa fa-edit"></i>
                                                    Edit Address</a>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->

                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="account-info" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h5>Tài khoản chi tiết</h5>
                                                <div class="account-details-form">
                                                    <form action="#">

                                                        <div class="single-input-item">
                                                            <label for="display-name" class="required"> Họ và Tên
                                                            </label>
                                                            <input type="text" id="display-name"
                                                                placeholder="Họ và Tên " />
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="email" class="required">Email </label>
                                                            <input type="email" id="email"
                                                                placeholder="Địa chỉ Email " />
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="email" class="required">Địa chỉ  </label>
                                                            <input type="email" id="email"
                                                                placeholder="Địa chỉ Email " />
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="email" class="required">Số điện thoại</label>
                                                            <input type="email" id="email"
                                                                placeholder="Địa chỉ Email " />
                                                        </div>
                                                        <div class="single-input-item">
                                                            <a class="btn btn-sqr" href="{{ route('change') }}">Thay đổi mật khẩu</a>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div> <!-- Single Tab Content End -->
                                    </div>
                                </div> <!-- My Account Tab Content End -->
                            </div>
                        </div> <!-- My Account Page End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- my account wrapper end -->
@endsection
