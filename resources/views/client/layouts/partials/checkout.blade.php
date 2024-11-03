@extends('client.layouts.master')
@section('content')
<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#" class="active">thanh toán</a></li>
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
                    <div class="coupon-accordion">
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
                    </div>
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
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="checkout-form-list">
                                                <label>Số điện thoại <span class="required">*</span></label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="checkout-form-list">
                                                <label>Địa chỉ <span class="required">*</span></label>
                                                <input type="text" placeholder="số nhà, tên đường, phường/xã, quận/huyện, tỉnh/thành phố" >
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="checkout-form-list">
                                                <label>Email <span class="required">*</span></label>
                                                <input type="text" placeholder="">
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
                                                    <th class="product-total">Giá tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount">£165.00</span>
                                                    </td>
                                                </tr>
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount">£50.00</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr class="cart-subtotal">
                                                    <th>Cart Subtotal</th>
                                                    <td><span class="amount">£215.00</span></td>
                                                </tr>
                                                <tr class="shipping">
                                                    <th>Phí ship</th>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Tổng đơn hàng</th>
                                                    <td><strong><span class="amount">£215.00</span></strong>
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
                                                                <a data-bs-toggle="collapse" data-bs-parent ="#accordion"
                                                                    href="#collapseOne" aria-expanded="true"
                                                                    aria-controls="collapseOne">
                                                                    Direct Bank Transfer
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseOne" class="panel-collapse collapse in"
                                                            role="tabpanel" aria-labelledby="headingOne">
                                                            <div class="panel-body">
                                                                <p>Make your payment directly into our bank account. Please
                                                                    use your Order ID as the payment reference. Your order
                                                                    won’t be shipped until the funds have cleared in our
                                                                    account.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingTwo">
                                                            <h4 class="panel-title">
                                                                <a class="collapsed" role="button"
                                                                    data-bs-toggle="collapse" data-bs-parent ="#accordion"
                                                                    href="#collapseTwo" aria-expanded="false"
                                                                    aria-controls="collapseTwo">
                                                                    Cheque Payment
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseTwo" class="panel-collapse collapse"
                                                            role="tabpanel" aria-labelledby="headingTwo">
                                                            <div class="panel-body">
                                                                <p>Please send your cheque to Store Name, Store Street,
                                                                    Store Town, Store State / County, Store Postcode.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
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
                                                                <p>Pay via PayPal; you can pay with your credit card if you
                                                                    don’t have a PayPal account.</p>
                                                            </div>
                                                        </div>
                                                    </div>
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
