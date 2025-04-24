<header class="header-area transparent">
        <div class="container">
            <div class="row no-gutter align-items-center position-relative">
                <div class="col-12">
                    <div class="header-align">
                        <div class="header-align-start">
                            <div class="header-logo-area">
                                <a href="{{ route('home') }}">
                                    <img class="logo-main" src="{{ asset('web/assets/img/logo-light.webp') }}" width="158"
                                        height="36" alt="Logo" />
                                </a>
                            </div>
                        </div>
                        <div class="header-align-center">
                            <div class="header-navigation-area position-relative">
                                <ul class="main-menu nav">
                                    <li class="has-submenu"><a href="{{ route('home')}}"><span>Home</span></a>
                                    </li>
                                    <li><a href="{{ route('about') }}"><span>About</span></a></li>
                                    <li class="has-submenu position-static"><a
                                            href="{{ route('shop') }}"><span>Shop</span></a>
                                    </li>
                                    <li class="has-submenu"><a href="{{ route('blog') }}"><span>Blog</span></a>
                                    </li>
                                    <li class="has-submenu"><a href="{{ route('adopt') }}"><span>ADOPTION</span></a>
                                    </li>
                                    <li><a href="#"><span>Contact</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-align-end">
                            <div class="header-action-area">
                                <div class="shopping-search">
                                    <button class="shopping-search-btn" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch"><i
                                            class="pe-7s-search icon"></i></button>
                                </div>
                                <div class="shopping-account">
                                    <a class="shopping-account-btn" href="{{ route ('user-login') }}">
                                        <i class="pe-7s-users icon"></i>
                                    </a>
                                </div>
                                <div class="shopping-wishlist">
                                    <a class="shopping-wishlist-btn" href="#">
                                        <i class="pe-7s-like icon"></i>
                                    </a>
                                </div>
                                <div class="shopping-cart">
                                    <button class="shopping-cart-btn" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#AsideOffcanvasCart" aria-controls="AsideOffcanvasCart">
                                        <i class="pe-7s-shopbag icon"></i>
                                        <sup class="shop-count">2</sup>
                                    </button>
                                </div>
                                <button class="btn-menu" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                                    <i class="pe-7s-menu"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--== Start Aside Cart ==-->
<aside class="aside-cart-wrapper offcanvas offcanvas-end" tabindex="-1" id="AsideOffcanvasCart"
    aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h1 class="d-none" id="offcanvasRightLabel">Shopping Cart</h1>
        <button class="btn-aside-cart-close" data-bs-dismiss="offcanvas" aria-label="Close">Shopping Cart <i
                class="fa fa-chevron-right"></i></button>
    </div>
    <div class="offcanvas-body">
        <ul class="aside-cart-product-list">
            <li class="aside-product-list-item">
                <a href="#/" class="remove">×</a>
                <a href="single-product.html">
                    <img src="{{ asset('web/assets/img/shop/product-mini/1.webp')}}" width="90" height="110" alt="Image-HasTech">
                    <span class="product-title">Leather Mens Slipper</span>
                </a>
                <span class="product-price">1 × £69.99</span>
            </li>
            <li class="aside-product-list-item">
                <a href="#/" class="remove">×</a>
                <a href="single-product.html">
                    <img src="{{ asset('web/assets/img/shop/product-mini/2.webp')}}" width="90" height="110" alt="Image-HasTech">
                    <span class="product-title">Quickiin Mens shoes</span>
                </a>
                <span class="product-price">1 × £20.00</span>
            </li>
        </ul>
        <p class="cart-total"><span>Subtotal:</span><span class="amount">£89.99</span></p>
        <a class="btn-total" href="{{ route('cart') }}">View cart</a>
        <a class="btn-total" href="{{ route('checkout') }}">">Checkout</a>
        <a class="d-block text-end lh-1" href="{{ route('checkout') }}"><img src="{{ asset('web/assets/img/photos/paypal.webp')}}" width="133"
                height="26" alt="Has-image"></a>
    </div>
</aside>
<!--== End Aside Cart ==-->