        <!-- header-top-area-start -->
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="language-area">
                            <ul>
                                <li><img src="/client/img/flag/1.jpg" alt="flag" /><a href="#">English<i
                                            class="fa fa-angle-down"></i></a>
                                    <div class="header-sub">
                                        <ul>
                                            <li><a href="#"><img src="/client/img/flag/2.jpg"
                                                        alt="flag" />france</a></li>
                                            <li><a href="#"><img src="/client/img/flag/3.jpg"
                                                        alt="flag" />croatia</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#">USD $<i class="fa fa-angle-down"></i></a>
                                    <div class="header-sub dolor">
                                        <ul>
                                            <li><a href="#">EUR €</a></li>
                                            <li><a href="#">USD $</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="account-area text-end">
                            <ul>
                                <li><a href="{{route('my-account')}}">My Account</a></li>
                                <li><a href="{{route('checkout')}}">Checkout</a></li>
                                <li><a href="{{ route('login') }}">Sign in</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top-area-end -->
        <!-- header-mid-area-start -->
        <div class="header-mid-area ptb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-12">
                        <div class="header-search">
                            <form action="#">
                                <input type="text" placeholder="Search entire store here..." />
                                <a href="#"><i class="fa fa-search"></i></a>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-12">
                        <div class="logo-area text-center logo-xs-mrg">
                            <a href="{{ route('index') }}"><img src="/client/img/logo/logo.png" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="my-cart">
                            <ul>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i>My Cart</a>
                                    <span>2</span>
                                    <div class="mini-cart-sub">
                                        <div class="cart-product">
                                            <div class="single-cart">
                                                <div class="cart-img">
                                                    <a href="#"><img src="/client/img/product/1.jpg"
                                                            alt="book" /></a>
                                                </div>
                                                <div class="cart-info">
                                                    <h5><a href="#">Joust Duffle Bag</a></h5>
                                                    <p>1 x £60.00</p>
                                                </div>
                                                <div class="cart-icon">
                                                    <a href="#"><i class="fa fa-remove"></i></a>
                                                </div>
                                            </div>
                                            <div class="single-cart">
                                                <div class="cart-img">
                                                    <a href="#"><img src="/client/img/product/3.jpg"
                                                            alt="book" /></a>
                                                </div>
                                                <div class="cart-info">
                                                    <h5><a href="#">Chaz Kangeroo Hoodie</a></h5>
                                                    <p>1 x £52.00</p>
                                                </div>
                                                <div class="cart-icon">
                                                    <a href="#"><i class="fa fa-remove"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-totals">
                                            <h5>Total <span>£12.00</span></h5>
                                        </div>
                                        <div class="cart-bottom">
                                            <a class="view-cart" href="{{route('cart')}}">view cart</a>
                                            <a href="{{route('checkout')}}">Check out</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-mid-area-end -->
        <!-- main-menu-area-start -->
        <div class="main-menu-area d-md-none d-none d-lg-block sticky-header-1" id="header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-area">
                            <nav>
                                <ul>
                                    <li class="active"><a href="{{ route('index') }}">Home<i class="fa fa-angle-down"></i></a>
                                    </li>
                                    <li><a href="{{route('product-detail')}}">Book<i class="fa fa-angle-down"></i></a>
                                        <div class="mega-menu">
                                            <span>
                                                <a href="#" class="title">Jackets</a>
                                                <a href="{{ route('shop') }}">Tops & Tees</a>
                                                <a href="{{ route('shop') }}">Polo Short Sleeve</a>
                                                <a href="{{ route('shop') }}">Graphic T-Shirts</a>
                                                <a href="{{ route('shop') }}">Jackets & Coats</a>
                                                <a href="{{ route('shop') }}">Fashion Jackets</a>
                                            </span>
                                            <span>
                                                <a href="#" class="title">weaters</a>
                                                <a href="{{ route('shop') }}">Crochet</a>
                                                <a href="{{ route('shop') }}">Sleeveless</a>
                                                <a href="{{ route('shop') }}">Stripes</a>
                                                <a href="{{ route('shop') }}">Sweaters</a>
                                                <a href="{{ route('shop') }}">hoodies</a>
                                            </span>
                                            <span>
                                                <a href="#" class="title">Bottoms</a>
                                                <a href="{{ route('shop') }}">Heeled sandals</a>
                                                <a href="{{ route('shop') }}">Polo Short Sleeve</a>
                                                <a href="{{ route('shop') }}">Flat sandals</a>
                                                <a href="{{ route('shop') }}">Short Sleeve</a>
                                                <a href="{{ route('shop') }}">Long Sleeve</a>
                                            </span>
                                            <span>
                                                <a href="#" class="title">Jeans Pants</a>
                                                <a href="{{ route('shop') }}">Polo Short Sleeve</a>
                                                <a href="{{ route('shop') }}">Sleeveless</a>
                                                <a href="{{ route('shop') }}">Graphic T-Shirts</a>
                                                <a href="{{ route('shop') }}">Hoodies</a>
                                                <a href="{{ route('shop') }}">Jackets</a>
                                            </span>
                                        </div>
                                    </li>
                                    <li><a href="{{route('product-detail')}}">Audio books<i class="fa fa-angle-down"></i></a>
                                        <div class="mega-menu">
                                            <span>
                                                <a href="#" class="title">Shirts</a>
                                                <a href="{{ route('shop') }}">Tops & Tees</a>
                                                <a href="{{ route('shop') }}">Sweaters </a>
                                                <a href="{{ route('shop') }}">Hoodies</a>
                                                <a href="{{ route('shop') }}">Jackets & Coats</a>
                                            </span>
                                            <span>
                                                <a href="#" class="title">Tops & Tees</a>
                                                <a href="{{ route('shop') }}">Long Sleeve </a>
                                                <a href="{{ route('shop') }}">Short Sleeve</a>
                                                <a href="{{ route('shop') }}">Polo Short Sleeve</a>
                                                <a href="{{ route('shop') }}">Sleeveless</a>
                                            </span>
                                            <span>
                                                <a href="#" class="title">Jackets</a>
                                                <a href="{{ route('shop') }}">Sweaters</a>
                                                <a href="{{ route('shop') }}">Hoodies</a>
                                                <a href="{{ route('shop') }}">Wedges</a>
                                                <a href="{{ route('shop') }}">Vests</a>
                                            </span>
                                            <span>
                                                <a href="#" class="title">Jeans Pants</a>
                                                <a href="{{ route('shop') }}">Polo Short Sleeve</a>
                                                <a href="{{ route('shop') }}">Sleeveless</a>
                                                <a href="{{ route('shop') }}">Graphic T-Shirts</a>
                                                <a href="{{ route('shop') }}">Hoodies</a>
                                            </span>
                                        </div>
                                    </li>
                                    <li><a href="{{route('product-detail')}}">children’s books<i
                                                class="fa fa-angle-down"></i></a>
                                        <div class="mega-menu mega-menu-2">
                                            <span>
                                                <a href="#" class="title">Tops</a>
                                                <a href="{{ route('shop') }}">Shirts</a>
                                                <a href="{{ route('shop') }}">Florals</a>
                                                <a href="{{ route('shop') }}">Crochet</a>
                                                <a href="{{ route('shop') }}">Stripes</a>
                                            </span>
                                            <span>
                                                <a href="#" class="title">Bottoms</a>
                                                <a href="{{ route('shop') }}">Shorts</a>
                                                <a href="{{ route('shop') }}">Dresses</a>
                                                <a href="{{ route('shop') }}">Trousers</a>
                                                <a href="{{ route('shop') }}">Jeans</a>
                                            </span>
                                            <span>
                                                <a href="#" class="title">Shoes</a>
                                                <a href="{{ route('shop') }}">Heeled sandals</a>
                                                <a href="{{ route('shop') }}">Flat sandals</a>
                                                <a href="{{ route('shop') }}">Wedges</a>
                                                <a href="{{ route('shop') }}">Ankle boots</a>
                                            </span>
                                        </div>
                                    </li>
                                    <li><a href="#">blog<i class="fa fa-angle-down"></i></a>
                                        <div class="sub-menu sub-menu-2">
                                            <ul>
                                                <li><a href="{{route('blog')}}">blog</a></li>
                                                <li><a href="{{route('blog-detail')}}">blog-details</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#">pages<i class="fa fa-angle-down"></i></a>
                                        <div class="sub-menu sub-menu-2">
                                            <ul>
                                                <li><a href="{{ route('shop') }}">shop</a></li>
                                                <li><a href="{{route('shop-list')}}">shop list view</a></li>
                                                <li><a href="{{route('product-detail')}}">product-details</a></li>
                                                <li><a href="{{route('product-detail-affiliate')}}">product-affiliate</a></li>
                                                <li><a href="{{route('blog')}}">blog</a></li>
                                                <li><a href="{{route('blog-detail')}}">blog-details</a></li>
                                                <li><a href="{{route('contact')}}">contact</a></li>
                                                <li><a href="{{route('about')}}">about</a></li>
                                                <li><a href="{{ route('login') }}">Login</a></li>
                                                <li><a href="{{route('register')}}">register</a></li>
                                                <li><a href="{{route('my-account')}}">my-account</a></li>
                                                <li><a href="{{route('cart')}}">cart</a></li>
                                                <li><a href="{{route('compare')}}">compare</a></li>
                                                <li><a href="{{route('checkout')}}">checkout</a></li>
                                                <li><a href="{{route('wishlist')}}">wishlist</a></li>
                                                <li><a href="{{route('404')}}">404 Page</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="safe-area">
                            <a href="{{route('product-detail')}}">sales off</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-menu-area-end -->
        <!-- mobile-menu-area-start -->
        <div class="mobile-menu-area d-lg-none d-block fix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mobile-menu">
                            <nav id="mobile-menu-active">
                                <ul id="nav">
                                    <li><a href="{{ route('index') }}">Home</a>
                                    </li>
                                    <li><a href="{{route('product-detail')}}">Book</a>
                                        <ul>
                                            <li><a href="{{ route('shop') }}">Tops & Tees</a></li>
                                            <li><a href="{{ route('shop') }}">Polo Short Sleeve</a></li>
                                            <li><a href="{{ route('shop') }}">Graphic T-Shirts</a></li>
                                            <li><a href="{{ route('shop') }}">Jackets & Coats</a></li>
                                            <li><a href="{{ route('shop') }}">Fashion Jackets</a></li>
                                            <li><a href="{{ route('shop') }}">Crochet</a></li>
                                            <li><a href="{{ route('shop') }}">Sleeveless</a></li>
                                            <li><a href="{{ route('shop') }}">Stripes</a></li>
                                            <li><a href="{{ route('shop') }}">Sweaters</a></li>
                                            <li><a href="{{ route('shop') }}">hoodies</a></li>
                                            <li><a href="{{ route('shop') }}">Heeled sandals</a></li>
                                            <li><a href="{{ route('shop') }}">Polo Short Sleeve</a></li>
                                            <li><a href="{{ route('shop') }}">Flat sandals</a></li>
                                            <li><a href="{{ route('shop') }}">Short Sleeve</a></li>
                                            <li><a href="{{ route('shop') }}">Long Sleeve</a></li>
                                            <li><a href="{{ route('shop') }}">Polo Short Sleeve</a></li>
                                            <li><a href="{{ route('shop') }}">Sleeveless</a></li>
                                            <li><a href="{{ route('shop') }}">Graphic T-Shirts</a></li>
                                            <li><a href="{{ route('shop') }}">Hoodies</a></li>
                                            <li><a href="{{ route('shop') }}">Jackets</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('product-detail')}}">Audio books</a>
                                        <ul>
                                            <li><a href="{{ route('shop') }}">Tops & Tees</a></li>
                                            <li><a href="{{ route('shop') }}">Sweaters</a></li>
                                            <li><a href="{{ route('shop') }}">Hoodies</a></li>
                                            <li><a href="{{ route('shop') }}">Jackets & Coats</a></li>
                                            <li><a href="{{ route('shop') }}">Long Sleeve</a></li>
                                            <li><a href="{{ route('shop') }}">Short Sleeve</a></li>
                                            <li><a href="{{ route('shop') }}">Polo Short Sleeve</a></li>
                                            <li><a href="{{ route('shop') }}">Sleeveless</a></li>
                                            <li><a href="{{ route('shop') }}">Sweaters</a></li>
                                            <li><a href="{{ route('shop') }}">Hoodies</a></li>
                                            <li><a href="{{ route('shop') }}">Wedges</a></li>
                                            <li><a href="{{ route('shop') }}">Vests</a></li>
                                            <li><a href="{{ route('shop') }}">Polo Short Sleeve</a></li>
                                            <li><a href="{{ route('shop') }}">Sleeveless</a></li>
                                            <li><a href="{{ route('shop') }}">Graphic T-Shirts</a></li>
                                            <li><a href="{{ route('shop') }}">Hoodies</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('product-detail')}}">children’s books</a>
                                        <ul>
                                            <li><a href="{{ route('shop') }}">Shirts</a></li>
                                            <li><a href="{{ route('shop') }}">Florals</a></li>
                                            <li><a href="{{ route('shop') }}">Crochet</a></li>
                                            <li><a href="{{ route('shop') }}">Stripes</a></li>
                                            <li><a href="{{ route('shop') }}">Shorts</a></li>
                                            <li><a href="{{ route('shop') }}">Dresses</a></li>
                                            <li><a href="{{ route('shop') }}">Trousers</a></li>
                                            <li><a href="{{ route('shop') }}">Jeans</a></li>
                                            <li><a href="{{ route('shop') }}">Heeled sandals</a></li>
                                            <li><a href="{{ route('shop') }}">Flat sandals</a></li>
                                            <li><a href="{{ route('shop') }}">Wedges</a></li>
                                            <li><a href="{{ route('shop') }}">Ankle boots</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">blog</a>
                                        <ul>
                                            <li><a href="{{route('blog')}}">Blog</a></li>
                                            <li><a href="{{route('blog-detail')}}">blog-details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('product-detail')}}">Page</a>
                                        <ul>
                                            <li><a href="{{ route('shop') }}">shop</a></li>
                                            <li><a href="{{route('shop-list')}}">shop list view</a></li>
                                            <li><a href="{{route('product-detail')}}">product-details</a></li>
                                            <li><a href="{{route('product-detail-affiliate')}}">product-affiliate</a></li>
                                            <li><a href="{{route('blog')}}">blog</a></li>
                                            <li><a href="{{route('blog-detail')}}">blog-details</a></li>
                                            <li><a href="{{route('contact')}}">contact</a></li>
                                            <li><a href="{{route('about')}}">about</a></li>
                                            <li><a href="{{ route('login') }}">login</a></li>
                                            <li><a href="{{route('register')}}}">register</a></li>
                                            <li><a href="{{route('my-account')}}">my-account</a></li>
                                            <li><a href="{{route('cart')}}">cart</a></li>
                                            <li><a href="{{route('compare')}}">compare</a></li>
                                            <li><a href="{{route('checkout')}}">checkout</a></li>
                                            <li><a href="{{route('wishlist')}}">wishlist</a></li>
                                            <li><a href="{{route('404')}}">404 Page</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile-menu-area-end -->
