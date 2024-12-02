@extends('client.layouts.master')

@section('content')
    <style>
        .product-img img {
            width: 100%;
            height: 250px;
            /* Chiều cao cố định cho tất cả hình ảnh, bạn có thể điều chỉnh tùy ý */
            object-fit: cover;
            /* Giúp hình ảnh giữ tỷ lệ mà không bị biến dạng */
            border-radius: 8px;
            /* Tùy chọn: Bo tròn các góc ảnh */
        }
    </style>
    <div class="banner-area banner-res-large pt-30 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-banner mb-30">
                        <div class="banner-img">
                            <a href="#"><img src="/client/img/banner/1.png" alt="banner" /></a>
                        </div>
                        <div class="banner-text">
                            <h4>Đồng giá phí ship</h4>
                            <p>Phí ship chỉ với 20000 VNĐ</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-banner mb-30">
                        <div class="banner-img">
                            <a href="#"><img src="/client/img/banner/2.png" alt="banner" /></a>
                        </div>
                        <div class="banner-text">
                            <h4>Đảm bảo hoàn tiền</h4>
                            <p>Hoàn tiền 100% với tất cả sản phẩm lỗi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-banner mb-30">
                        <div class="banner-img">
                            <a href="#"><img src="/client/img/banner/3.png" alt="banner" /></a>
                        </div>
                        <div class="banner-text">
                            <h4>Thanh toán khi nhận hàng</h4>
                            <p>Kiểm tra hàng trước khi thanh toán</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-banner mb-30">
                        <div class="banner-img">
                            <a href="#"><img src="/client/img/banner/4.png" alt="banner" /></a>
                        </div>
                        <div class="banner-text">
                            <h4>Hỗ trợ và Giúp đỡ</h4>
                            <p>Liên hệ : + 0123.4567.89</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-area-end -->
    <!-- slider-area-start -->
    <div class="slider-area">
        <div class="slider-active owl-carousel">
            @foreach ($banner as $item)

                    <img class="banner" src="{{Storage::url($item->image)}}" alt="" >

            @endforeach

            {{-- <div class="single-slider slider-h1-2 pt-215 pb-100 bg-img"
                style="background-image:url(/client/img/slider/2.jpg);">
                <div class="container">
                    <div class="slider-content slider-content-2 slider-animated-1">
                        <h1>We can help get your</h1>
                        <h2>Books in Order</h2>
                        <h3>and Accessories</h3>
                        <a href="#">Contact Us Today!</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- slider-area-end -->
    <!-- product-area-start -->
    <div class="product-area pt-95 xs-mb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-50">
                        <h2>Top interesting</h2>
                        <p>Browse the collection of our best selling and top interresting products. <br /> ll definitely
                            find what you are looking for..</p>
                    </div>
                </div>

            </div>
            <!-- tab-area-start -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Audiobooks">
                    <div class="tab-active owl-carousel">
                        <!-- single-product-start -->
                        @foreach ($products as $item)
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="{{ route('detailProduct', $item->id) }}">
                                        <img src="{{ Storage::url($item->image) }}" alt="book" class="primary" />
                                    </a>

                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="{{ route('detailProduct', $item->id) }}">{{ $item->ten_san_pham }}</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>{{ number_format($item->gia_khuyen_mai, 0, ',', '.') }} đ</li>
                                            <li class="old-price">{{ number_format($item->gia_san_pham, 0, ',', '.') }} đ
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <form action="{{ route('addCart') }}" method="POST">
                                            @csrf
                                            <input type="hidden" id="quantity" name="quantity" value="1">
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <input type="hidden" name="ten_san_pham" value="{{ $item->ten_san_pham }}">
                                            <input type="hidden" name="price" value="{{ $item->gia_khuyen_mai }}">
                                            <input type="hidden" name="image" value="{{ $item->image }}">
                                            <button type="submit" title="Add to cart"><i
                                                    class="fa fa-shopping-cart"></i>Add tocart</button>
                                        </form>

                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="{{ route('detailProduct', $item->id) }}" title="Details"><i
                                                        class="fa fa-external-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- single-product-end -->
                    </div>
                </div>

            </div>
            <!-- tab-area-end -->
        </div>
    </div>
    <!-- product-area-end -->
    <!-- banner-area-start -->
    <div class="banner-area-5 mtb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-img-2">
                        <a href="#"><img src="/client/img/banner/5.jpg" alt="banner" /></a>
                        <div class="banner-text">
                            <h3>G. Meyer Books & Spiritual Traveler Press</h3>
                            <h2>Sale up to 30% off</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-area-end -->
    <!-- bestseller-area-start -->
    <div class="bestseller-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="bestseller-content">
                        <h1>Author best selling</h1>
                        <h2>J. K. <br />Rowling</h2>
                        <p class="categories">categories:<a href="#">Books</a> , <a href="#">Audiobooks</a>
                        </p>
                        <p>Vestibulum porttitor iaculis gravida. Praesent vestibulum varius placerat. Cras tempor congue
                            neque, id aliquam orci finibus sit amet. Fusce at facilisis arcu. Donec aliquet nulla id
                            turpis semper, a bibendum metus vulputate. Suspendisse potenti. </p>
                        <div class="social-author">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="banner-img-2">
                        <a href="#"><img src="/client/img/banner/6.jpg" alt="banner" /></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="bestseller-active owl-carousel">
                        <div class="bestseller-total">

                            <div class="single-bestseller mb-25">
                                <div class="bestseller-img">
                                    <a href="{{ route('detailProduct', $product_2->id) }}"><img
                                            src="{{ Storage::url($product_2->image) }}" alt="book" /></a>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                            <li><span class="discount-percentage">-5%</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bestseller-text text-center">
                                    <h3> <a
                                            href="{{ route('detailProduct', $product_2->id) }}">{{ $product_2->ten_san_pham }}</a>
                                    </h3>
                                    <div class="price">
                                        <ul>
                                            <li><span
                                                    class="new-price">{{ number_format($product_2->gia_khuyen_mai, 0, ',', '.') }}
                                                    đ</span></li>
                                            <li><span
                                                    class="old-price">{{ number_format($product_2->gia_san_pham, 0, ',', '.') }}
                                                    đ</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-bestseller">
                                <div class="bestseller-img">
                                    <a href="{{ route('detailProduct', $product_1->id) }}"><img
                                            src="{{ Storage::url($product_1->image) }}" alt="book" /></a>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bestseller-text text-center">
                                    <h3> <a
                                            href="{{ route('detailProduct', $product_1->id) }}">{{ $product_1->ten_san_pham }}</a>
                                    </h3>
                                    <div class="price">
                                        <ul>
                                            <li><span
                                                    class="new-price">{{ number_format($product_1->gia_khuyen_mai, 0, ',', '.') }}
                                                    đ</span></li>
                                            <li><span
                                                    class="old-price">{{ number_format($product_1->gia_san_pham, 0, ',', '.') }}
                                                    đ</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bestseller-total">
                            <div class="single-bestseller mb-25">
                                <div class="bestseller-img">
                                    <a href="{{ route('detailProduct', $product_3->id) }}"><img
                                            src="{{ Storage::url($product_3->image) }}" alt="book" /></a>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bestseller-text text-center">
                                    <h3> <a
                                            href="{{ route('detailProduct', $product_3->id) }}">{{ $product_3->ten_san_pham }}</a>
                                    </h3>
                                    <div class="price">
                                        <ul>
                                            <li><span
                                                    class="new-price">{{ number_format($product_3->gia_khuyen_mai, 0, ',', '.') }}
                                                    đ</span></li>
                                            <li><span
                                                    class="old-price">{{ number_format($product_3->gia_san_pham, 0, ',', '.') }}
                                                    đ</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-bestseller">
                                <div class="bestseller-img">
                                    <a href="{{ route('detailProduct', $product_4->id) }}"><img
                                            src="{{ Storage::url($product_4->image) }}" alt="book" /></a>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                            <li><span class="discount-percentage">-5%</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bestseller-text text-center">
                                    <h3> <a
                                            href="{{ route('detailProduct', $product_4->id) }}">{{ $product_4->ten_san_pham }}</a>
                                    </h3>
                                    <div class="price">
                                        <ul>
                                            <li><span
                                                    class="new-price">{{ number_format($product_4->gia_khuyen_mai, 0, ',', '.') }}
                                                    đ</span></li>
                                            <li><span
                                                    class="old-price">{{ number_format($product_4->gia_san_pham, 0, ',', '.') }}
                                                    đ</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="bestseller-total">
                            <div class="single-bestseller mb-25">
                                <div class="bestseller-img">
                                    <a href="#"><img src="/client/img/product/17.jpg" alt="book" /></a>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bestseller-text text-center">
                                    <h3> <a href="#">Fusion Backpack</a></h3>
                                    <div class="price">
                                        <ul>
                                            <li><span class="new-price">$59.00</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-bestseller">
                                <div class="bestseller-img">
                                    <a href="#"><img src="/client/img/product/14.jpg" alt="book" /></a>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bestseller-text text-center">
                                    <h3> <a href="#">Impulse Duffle</a></h3>
                                    <div class="price">
                                        <ul>
                                            <li><span class="new-price">$70.00</span></li>
                                            <li><span class="old-price">$74.00</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bestseller-area-end -->
    <!-- new-book-area-start -->
    <div class="new-book-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title bt text-center pt-100 mb-30 section-title-res">
                        <h2>Featured Books</h2>
                    </div>
                </div>
            </div>
            <div class="tab-active owl-carousel">
                @foreach ($allProducts as $item)
                    <div class="tab-total">
                        <!-- single-product-start -->
                        <div class="product-wrapper ">
                            <div class="product-img">
                                <a href="{{ route('detailProduct', $item->id) }}">
                                    <img src="{{ Storage::url($item->image) }}" alt="book" class="primary" />
                                </a>
                                <div class="product-flag">
                                    <ul>
                                        <li><span class="sale">new</span> </li>
                                        <li><span class="discount-percentage">-5%</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details text-center">
                                <div class="product-rating">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h4><a href="{{ route('detailProduct', $item->id) }}">{{ $item->ten_san_pham }}</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>{{ number_format($item->gia_khuyen_mai, 0, ',', '.') }} đ</li>
                                        <li class="old-price">{{ number_format($item->gia_san_pham, 0, ',', '.') }} đ</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-link">
                                <div class="product-button">
                                    <form action="{{ route('addCart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" id="quantity" name="quantity" value="1">
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <input type="hidden" name="ten_san_pham" value="{{ $item->ten_san_pham }}">
                                        <input type="hidden" name="price" value="{{ $item->gia_khuyen_mai }}">
                                        <input type="hidden" name="image" value="{{ $item->image }}">
                                        <button type="submit" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add
                                            tocart</button>
                                    </form>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li><a href="{{ route('detailProduct', $item->id) }}" title="Details"><i
                                                    class="fa fa-external-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-end -->
                        <!-- single-product-start -->
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="{{ route('detailProduct', $item->id) }}">
                                    <img src="{{ Storage::url($item->image) }}" alt="book" class="primary" />
                                </a>

                                <div class="product-flag">
                                    <ul>
                                        <li><span class="sale">new</span> <br></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details text-center">
                                <div class="product-rating">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h4><a href="{{ route('detailProduct', $item->id) }}">{{ $item->ten_san_pham }}</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>{{ number_format($item->gia_khuyen_mai, 0, ',', '.') }} đ</li>
                                        <li class="old-price">{{ number_format($item->gia_san_pham, 0, ',', '.') }} đ</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-link">
                                <div class="product-button">
                                    <form action="{{ route('addCart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" id="quantity" name="quantity" value="1">
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <input type="hidden" name="ten_san_pham" value="{{ $item->ten_san_pham }}">
                                        <input type="hidden" name="price" value="{{ $item->gia_khuyen_mai }}">
                                        <input type="hidden" name="image" value="{{ $item->image }}">
                                        <button type="submit" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add
                                            tocart</button>
                                    </form>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li><a href="{{ route('detailProduct', $item->id) }}" title="Details"><i
                                                    class="fa fa-external-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-end -->
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- new-book-area-start -->
    <!-- banner-static-area-start -->
    <div class="banner-static-area bg ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="banner-shadow-hover xs-mb">
                        <a href="#"><img src="/client/img/banner/8.jpg" alt="banner" /></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="banner-shadow-hover">
                        <a href="#"><img src="/client/img/banner/9.jpg" alt="banner" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-static-area-end -->
    <!-- most-product-area-start -->
    
    <!-- most-product-area-end -->
    <!-- testimonial-area-start -->
    <div class="testimonial-area ptb-100 bg">
        <div class="container">
            <div class="row">
                <div class="testimonial-active owl-carousel">
                    <div class="col-lg-12">
                        <div class="single-testimonial text-center">
                            <div class="testimonial-img">
                                <a href="#"><i class="fa fa-quote-right"></i></a>
                            </div>
                            <div class="testimonial-text">
                                <p>I'm so happy with all of the themes, great support, could not wish for more. These
                                    people are <br /> geniuses ! Kudo's from the Netherlands !</p>
                                <a href="#">Sandy Wilcke/user</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-testimonial text-center">
                            <div class="testimonial-img">
                                <a href="#"><i class="fa fa-quote-right"></i></a>
                            </div>
                            <div class="testimonial-text">
                                <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent
                                    support ,<br /> advice theme installation package , sorry for English, are Italian
                                    but I had no problem !! Thank you !</p>
                                <a href="#">Sandy Wilcke/user</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial-area-end -->
    <!-- recent-post-area-start -->
    <div class="recent-post-area pt-95 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-30 section-title-res">
                        <h2>Latest from our blog</h2>
                    </div>
                </div>
                <div class="post-active owl-carousel text-center">
                    <div class="col-lg-12">
                        <div class="single-post">
                            <div class="post-img">
                                <a href="#"><img src="/client/img/post/1.jpg" alt="post" /></a>
                                <div class="blog-date-time">
                                    <span class="day-time">06</span>
                                    <span class="moth-time">Dec</span>
                                </div>
                            </div>
                            <div class="post-content">
                                <h3><a href="#">Nam tincidunt vulputate felis</a></h3>
                                <span class="meta-author"> Demo koparion </span>
                                <p>Discover five of our favourite dresses from our new collection that are destined to
                                    be worn and loved immediately.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-post">
                            <div class="post-img">
                                <a href="blog-details.html"><img src="/client/img/post/2.jpg" alt="post" /></a>
                                <div class="blog-date-time">
                                    <span class="day-time">06</span>
                                    <span class="moth-time">Dec</span>
                                </div>
                            </div>
                            <div class="post-content">
                                <h3><a href="blog-details.html">Interdum et malesuada</a></h3>
                                <span class="meta-author"> Demo koparion </span>
                                <p>Discover five of our favourite dresses from our new collection that are destined to
                                    be worn and loved immediately.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-post">
                            <div class="post-img">
                                <a href="blog-details.html"><img src="/client/img/post/3.jpg" alt="post" /></a>
                                <div class="blog-date-time">
                                    <span class="day-time">07</span>
                                    <span class="moth-time">Dec</span>
                                </div>
                            </div>
                            <div class="post-content">
                                <h3><a href="blog-details.html">What is Bootstrap?</a></h3>
                                <span class="meta-author"> Demo koparion </span>
                                <p>Discover five of our favourite dresses from our new collection that are destined to
                                    be worn and loved immediately.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-post">
                            <div class="post-img">
                                <a href="blog-details.html"><img src="/client/img/post/4.jpg" alt="post" /></a>
                                <div class="blog-date-time">
                                    <span class="day-time">08</span>
                                    <span class="moth-time">Dec</span>
                                </div>
                            </div>
                            <div class="post-content">
                                <h3><a href="blog-details.html">Etiam eros massa</a></h3>
                                <span class="meta-author"> Demo koparion </span>
                                <p>Discover five of our favourite dresses from our new collection that are destined to
                                    be worn and loved immediately.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- recent-post-area-end -->

    <!-- social-group-area-start -->
    <div class="social-group-area ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title-3">
                        <h3>Latest Tweets</h3>
                    </div>
                    <div class="twitter-content">
                        <div class="twitter-icon">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                        <div class="twitter-text">
                            <p>
                                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                                Mirum notare quam
                            </p>
                            <a href="#">koparion</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title-3">
                        <h3>Stay Connected</h3>
                    </div>
                    <div class="link-follow">
                        <ul>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
