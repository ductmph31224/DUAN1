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
                            <li><a href="#" class="active">Giỏ Hàng</a></li>
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
                        <h2>Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- entry-header-area-end -->
    <!-- cart-main-area-start -->
    <div class="cart-main-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-content table-responsive mb-15 border-1">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Ảnh</th>
                                    <th class="product-name">Sản Phẩm</th>
                                    <th class="product-price">Giá</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="product-subtotal">Tổng cộng</th>
                                    <th class="product-remove">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $key => $item)
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img
                                                    src="{{ Storage::url($item['image']) }}" alt="man" /></a></td>
                                        <td class="product-name"><a href="#">{{ $item['ten_san_pham'] }}</a></td>
                                        <td class="product-price"><span
                                                class="amount">{{ number_format($item['price'], 0, ',', '.') }} đ</span>
                                        </td>
                                        <td class="product-quantity">
                                            <input type="number" name="quantity[{{ $key }}]"
                                                value="{{ $item['quantity'] }}" min="1">
                                        </td>
                                        <td class="product-subtotal">
                                            {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }} đ</td>

                                <td class="product-remove">
                                    <form action="{{ route('cart.remove', $item['id']) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE') <!-- Chỉ định phương thức DELETE -->
                                        <button type="submit" class="product-remove"><i class="fa fa-times"></i></button>
                                    </form>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12">
                    {{-- <div class="buttons-cart mb-30">
                        <ul>
                            <li><a href="#">Update Cart</a></li>
                            <li><a href="#">Continue Shopping</a></li>
                        </ul>
                    </div> --}}
                    {{-- <div class="coupon">
                        <h3>Coupon</h3>
                        <p>Enter your coupon code if you have one.</p>
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <a href="#">Apply Coupon</a>
                        </form>
                    </div> --}}
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="cart_totals">
                        <h2>Cart Totals</h2>
                        <table>
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td>
                                        <span class="amount">{{ number_format($subtotal, 0, ',', '.') }} đ</span>
                                    </td>
                                </tr>
                                <tr class="shipping">
                                    <th>Shipping</th>
                                    <td>
                                        <span class="amount">{{ number_format($shipping, 0, ',', '.') }} đ</span>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td>
                                        <strong>
                                            <span class="amount"><span
                                                    class="amount">{{ number_format($total, 0, ',', '.') }} đ</span></span>
                                        </strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="wc-proceed-to-checkout">
                            <a href="{{ route('formShowdondathang') }}">Thanh Toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-main-area-end -->
@endsection
