@extends('client.layouts.master')
@section('content')
    <div class="breadcrumbs-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs-menu">
                        <ul>
                            <li><a href="{{route('index')}}">Trang chủ</a></li>
                            <li><a href="{{route('checkout')}}" class="active">thanh toán</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- entry-header-area-start -->
    <div class="entry-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="entry-header-title">
                        <h2>Thanh Toán</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- entry-header-area-end -->
    <!-- coupon-area-area-start -->
    <div class="coupon-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    {{-- <div class="coupon-accordion">
                        <h3>Bạn là khách hàng cũ? <span id="showlogin">Nhấn vào để đăng nhập</span></h3>
                        <div class="coupon-content" id="checkout-login">
                            <div class="coupon-info">
                                <p class="coupon-text"></p>
                                <form action="#">
                                    <p class="form-row-first">
                                        <label>Email đăng nhập<span class="required">*</span></label>
                                        <input type="text">
                                    </p>
                                    <p class="form-row-last">
                                        <label>Mật khẩu <span class="required">*</span></label>
                                        <input type="text">
                                    </p>
                                    <p class="form-row">
                                        <input type="submit" value="Đăng nhập">
                                        <label>
                                            <input type="checkbox">
                                            Ghi nhớ mật khẩu
                                        </label>
                                    </p>
                                    <p class="lost-password">
                                        <a href="">Bạn đã quên mật khẩu ?</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- coupon-area-area-end -->
    <!-- checkout-area-start -->
    <div class="checkout-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="checkbox-form">
                                    <h3>Chi tiết thanh toán</h3>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="checkout-form-list">
                                                <label>Họ và Tên <span class="required">*</span></label>
                                                <input type="text" placeholder="" value="{{ Auth::user()->name }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="checkout-form-list">
                                                <label>Số điện thoại <span class="required">*</span></label>
                                                <input type="text" placeholder="" value="{{ Auth::user()->phone }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="checkout-form-list">
                                                <label>Địa chỉ <span class="required">*</span></label>
                                                <input type="text"
                                                    placeholder="số nhà, tên đường, phường/xã, quận/huyện, tỉnh/thành phố"
                                                    value="{{ Auth::user()->address }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="checkout-form-list">
                                                <label>Email <span class="required">*</span></label>
                                                <input type="text" placeholder="" value="{{ Auth::user()->email }}">
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="your-order">
                                    <h3>Đơn hàng của bạn</h3>
                                    <div class="your-order-table table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Sản phẩm</th>
                                                    <th class="product-total">Giá Sản phẩm</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cart as $item)
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            {{ $item['ten_san_pham'] }} <strong class="product-quantity"> ×
                                                                {{ $item['quantity'] }}</strong>
                                                        </td>
                                                        <td class="product-total">
                                                            <span
                                                                class="amount">{{ number_format($item['price'], 0, ',', '.') }}
                                                                đ</span>
                                                        </td>
                                                    </tr>
                                                @endforeach


                                            </tbody>
                                            <tfoot>
                                                <tr class="cart-subtotal">
                                                    <th>Tổng cộng giỏ hàng</th>
                                                    <td><span class="amount">{{ number_format($subtotal, 0, ',', '.') }}
                                                                đ</span></td>
                                                </tr>
                                                <tr class="shipping">
                                                    <th>Phí ship</th>
                                                    <td><span class="amount">{{ number_format($shipping, 0, ',', '.') }}
                                                                đ</span></td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Tổng đơn hàng</th>
                                                    <td><strong><span class="amount">{{ number_format($total, 0, ',', '.') }}
                                                                đ</span></strong>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="payment-method">
                                        <div class="payment-accordion">
                                            <div class="collapses-group">
                                                <div class="panel-group" id="accordion" role="tablist"
                                                    aria-multiselectable="true">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingOne">
                                                            <h4 class="panel-title">
                                                                <a href="#">
                                                                    Chuyển khoản ngân hàng trực tiếp
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        {{-- <div id="collapseOne" class="panel-collapse collapse in"
                                                            role="tabpanel" aria-labelledby="headingOne">
                                                            <div class="panel-body">
                                                                <p>MThanh toán trực tiếp vào tài khoản ngân hàng của chúng
                                                                    tôi. Vui lòng sử dụng Mã đơn hàng của bạn làm tham chiếu
                                                                    thanh toán. Đơn hàng của bạn sẽ không được giao cho đến
                                                                    khi tiền được chuyển vào tài khoản của chúng tôi.</p>
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingTwo">
                                                            <h4 class="panel-title">
                                                                <a href="#">
                                                                    Thanh toán khi nhận hàng
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        {{-- <div id="collapseTwo" class="panel-collapse collapse"
                                                            role="tabpanel" aria-labelledby="headingTwo">
                                                            <div class="panel-body">
                                                                <p>Vui lòng gửi séc đến Tên cửa hàng, Đường cửa hàng, Thị
                                                                    trấn cửa hàng, Tiểu bang/Quận cửa hàng, Mã bưu chính của
                                                                    cửa hàng.</p>
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                    {{-- <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingThree">
                                                            <h4 class="panel-title">
                                                                <a class="collapsed" role="button"
                                                                    data-bs-toggle="collapse" data-bs-parent ="#accordion"
                                                                    href="#collapseThree" aria-expanded="false"
                                                                    aria-controls="collapseThree">
                                                                    PayPal <img src="img/2.png" alt="payment" />
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseThree" class="panel-collapse collapse"
                                                            role="tabpanel" aria-labelledby="headingThree">
                                                            <div class="panel-body">
                                                                <p>Thanh toán qua PayPal; bạn có thể thanh toán bằng thẻ tín
                                                                    dụng nếu bạn không có tài khoản PayPal.</p>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order-button-payment">
                                            <input type="submit" value="đặt hàng">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout-area-end -->
@endsection
