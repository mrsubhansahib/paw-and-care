@extends ('layouts.web.app')
@section('content')

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
                                    <li><a href="{{ route('home') }}">Home</a></li>
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

        <!--== Start Product Single Area Wrapper ==-->
        <section class="product-area product-single-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-single-item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!--== Start Product Thumbnail Area ==-->
                                    <div class="product-single-thumb">
                                        <div class="swiper single-product-thumb single-product-thumb-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <a class="lightbox-image" data-fancybox="gallery"
                                                        href="{{ asset('assets/img/shop/product-single/1.webp')}}">
                                                        <img src="{{ asset('web/assets/img/shop/product-single/1.webp')}}" width="570"
                                                            height="675" alt="Image-HasTech">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a class="lightbox-image" data-fancybox="gallery"
                                                        href="{{ asset('assets/img/shop/product-single/2.webp')}}">
                                                        <img src="{{ asset('web/assets/img/shop/product-single/2.webp')}}" width="570"
                                                            height="675" alt="Image-HasTech">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a class="lightbox-image" data-fancybox="gallery"
                                                        href="{{ asset('assets/img/shop/product-single/3.webp')}}">
                                                        <img src="{{ asset('web/assets/img/shop/product-single/3.webp')}}" width="570"
                                                            height="675" alt="Image-HasTech">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a class="lightbox-image" data-fancybox="gallery"
                                                        href="{{ asset('assets/img/shop/product-single/4.webp')}}">
                                                        <img src="{{ asset('web/assets/img/shop/product-single/4.webp')}}" width="570"
                                                            height="675" alt="Image-HasTech">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-single-swiper-wrap position-relative">
                                            <div class="swiper single-product-nav single-product-nav-slider">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset('web/assets/img/shop/product-single/nav1.webp')}}" width="127"
                                                            height="127" alt="Image-HasTech">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset('web/assets/img/shop/product-single/nav2.webp')}}" width="127"
                                                            height="127" alt="Image-HasTech">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset('web/assets/img/shop/product-single/nav3.webp')}}" width="127"
                                                            height="127" alt="Image-HasTech">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset('web/assets/img/shop/product-single/nav4.webp')}}" width="127"
                                                            height="127" alt="Image-HasTech">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== Add Swiper Arrows ==-->
                                            <div class="single-swiper-btn-wrap">
                                                <div class="swiper-btn-prev">
                                                    <i class="fa fa-angle-left"></i>
                                                </div>
                                                <div class="swiper-btn-next">
                                                    <i class="fa fa-angle-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Product Thumbnail Area ==-->
                                </div>
                                <div class="col-lg-6">
                                    <!--== Start Product Info Area ==-->
                                    <div class="product-single-info">
                                        <h3 class="main-title">Fusion Backpack</h3>
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
                                                    <a href="{{ route('shop') }}">Pet Food. eCommerce</a>
                                                </li>
                                                <li><span>Tags:</span>
                                                    <a href="{{ route('shop') }}">Petfood. Pet</a>,
                                                    <a href="{{ route('shop') }}">Animal.</a>
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
                                        <div class="product-review-tabs-content">
                                            <ul class="nav product-tab-nav" id="ReviewTab" role="tablist">
                                                <li role="presentation">
                                                    <a class="active" id="information-tab" data-bs-toggle="pill"
                                                        href="#information" role="tab" aria-controls="information"
                                                        aria-selected="true">Information</a>
                                                </li>
                                                <li role="presentation">
                                                    <a id="description-tab" data-bs-toggle="pill" href="#description"
                                                        role="tab" aria-controls="description"
                                                        aria-selected="false">Description</a>
                                                </li>
                                                <li role="presentation">
                                                    <a id="reviews-tab" data-bs-toggle="pill" href="#reviews" role="tab"
                                                        aria-controls="reviews" aria-selected="false">Reviews (05)</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content product-tab-content" id="ReviewTabContent">
                                                <div class="tab-pane fade show active" id="information" role="tabpanel"
                                                    aria-labelledby="information-tab">
                                                    <div class="product-information">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipis elit, sed do
                                                            eiusmod tempor incidid ut labore et dolore magna aliqua. Ut enim
                                                            ad minim veniam, quis nol exercitation ullamco laboris nisi ut
                                                            aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                            reprehenderit in voluptateLorem ipsum dolor sit amet col
                                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                                            dolore magna aliqua. Ut enim ad minim veniam,</p>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="description" role="tabpanel"
                                                    aria-labelledby="description-tab">
                                                    <div class="product-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipis elit, sed do
                                                            eiusmod tempor incidid ut labore et dolore magna aliqua. Ut enim
                                                            ad minim veniam, quis nol exercitation ullamco laboris nisi ut
                                                            aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                            reprehenderit in voluptateLorem ipsum dolor sit amet col
                                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                                            dolore magna aliqua. Ut enim ad minim veniam,</p>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="reviews" role="tabpanel"
                                                    aria-labelledby="reviews-tab">
                                                    <div class="product-review-content">
                                                        <div class="comment-author">
                                                            <div class="comment-thumb">
                                                                <img src="{{ asset('web/assets/img/shop/avatar.webp')}}" width="60"
                                                                    height="60" alt="Image-HasTech">
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="rating-box">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <h4 class="title"><span>Admin</span> - April 8, 2022</h4>
                                                                <p class="desc">Donec venenatis euismod turpis sed dapibus.
                                                                    Maecenas augue augue, iaculis id dui eget, ultricies
                                                                    sagittis purus. Praesent sed blandit mauris.
                                                                    Pellentesque non auctor dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="comment-form-content">
                                                            <h4 class="title collapsed" data-bs-toggle="collapse"
                                                                data-bs-target="#comment-widgetId-1">Add Reviwe</h4>
                                                            <div id="comment-widgetId-1" class="collapse collapse-body">
                                                                <div class="review-comment-form">
                                                                    <form action="#">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <label for="ReviewComment"
                                                                                        class="form-label">Your review
                                                                                        *</label>
                                                                                    <textarea id="ReviewComment"
                                                                                        class="form-control"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <label for="Reviewname"
                                                                                        class="form-label">Name *</label>
                                                                                    <input id="Reviewname"
                                                                                        class="form-control" type="text">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <label for="Reviewemail"
                                                                                        class="form-label">Email *</label>
                                                                                    <input id="Reviewemail"
                                                                                        class="form-control" type="email">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group mb--0">
                                                                                    <button type="submit">Submit</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Product Info Area ==-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Product Single Area Wrapper ==-->

        <!--== Start Product Area Wrapper ==-->
        <section class="product-area product-default-area">
            <div class="container pt--0">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title shape-center text-center">
                            <h5 class="sub-title">Best PRODUCT</h5>
                            <h2 class="title">Related Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <!--== Start Product Item ==-->
                        <div class="product-item">
                            <div class="product-thumb">
                                <a href="single-product.html">
                                    <img src="{{ asset('web/assets/img/shop/5.webp')}}" width="270" height="320" alt="Image-HasTech">
                                </a>
                            </div>
                            <div class="product-info">
                                <h4 class="title"><a href="single-product.html">Fusion Backpack</a></h4>
                                <div class="prices">
                                    <span class="price">$45.00</span>
                                </div>
                            </div>
                            <div class="product-action">
                                <button type="button" class="btn-product-wishlist" data-bs-toggle="modal"
                                    data-bs-target="#action-WishlistModal">
                                    <i class="pe-7s-like"></i>
                                </button>
                                <div class="product-action-links">
                                    <button type="button" class="btn-product-cart" data-bs-toggle="modal"
                                        data-bs-target="#action-CartAddModal">
                                        <i class="pe-7s-shopbag"></i>
                                    </button>
                                    <button type="button" class="btn-product-quick-view" data-bs-toggle="modal"
                                        data-bs-target="#action-QuickViewModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--== End prPduct Item ==-->
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <!--== Start Product Item ==-->
                        <div class="product-item">
                            <div class="product-thumb">
                                <a href="single-product.html">
                                    <img src="{{ asset('web/assets/img/shop/6.webp')}}" width="270" height="320" alt="Image-HasTech">
                                </a>
                            </div>
                            <div class="product-info">
                                <h4 class="title"><a href="single-product.html">Savvy Shoulder Tote</a></h4>
                                <div class="prices">
                                    <span class="price">$30.00</span>
                                </div>
                            </div>
                            <div class="product-action">
                                <button type="button" class="btn-product-wishlist" data-bs-toggle="modal"
                                    data-bs-target="#action-WishlistModal">
                                    <i class="pe-7s-like"></i>
                                </button>
                                <div class="product-action-links">
                                    <button type="button" class="btn-product-cart" data-bs-toggle="modal"
                                        data-bs-target="#action-CartAddModal">
                                        <i class="pe-7s-shopbag"></i>
                                    </button>
                                    <button type="button" class="btn-product-quick-view" data-bs-toggle="modal"
                                        data-bs-target="#action-QuickViewModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--== End prPduct Item ==-->
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <!--== Start Product Item ==-->
                        <div class="product-item">
                            <div class="product-thumb">
                                <a href="single-product.html">
                                    <img src="{{ asset('web/assets/img/shop/7.webp')}}" width="270" height="320" alt="Image-HasTech">
                                </a>
                            </div>
                            <div class="product-info">
                                <h4 class="title"><a href="single-product.html">Voyage Yoga Bag</a></h4>
                                <div class="prices">
                                    <span class="price">$39.00</span>
                                </div>
                            </div>
                            <div class="product-action">
                                <button type="button" class="btn-product-wishlist" data-bs-toggle="modal"
                                    data-bs-target="#action-WishlistModal">
                                    <i class="pe-7s-like"></i>
                                </button>
                                <div class="product-action-links">
                                    <button type="button" class="btn-product-cart" data-bs-toggle="modal"
                                        data-bs-target="#action-CartAddModal">
                                        <i class="pe-7s-shopbag"></i>
                                    </button>
                                    <button type="button" class="btn-product-quick-view" data-bs-toggle="modal"
                                        data-bs-target="#action-QuickViewModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--== End prPduct Item ==-->
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <!--== Start Product Item ==-->
                        <div class="product-item">
                            <div class="product-thumb">
                                <a href="single-product.html">
                                    <img src="{{ asset('web/assets/img/shop/8.webp')}}" width="270" height="320" alt="Image-HasTech">
                                </a>
                            </div>
                            <div class="product-info">
                                <h4 class="title"><a href="single-product.html">Wayfarer Messenger Bag</a></h4>
                                <div class="prices">
                                    <span class="price">$50.00</span>
                                </div>
                            </div>
                            <div class="product-action">
                                <button type="button" class="btn-product-wishlist" data-bs-toggle="modal"
                                    data-bs-target="#action-WishlistModal">
                                    <i class="pe-7s-like"></i>
                                </button>
                                <div class="product-action-links">
                                    <button type="button" class="btn-product-cart" data-bs-toggle="modal"
                                        data-bs-target="#action-CartAddModal">
                                        <i class="pe-7s-shopbag"></i>
                                    </button>
                                    <button type="button" class="btn-product-quick-view" data-bs-toggle="modal"
                                        data-bs-target="#action-QuickViewModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--== End prPduct Item ==-->
                    </div>
                </div>
            </div>
        </section>
        <!--== End Product Area Wrapper ==-->
    </main>


    <!--== Scroll Top Button ==-->
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
                                <img src="{{ asset('web/assets/img/shop/modal1.webp')}}" alt="Organic Food Juice" width="466" height="320">
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
                                <img src="{{ asset('web/assets/img/shop/modal1.webp')}}" alt="Organic Food Juice" width="466" height="320">
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
                                        <img src="{{ asset('web/assets/img/shop/quick-view1.webp')}}" width="544" height="560"
                                            alt="Image-HasTech">
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
                                                    <a href="{{ route('shop') }}">Pet Food. eCommerce</a>
                                                </li>
                                                <li><span>Tags:</span>
                                                    <a href="{{ route('shop') }}">Petfood. Pet</a>,
                                                    <a href="{{ route('shop') }}">Animal.</a>
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
            <a class="btn-total" href="{{ route('checkout') }}">Checkout</a>
            <a class="d-block text-end lh-1" href="{{ route('checkout') }}"><img src="{{ asset('web/assets/img/photos/paypal.webp" width')}}="133"
                    height="26" alt="Has-image"></a>
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
                            <li><a href="index.html"><span>Home One</span></a></li>
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
                                    <li><a href="{{ route('shop') }}"><span>Shop Right Sidebar</span></a></li>
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
                                    <li><a href="{{ route('cart') }}"><span>Shopping Cart</span></a></li>
                                    <li><a href="{{ route('checkout') }}"><span>Checkout</span></a></li>
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
    <!--== End Aside Menu ==-->
@endsection