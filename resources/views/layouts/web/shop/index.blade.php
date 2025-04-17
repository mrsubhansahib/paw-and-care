@extends('layouts.web.app')
@section('content')
    <header class="header-area" data-bg-img="{{ asset('web/assets/img/photos/header-bg.webp') }}">
        <div class="container">
            <div class="row no-gutter align-items-center position-relative">
                <div class="col-12">
                    <div class="header-align">
                        <div class="header-align-start">
                            <div class="header-logo-area">
                                <a href="#">
                                    <img class="logo-main" src="{{ asset('web/assets/img/logo-light.webp') }}" width="158"
                                        height="36" alt="Logo" />
                                </a>
                            </div>
                        </div>
                        <div class="header-align-center">
                            <div class="header-navigation-area position-relative">
                                <ul class="main-menu nav">
                                    <li class="has-submenu"><a href="{{ route('home')}}"><span>Home</span></a>
                                        <!-- <ul class="submenu-nav">
                              <li><a href="index.html"><span>Home One</span></a></li>
                              <li><a href="index-two.html"><span>Home Two</span></a></li>
                            </ul> -->
                                    </li>
                                    <li><a href="{{ route('about') }}"><span>About</span></a></li>
                                    <li class="has-submenu position-static"><a
                                            href="{{ route('shop') }}"><span>Shop</span></a>
                                        <!-- <ul class="submenu-nav submenu-nav-mega column-3">
                              <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Shop Layout</span></a>
                                <ul>
                                  <li><a href="shop-three-columns.html"><span>Shop 3 Column</span></a></li>
                                  <li><a href="shop-four-columns.html"><span>Shop 4 Column</span></a></li>
                                  <li><a href="shop-left-sidebar.html"><span>Shop Left Sidebar</span></a></li>
                                  <li><a href="shop.html"><span>Shop Right Sidebar</span></a></li>
                                </ul>
                              </li>
                              <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Single Product</span></a>
                                <ul>
                                  <li><a href="single-normal-product.html"><span>Single Product Normal</span></a></li>
                                  <li><a href="single-product.html"><span>Single Product Variable</span></a></li>
                                  <li><a href="single-group-product.html"><span>Single Product Group</span></a></li>
                                  <li><a href="single-affiliate-product.html"><span>Single Product Affiliate</span></a></li>
                                </ul>
                              </li>
                              <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Others Pages</span></a>
                                <ul>
                                  <li><a href="shop-cart.html"><span>Shopping Cart</span></a></li>
                                  <li><a href="shop-checkout.html"><span>Checkout</span></a></li>
                                  <li><a href="shop-wishlist.html"><span>Wishlist</span></a></li>
                                  <li><a href="shop-compare.html"><span>Compare</span></a></li>
                                </ul>
                              </li>
                            </ul> -->
                                    </li>
                                    <li class="has-submenu"><a href="{{ route('blog') }}"><span>Blog</span></a>
                                        <!-- <ul class="submenu-nav submenu-nav-mega">
                              <li class="mega-menu-item"><a href="#/" class="mega-title">Blog Layout</a>
                                <ul>
                                  <li><a href="blog-grid.html">Blog Grid</a></li>
                                  <li><a href="blog.html">Blog Left Sidebar</a></li>
                                  <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                </ul>
                              </li>
                              <li class="mega-menu-item"><a href="#/" class="mega-title">Single Blog</a>
                                <ul>
                                  <li><a href="blog-details-no-sidebar.html">Blog Details</a></li>
                                  <li><a href="blog-details.html">Blog Details Left Sidebar</a></li>
                                  <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                                </ul>
                              </li>
                            </ul> -->
                                    </li>
                                    <li class="has-submenu"><a href="{{ route('adopt') }}"><span>ADOPTION</span></a>
                                        <!-- <ul class="submenu-nav">
                              <li><a href="account.html"><span>Account</span></a></li>
                              <li><a href="account-login.html"><span>Login</span></a></li>
                              <li><a href="account-register.html"><span>Register</span></a></li>
                              <li><a href="page-not-found.html"><span>Page Not Found</span></a></li>
                            </ul> -->
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
                                    <a class="shopping-account-btn" href="#">
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
    <main class="main-content">
        <!--== Start Page Header Area Wrapper ==-->
        <div class="page-header-area" data-bg-img="{{ asset('web/assets/img/photos/bg1.webp') }}">
            <div class="container pt--0 pb--0">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content">
                            <h2 class="title">Products</h2>
                            <nav class="breadcrumb-area">
                                <ul class="breadcrumb">
                                    <li><a href="{{ asset('#') }}">Home</a></li>
                                    <li class="breadcrumb-sep">//</li>
                                    <li>Products</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Page Header Area Wrapper ==-->

        <!--== Start Product Area Wrapper ==-->
        <section class="product-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="shop-top-bar">
                            <div class="shop-top-left">
                                <p class="pagination-line"><a href="{{ asset('#') }}">12</a> Product Found of <a
                                        href="{{ asset('#') }}">30</a></p>
                            </div>
                            <div class="shop-top-center">
                                <nav class="product-nav">
                                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid"
                                            aria-selected="true"><i class="fa fa-th"></i></button>
                                        <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list"
                                            aria-selected="false"><i class="fa fa-list"></i></button>
                                        <button class="nav-link" id="nav-grid2-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-grid2" type="button" role="tab" aria-controls="nav-grid2"
                                            aria-selected="false"><i class="fa fa-th-large"></i></button>
                                    </div>
                                </nav>
                            </div>
                            <div class="shop-top-right">
                                <div class="shop-sort">
                                    <span>Sort By :</span>
                                    <select class="form-select" aria-label="Sort select example">
                                        <option selected>Default</option>
                                        <option value="1">Popularity</option>
                                        <option value="2">Average Rating</option>
                                        <option value="3">Newsness</option>
                                        <option value="4">Price Low to High</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row flex-md-row-reverse justify-content-between">
                    <div class="col-xl-9">
                        <div class="row">
                            <div class="col-12">
                                <div class="banner-product-single-style2-item">
                                    <div class="thumb">
                                        <a href="{{ asset('#') }}">
                                            <img src="{{ asset('web/assets/img/shop/banner/3')}}.webp" width="870"
                                                height="247" alt="Image-HasTech">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="sub-title">-25% Off </h5>
                                        <h5 class="title">Pet Food, Medicin & Shop With Us</h5>
                                        <a class="btn-theme-link" href="{{ asset('#') }}">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-grid" role="tabpanel"
                                        aria-labelledby="nav-grid-tab">
                                        <div class="row">
                                            <div class="col-sm-6 col-xl-4">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/2.webp')}}" width="270"
                                                                height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Endeavor
                                                                Daytripa</a></h4>
                                                        <div class="prices">
                                                            <span class="price">$33.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/3.webp')}}" width="270"
                                                                height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Impulse Duffle</a>
                                                        </h4>
                                                        <div class="prices">
                                                            <span class="price">$65.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/4.webp')}}" width="270"
                                                                height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Driven Backpack</a>
                                                        </h4>
                                                        <div class="prices">
                                                            <span class="price">$25.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/6.webp')}}" width="270"
                                                                height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Savvy Shoulder
                                                                Tote</a></h4>
                                                        <div class="prices">
                                                            <span class="price">$30.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/7.webp')}}" width="270"
                                                                height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Voyage Yoga Bag</a>
                                                        </h4>
                                                        <div class="prices">
                                                            <span class="price">$39.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/8.webp')}}" width="270"
                                                                height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Wayfarer Messenger
                                                                Bag</a></h4>
                                                        <div class="prices">
                                                            <span class="price">$50.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/3.webp')}}" width="270"
                                                                height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Impulse Duffle</a>
                                                        </h4>
                                                        <div class="prices">
                                                            <span class="price">$65.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/1.webp')}}" width="270"
                                                                height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Joust Duffle Bag</a>
                                                        </h4>
                                                        <div class="prices">
                                                            <span class="price">$20.19</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/5.webp')}}" width="270"
                                                                height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Fusion Backpack</a>
                                                        </h4>
                                                        <div class="prices">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/4.webp')}}" width="270"
                                                                height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Driven Backpack</a>
                                                        </h4>
                                                        <div class="prices">
                                                            <span class="price">$25.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/7.webp')}}" width="270"
                                                                height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Voyage Yoga Bag</a>
                                                        </h4>
                                                        <div class="prices">
                                                            <span class="price">$39.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/8.webp')}}" width="270"
                                                                height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Wayfarer Messenger
                                                                Bag</a></h4>
                                                        <div class="prices">
                                                            <span class="price">$50.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-12">
                                                <div class="pagination-items pagination-items-style1">
                                                    <ul class="pagination mb--0">
                                                        <li><a class="active" href="{{ asset('#') }}">1</a></li>
                                                        <li><a href="shop-four-columns.html">2</a></li>
                                                        <li><a href="shop-three-columns.html">3</a></li>
                                                        <li><a href="{{ asset('#') }}" class="icon"><i
                                                                    class="fa fa-angle-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
                                        <div class="row">
                                            <div class="col-12">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item product-list-item">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="product-thumb">
                                                                <a href="single-product.html">
                                                                    <img src="{{ asset('web/assets/img/shop/col2-1.webp')}}"
                                                                        width="420" height="320" alt="Image-HasTech">
                                                                </a>
                                                                <div class="product-action">
                                                                    <button type="button" class="btn-product-wishlist"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#action-WishlistModal">
                                                                        <i class="pe-7s-like"></i>
                                                                    </button>
                                                                    <div class="product-action-links">
                                                                        <button type="button" class="btn-product-quick-view"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#action-QuickViewModal">
                                                                            <i class="pe-7s-look"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="product-info">
                                                                <h4 class="title"><a href="single-product.html">Endeavor
                                                                        Daytripa</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$33.00</span>
                                                                </div>
                                                                <p class="desc">Lorem ipsum dolor sit amet consectetur,
                                                                    adipisicing elit. Voluptatem quo, rerum rem soluta
                                                                    quisquam, repellat is deleniti omnis culpa ea quis
                                                                    provident dolore esse, offici modi dolorem nam cum
                                                                    eligendi enim!</p>
                                                                <button type="button" class="btn-theme btn-sm"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#action-CartAddModal">
                                                                    Add To Cart
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-12">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item product-list-item">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="product-thumb">
                                                                <a href="single-product.html">
                                                                    <img src="{{ asset('web/assets/img/shop/col2-2.webp')}}"
                                                                        width="420" height="320" alt="Image-HasTech">
                                                                </a>
                                                                <div class="product-action">
                                                                    <button type="button" class="btn-product-wishlist"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#action-WishlistModal">
                                                                        <i class="pe-7s-like"></i>
                                                                    </button>
                                                                    <div class="product-action-links">
                                                                        <button type="button" class="btn-product-quick-view"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#action-QuickViewModal">
                                                                            <i class="pe-7s-look"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="product-info">
                                                                <h4 class="title"><a href="single-product.html">Impulse
                                                                        Duffle</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$65.00</span>
                                                                </div>
                                                                <p class="desc">Lorem ipsum dolor sit amet consectetur,
                                                                    adipisicing elit. Voluptatem quo, rerum rem soluta
                                                                    quisquam, repellat is deleniti omnis culpa ea quis
                                                                    provident dolore esse, offici modi dolorem nam cum
                                                                    eligendi enim!</p>
                                                                <button type="button" class="btn-theme btn-sm"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#action-CartAddModal">
                                                                    Add To Cart
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-12">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item product-list-item">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="product-thumb">
                                                                <a href="single-product.html">
                                                                    <img src="{{ asset('web/assets/img/shop/col2-3.webp')}}"
                                                                        width="420" height="320" alt="Image-HasTech">
                                                                </a>
                                                                <div class="product-action">
                                                                    <button type="button" class="btn-product-wishlist"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#action-WishlistModal">
                                                                        <i class="pe-7s-like"></i>
                                                                    </button>
                                                                    <div class="product-action-links">
                                                                        <button type="button" class="btn-product-quick-view"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#action-QuickViewModal">
                                                                            <i class="pe-7s-look"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="product-info">
                                                                <h4 class="title"><a href="single-product.html">Driven
                                                                        Backpack</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$25.00</span>
                                                                </div>
                                                                <p class="desc">Lorem ipsum dolor sit amet consectetur,
                                                                    adipisicing elit. Voluptatem quo, rerum rem soluta
                                                                    quisquam, repellat is deleniti omnis culpa ea quis
                                                                    provident dolore esse, offici modi dolorem nam cum
                                                                    eligendi enim!</p>
                                                                <button type="button" class="btn-theme btn-sm"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#action-CartAddModal">
                                                                    Add To Cart
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-12">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item product-list-item">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="product-thumb">
                                                                <a href="single-product.html">
                                                                    <img src="{{ asset('web/assets/img/shop/col2-4.webp')}}"
                                                                        width="420" height="320" alt="Image-HasTech">
                                                                </a>
                                                                <div class="product-action">
                                                                    <button type="button" class="btn-product-wishlist"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#action-WishlistModal">
                                                                        <i class="pe-7s-like"></i>
                                                                    </button>
                                                                    <div class="product-action-links">
                                                                        <button type="button" class="btn-product-quick-view"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#action-QuickViewModal">
                                                                            <i class="pe-7s-look"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="product-info">
                                                                <h4 class="title"><a href="single-product.html">Savvy
                                                                        Shoulder Tote</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$30.00</span>
                                                                </div>
                                                                <p class="desc">Lorem ipsum dolor sit amet consectetur,
                                                                    adipisicing elit. Voluptatem quo, rerum rem soluta
                                                                    quisquam, repellat is deleniti omnis culpa ea quis
                                                                    provident dolore esse, offici modi dolorem nam cum
                                                                    eligendi enim!</p>
                                                                <button type="button" class="btn-theme btn-sm"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#action-CartAddModal">
                                                                    Add To Cart
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-12">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item product-list-item">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="product-thumb">
                                                                <a href="single-product.html">
                                                                    <img src="{{ asset('web/assets/img/shop/col2-5.webp')}}"
                                                                        width="420" height="320" alt="Image-HasTech">
                                                                </a>
                                                                <div class="product-action">
                                                                    <button type="button" class="btn-product-wishlist"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#action-WishlistModal">
                                                                        <i class="pe-7s-like"></i>
                                                                    </button>
                                                                    <div class="product-action-links">
                                                                        <button type="button" class="btn-product-quick-view"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#action-QuickViewModal">
                                                                            <i class="pe-7s-look"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="product-info">
                                                                <h4 class="title"><a href="single-product.html">Voyage Yoga
                                                                        Bag</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$39.00</span>
                                                                </div>
                                                                <p class="desc">Lorem ipsum dolor sit amet consectetur,
                                                                    adipisicing elit. Voluptatem quo, rerum rem soluta
                                                                    quisquam, repellat is deleniti omnis culpa ea quis
                                                                    provident dolore esse, offici modi dolorem nam cum
                                                                    eligendi enim!</p>
                                                                <button type="button" class="btn-theme btn-sm"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#action-CartAddModal">
                                                                    Add To Cart
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-12">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item product-list-item">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="product-thumb">
                                                                <a href="single-product.html">
                                                                    <img src="{{ asset('web/assets/img/shop/col2-6.webp')}}"
                                                                        width="420" height="320" alt="Image-HasTech">
                                                                </a>
                                                                <div class="product-action">
                                                                    <button type="button" class="btn-product-wishlist"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#action-WishlistModal">
                                                                        <i class="pe-7s-like"></i>
                                                                    </button>
                                                                    <div class="product-action-links">
                                                                        <button type="button" class="btn-product-quick-view"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#action-QuickViewModal">
                                                                            <i class="pe-7s-look"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="product-info">
                                                                <h4 class="title"><a href="single-product.html">Wayfarer
                                                                        Messenger Bag</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$50.00</span>
                                                                </div>
                                                                <p class="desc">Lorem ipsum dolor sit amet consectetur,
                                                                    adipisicing elit. Voluptatem quo, rerum rem soluta
                                                                    quisquam, repellat is deleniti omnis culpa ea quis
                                                                    provident dolore esse, offici modi dolorem nam cum
                                                                    eligendi enim!</p>
                                                                <button type="button" class="btn-theme btn-sm"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#action-CartAddModal">
                                                                    Add To Cart
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-12">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item product-list-item">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="product-thumb">
                                                                <a href="single-product.html">
                                                                    <img src="{{ asset('web/assets/img/shop/col2-8.webp')}}"
                                                                        width="420" height="320" alt="Image-HasTech">
                                                                </a>
                                                                <div class="product-action">
                                                                    <button type="button" class="btn-product-wishlist"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#action-WishlistModal">
                                                                        <i class="pe-7s-like"></i>
                                                                    </button>
                                                                    <div class="product-action-links">
                                                                        <button type="button" class="btn-product-quick-view"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#action-QuickViewModal">
                                                                            <i class="pe-7s-look"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="product-info">
                                                                <h4 class="title"><a href="single-product.html">Impulse
                                                                        Duffle</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$65.00</span>
                                                                </div>
                                                                <p class="desc">Lorem ipsum dolor sit amet consectetur,
                                                                    adipisicing elit. Voluptatem quo, rerum rem soluta
                                                                    quisquam, repellat is deleniti omnis culpa ea quis
                                                                    provident dolore esse, offici modi dolorem nam cum
                                                                    eligendi enim!</p>
                                                                <button type="button" class="btn-theme btn-sm"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#action-CartAddModal">
                                                                    Add To Cart
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-12">
                                                <div class="pagination-items pagination-items-style1">
                                                    <ul class="pagination mb--0">
                                                        <li><a class="active" href="{{ asset('#') }}">1</a></li>
                                                        <li><a href="shop-four-columns.html">2</a></li>
                                                        <li><a href="shop-three-columns.html">3</a></li>
                                                        <li><a href="{{ asset('#') }}" class="icon"><i
                                                                    class="fa fa-angle-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-grid2" role="tabpanel"
                                        aria-labelledby="nav-grid2-tab">
                                        <div class="row">
                                            <div class="col-sm-6 col-xl-6">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/col2-1.webp')}}"
                                                                width="420" height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Endeavor
                                                                Daytripa</a></h4>
                                                        <div class="prices">
                                                            <span class="price">$33.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-xl-6">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/col2-2.webp')}}"
                                                                width="420" height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Impulse Duffle</a>
                                                        </h4>
                                                        <div class="prices">
                                                            <span class="price">$65.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-xl-6">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/col2-3.webp')}}"
                                                                width="420" height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Driven Backpack</a>
                                                        </h4>
                                                        <div class="prices">
                                                            <span class="price">$25.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-xl-6">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/col2-4.webp')}}"
                                                                width="420" height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Savvy Shoulder
                                                                Tote</a></h4>
                                                        <div class="prices">
                                                            <span class="price">$30.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-xl-6">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/col2-5.webp')}}"
                                                                width="420" height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Voyage Yoga Bag</a>
                                                        </h4>
                                                        <div class="prices">
                                                            <span class="price">$39.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-xl-6">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/col2-6.webp')}}"
                                                                width="420" height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Wayfarer Messenger
                                                                Bag</a></h4>
                                                        <div class="prices">
                                                            <span class="price">$50.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-xl-6">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/col2-2.webp')}}"
                                                                width="420" height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Impulse Duffle</a>
                                                        </h4>
                                                        <div class="prices">
                                                            <span class="price">$65.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-xl-6">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/col2-7.webp')}}"
                                                                width="420" height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Joust Duffle Bag</a>
                                                        </h4>
                                                        <div class="prices">
                                                            <span class="price">$20.19</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-xl-6">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/col2-8.webp')}}"
                                                                width="420" height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Fusion Backpack</a>
                                                        </h4>
                                                        <div class="prices">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-xl-6">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/col2-3.webp')}}"
                                                                width="420" height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Driven Backpack</a>
                                                        </h4>
                                                        <div class="prices">
                                                            <span class="price">$25.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-xl-6">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/col2-5.webp')}}"
                                                                width="420" height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Voyage Yoga Bag</a>
                                                        </h4>
                                                        <div class="prices">
                                                            <span class="price">$39.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-xl-6">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="{{ asset('web/assets/img/shop/col2-6.webp')}}"
                                                                width="420" height="320" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="single-product.html">Wayfarer Messenger
                                                                Bag</a></h4>
                                                        <div class="prices">
                                                            <span class="price">$50.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <button type="button" class="btn-product-wishlist"
                                                            data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                            <i class="pe-7s-like"></i>
                                                        </button>
                                                        <div class="product-action-links">
                                                            <button type="button" class="btn-product-cart"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-CartAddModal">
                                                                <i class="pe-7s-shopbag"></i>
                                                            </button>
                                                            <button type="button" class="btn-product-quick-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#action-QuickViewModal">
                                                                <i class="pe-7s-look"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                            <div class="col-12">
                                                <div class="pagination-items pagination-items-style1">
                                                    <ul class="pagination mb--0">
                                                        <li><a class="active" href="{{ asset('#') }}">1</a></li>
                                                        <li><a href="shop-four-columns.html">2</a></li>
                                                        <li><a href="shop-three-columns.html">3</a></li>
                                                        <li><a href="{{ asset('#') }}" class="icon"><i
                                                                    class="fa fa-angle-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="shop-sidebar">
                            <div class="shop-sidebar-search">
                                <div class="sidebar-search-form">
                                    <form action="#">
                                        <input type="search" placeholder="Search Here">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>

                            <div class="shop-widget shop-sidebar-price-range">
                                <h4 class="sidebar-title">Price Filter</h4>
                                <div class="sidebar-price-range">
                                    <input type="text" class="js-range-slider" name="my_range" value="" data-type="double"
                                        data-min="0" data-max="3000" data-from="300" data-to="2500" />
                                </div>
                            </div>

                            <div class="shop-widget shop-sidebar-category">
                                <h4 class="sidebar-title">Categoris</h4>
                                <div class="sidebar-category">
                                    <ul class="category-list mb--0">
                                        <li><a href="{{ asset('#') }}">Accesasories <span>(5)</span></a></li>
                                        <li><a href="{{ asset('#') }}">Computer <span>(4)</span></a></li>
                                        <li><a href="{{ asset('#') }}">Covid-19 <span>(2)</span></a></li>
                                        <li><a href="{{ asset('#') }}">Electronics <span>(6)</span></a></li>
                                        <li><a href="{{ asset('#') }}">Frame Sunglasses <span>(12)</span></a></li>
                                        <li><a href="{{ asset('#') }}">Furniture <span>(7)</span></a></li>
                                        <li><a href="{{ asset('#') }}">Genuine Leather <span>(9)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop-widget shop-sidebar-color">
                                <h4 class="sidebar-title">Color</h4>
                                <div class="sidebar-color">
                                    <div class="color-list">
                                        <div data-bg-color="#ffd868"></div>
                                        <div class="active" data-bg-color="#721b65"></div>
                                        <div data-bg-color="#dd117e"></div>
                                        <div data-bg-color="#0aa5d2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-widget shop-sidebar-size">
                                <h4 class="sidebar-title">Size</h4>
                                <div class="sidebar-size">
                                    <div class="size-list">
                                        <div>S</div>
                                        <div class="active">M</div>
                                        <div>L</div>
                                        <div>XL</div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-widget shop-sidebar-tags">
                                <h4 class="sidebar-title">Tags</h4>
                                <div class="sidebar-tags">
                                    <ul class="tags-list mb--0">
                                        <li><a href="{{ asset('#') }}">Fashion</a></li>
                                        <li><a href="{{ asset('#') }}">Organic</a></li>
                                        <li><a href="{{ asset('#') }}">Old Fashion</a></li>
                                        <li><a href="{{ asset('#') }}">Men</a></li>
                                        <li><a href="{{ asset('#') }}">Fashion</a></li>
                                        <li><a href="{{ asset('#') }}">Dress</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Product Area Wrapper ==-->
    </main>
    <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

    <!--== Start Product Quick Wishlist Modal ==-->
    <aside class="product-action-modal modal fade" id="action-WishlistModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="product-action-view-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                            <i class="pe-7s-close"></i>
                        </button>
                        <div class="modal-action-messages">
                            <i class="pe-7s-check"></i> Added to wishlist successfully!
                        </div>
                        <div class="modal-action-product">
                            <div class="thumb">
                                <img src="{{ asset('web/assets/img/shop/modal1.webp')}}" alt="Organic Food Juice"
                                    width="466" height="320">
                            </div>
                            <h4 class="product-name"><a href="single-product.html">Joust Duffle Bag</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!--== End Product Quick Wishlist Modal ==-->

    <!--== Start Product Quick Add Cart Modal ==-->
    <aside class="product-action-modal modal fade" id="action-CartAddModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="product-action-view-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                            <i class="pe-7s-close"></i>
                        </button>
                        <div class="modal-action-messages">
                            <i class="pe-7s-check"></i> Added to cart successfully!
                        </div>
                        <div class="modal-action-product">
                            <div class="thumb">
                                <img src="{{ asset('web/assets/img/shop/modal1.webp')}}" alt="Organic Food Juice"
                                    width="466" height="320">
                            </div>
                            <h4 class="product-name"><a href="single-product.html">Joust Duffle Bag</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!--== End Product Quick Add Cart Modal ==-->

    <!--== Start Product Quick View Modal ==-->
    <aside class="product-cart-view-modal modal fade" id="action-QuickViewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="product-quick-view-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                            <span class="pe-7s-close"></span>
                        </button>
                        <div class="container pt--0 pb--0">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!--== Start Product Thumbnail Area ==-->
                                    <div class="product-single-thumb">
                                        <img src="{{ asset('web/assets/img/shop/quick-view1.webp')}}" width="544"
                                            height="560" alt="Image-HasTech">
                                    </div>
                                    <!--== End Product Thumbnail Area ==-->
                                </div>
                                <div class="col-lg-6">
                                    <!--== Start Product Info Area ==-->
                                    <div class="product-single-info">
                                        <h3 class="main-title">Joust Duffle Bag</h3>
                                        <div class="prices">
                                            <span class="price">$20.19</span>
                                        </div>
                                        <div class="rating-box-wrap">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="review-status">
                                                <a href="javascript:void(0)">(5 Customer Review)</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor
                                            incidid ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nol
                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                            irure dolor in reprehenderit in voluptate</p>
                                        <div class="product-single-meta">
                                            <ul>
                                                <li><span>SKU:</span> Ch-256xl</li>
                                                <li><span>Categories:</span>
                                                    <a href="{{ asset('#') }}">Pet Food. eCommerce</a>
                                                </li>
                                                <li><span>Tags:</span>
                                                    <a href="{{ asset('#') }}">Petfood. Pet</a>,
                                                    <a href="{{ asset('#') }}">Animal.</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-quick-action">
                                            <div class="qty-wrap">
                                                <div class="pro-qty">
                                                    <input type="text" title="Quantity" value="01">
                                                </div>
                                            </div>
                                            <button type="button" class="btn-product-cart" data-bs-toggle="modal"
                                                data-bs-target="#action-CartAddModal">
                                                Add To Cart
                                            </button>
                                            <button type="button" class="btn-product-wishlist" data-bs-toggle="modal"
                                                data-bs-target="#action-WishlistModal">
                                                <i class="pe-7s-like"></i>
                                            </button>
                                            <button type="button" class="btn-product-quick-view" data-bs-toggle="modal"
                                                data-bs-target="#action-QuickViewModal">
                                                <i class="pe-7s-look"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--== End Product Info Area ==-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!--== End Product Quick View Modal ==-->

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
                        <img src="{{ asset('web/assets/img/shop/product-mini/1.webp')}}" width="90" height="110"
                            alt="Image-HasTech">
                        <span class="product-title">Leather Mens Slipper</span>
                    </a>
                    <span class="product-price">1 × £69.99</span>
                </li>
                <li class="aside-product-list-item">
                    <a href="#/" class="remove">×</a>
                    <a href="single-product.html">
                        <img src="{{ asset('web/assets/img/shop/product-mini/2.webp')}}" width="90" height="110"
                            alt="Image-HasTech">
                        <span class="product-title">Quickiin Mens shoes</span>
                    </a>
                    <span class="product-price">1 × £20.00</span>
                </li>
            </ul>
            <p class="cart-total"><span>Subtotal:</span><span class="amount">£89.99</span></p>
            <a class="btn-total" href="shop-cart.html">View cart</a>
            <a class="btn-total" href="shop-checkout.html">Checkout</a>
            <a class="d-block text-end lh-1" href="shop-checkout.html"><img
                    src="{{ asset('web/assets/img/photos/paypal.webp')}}" width="133" height="26" alt="Has-image"></a>
        </div>
    </aside>
    <!--== End Aside Cart ==-->

    <!--== Start Aside Search Form ==-->
    <aside class="aside-search-box-wrapper offcanvas offcanvas-top" tabindex="-1" id="AsideOffcanvasSearch"
        aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <h5 class="d-none" id="offcanvasTopLabel">Aside Search</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                    class="pe-7s-close"></i></button>
        </div>
        <div class="offcanvas-body">
            <div class="container pt--0 pb--0">
                <div class="search-box-form-wrap">
                    <div class="search-note">
                        <p>Start typing and press Enter to search</p>
                    </div>
                    <form action="#" method="post">
                        <div class="search-form position-relative">
                            <label for="search-input" class="visually-hidden">Search</label>
                            <input id="search-input" type="search" class="form-control" placeholder="Search entire store…">
                            <button class="search-button"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </aside>
    <!--== End Aside Search Form ==-->

    <!--== Start Aside Menu ==-->
    <aside class="off-canvas-wrapper offcanvas offcanvas-start" tabindex="-1" id="AsideOffcanvasMenu"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h1 class="d-none" id="offcanvasExampleLabel">Aside Menu</h1>
            <button class="btn-menu-close" data-bs-dismiss="offcanvas" aria-label="Close">menu <i
                    class="fa fa-chevron-left"></i></button>
        </div>
        <div class="offcanvas-body">
            <nav id="offcanvasNav" class="offcanvas-menu-nav">
                <ul>
                    <li class="offcanvas-nav-parent">
                        <a class="offcanvas-nav-item" href="javascript:void(0)">Home</a>
                        <ul>
                            <li><a href="{{ asset('#') }}"><span>Home One</span></a></li>
                            <li><a href="index-two.html"><span>Home Two</span></a></li>
                        </ul>
                    </li>

                    <li class="offcanvas-nav-parent"><a class="offcanvas-nav-item" href="about-us.html">About</a></li>

                    <li class="offcanvas-nav-parent">
                        <a class="offcanvas-nav-item" href="javascript:void(0)">Shop</a>
                        <ul>
                            <li>
                                <a class="offcanvas-nav-item" href="javascript:void(0)">Shop Layouts</a>
                                <ul>
                                    <li><a href="shop-three-columns.html"><span>Shop 3 Column</span></a></li>
                                    <li><a href="shop-four-columns.html"><span>Shop 4 Column</span></a></li>
                                    <li><a href="shop-left-sidebar.html"><span>Shop Left Sidebar</span></a></li>
                                    <li><a href="{{ asset('#') }}"><span>Shop Right Sidebar</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="offcanvas-nav-item" href="javascript:void(0)">Single Product</a>
                                <ul>
                                    <li><a href="single-normal-product.html"><span>Single Product Normal</span></a></li>
                                    <li><a href="single-product.html"><span>Single Product Variable</span></a></li>
                                    <li><a href="single-group-product.html"><span>Single Product Group</span></a></li>
                                    <li><a href="single-affiliate-product.html"><span>Single Product Affiliate</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="offcanvas-nav-item" href="javascript:void(0)">Others Pages</a>
                                <ul>
                                    <li><a href="shop-cart.html"><span>Shopping Cart</span></a></li>
                                    <li><a href="shop-checkout.html"><span>Checkout</span></a></li>
                                    <li><a href="shop-wishlist.html"><span>Wishlist</span></a></li>
                                    <li><a href="shop-compare.html"><span>Compare</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="offcanvas-nav-parent">
                        <a class="offcanvas-nav-item" href="javascript:void(0)">Blog</a>
                        <ul>
                            <li>
                                <a class="offcanvas-nav-item" href="javascript:void(0)">Blog Layout</a>
                                <ul>
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="offcanvas-nav-item" href="javascript:void(0)">Single Blog</a>
                                <ul>
                                    <li><a href="blog-details-no-sidebar.html">Blog Details</a></li>
                                    <li><a href="blog-details.html">Blog Details Left Sidebar</a></li>
                                    <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="offcanvas-nav-parent">
                        <a class="offcanvas-nav-item" href="javascript:void(0)">Pages</a>
                        <ul>
                            <li><a href="account.html"><span>Account</span></a></li>
                            <li><a href="account-login.html"><span>Login</span></a></li>
                            <li><a href="account-register.html"><span>Register</span></a></li>
                            <li><a href="page-not-found.html"><span>Page Not Found</span></a></li>
                        </ul>
                    </li>

                    <li class="offcanvas-nav-parent"><a class="offcanvas-nav-item" href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </aside>
@endsection