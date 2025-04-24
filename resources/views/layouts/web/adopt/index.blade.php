@extends('layouts.web.app')
@section('content')
    
    <main class="main-content">
        <!--== Start Page Header Area Wrapper ==-->
        <div class="page-header-area" data-bg-img="{{ asset('web/assets/img/photos/bg1.webp')}}">
            <div class="container pt--0 pb--0">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content">
                            <h2 class="title">Blog</h2>
                            <nav class="breadcrumb-area">
                                <ul class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-sep">//</li>
                                    <li>Blog</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Page Header Area Wrapper ==-->

        <!--== Start Blog Area Wrapper ==-->
        <section class="blog-details-area">
            <div class="container">
                <div class="row flex-md-row-reverse justify-content-between">
                    <div class="col-xl-8">
                        <div class="blog-details-content-wrap">
                            <div class="blog-details-item">
                                <div class="blog-details-thumb">
                                    <img src="{{ asset('web/assets/img/blog/details1.webp')}}" width="700" height="400" alt="Image-HasTech">
                                </div>
                                <div class="blog-details-content">
                                    <div class="meta">
                                        <ul>
                                            <li class="author-info"><span>By:</span> <a href="blog.html">Admin</a></li>
                                            <li class="post-date"><a href="blog.html">Sep 24,2022</a></li>
                                        </ul>
                                    </div>
                                    <h3 class="main-title">Lorem Ipsum is siamply dumyte the printing and typese.</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididu ut laboref et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laborisnisi aliq ex ea commodo consequat. Duis aute irure dolor
                                        in reprehend in voluptate velit esse cillum doloreo eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui deseruntl mollit
                                        anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                        accusanti doloremque laudantium, totam rem aperiam.</p>
                                    <blockquote>
                                        <div class="inner-content">
                                            <p>Lorem ipsum dolor sit amet, conse ctetuadipi elit, sed do eiusmod tempor
                                                incidi labore et dolore magna aliqua.</p>
                                            <img class="inner-shape" src="{{ asset('web/assets/img/icons/quote2.webp')}}" width="111"
                                                height="81" alt="Image-HasTech">
                                        </div>
                                    </blockquote>
                                    <h3 class="main-title sub-title">It is a long established fact that.</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labor et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehendein voluptate velit esse cillum dolore eu fugiat nulla
                                        pariatur. Exceptsint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                                        sit voluptatem accusantium doloremque laudantium,</p>
                                    <p>totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                        beatae vitae dict sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                        asperna aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                        voluptate sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                        amet, consectetur, adipisci velit, sed quia non numquam eius </p>
                                    <div class="blog-details-footer">
                                        <div class="tage-list">
                                            <span>Tags:</span>
                                            <a href="blog.html">Pet</a>
                                            <a href="blog.html">Animal</a>
                                            <a href="blog.html">Dog</a>
                                        </div>
                                        <div class="social-icons">
                                            <span>Share:</span>
                                            <a href="https://www.facebook.com/" target="_blank" rel="noopener"><i
                                                    class="fa fa-facebook"></i></a>
                                            <a href="https://dribbble.com/" target="_blank" rel="noopener"><i
                                                    class="fa fa-dribbble"></i></a>
                                            <a href="https://www.pinterest.com/" target="_blank" rel="noopener"><i
                                                    class="fa fa-pinterest-p"></i></a>
                                            <a href="https://twitter.com/" target="_blank" rel="noopener"><i
                                                    class="fa fa-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--== Start Comment View Item ==-->
                            <div class="comment-view-area">
                                <h4 class="title-main">Comments (03)</h4>
                                <div class="comment-view-content">
                                    <div class="single-comment">
                                        <div class="author-pic">
                                            <a href="blog.html"><img src="{{ asset('web/assets/img/blog/author1.webp')}}" width="120"
                                                    height="120" alt="Image-HasTech"></a>
                                        </div>
                                        <div class="author-info">
                                            <h4 class="title"><a href="blog.html">Monroe Bond</a></h4>
                                            <h6 class="comment-date"><a href="blog.html">21 July 2021</a></h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod teml
                                                incidid ut labore et dolor magna aliqua. Ut enim ad minim veniam, quis
                                                nostru exercita ullamc laboris nisi ut aliquip ex ea comm consequat.</p>
                                            <a class="comment-reply" href="#/">Reply <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="single-comment reply-comment">
                                        <div class="author-pic">
                                            <a href="blog.html"><img src="{{ asset('web/assets/img/blog/author2.webp')}}" width="120"
                                                    height="120" alt="Image-HasTech"></a>
                                        </div>
                                        <div class="author-info">
                                            <h4 class="title"><a href="blog.html">Audrina Finn</a></h4>
                                            <h6 class="comment-date"><a href="blog.html">21 July 2021</a></h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod teml
                                                incidid ut labore et dolor magna aliqua. Ut enimlk ad minim veniam, quis
                                                nostru exercita.</p>
                                            <a class="comment-reply" href="#/">Reply <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="single-comment mb--0">
                                        <div class="author-pic">
                                            <a href="blog.html"><img src="{{ asset('web/assets/img/blog/author3.webp')}}" width="120"
                                                    height="120" alt="Image-HasTech"></a>
                                        </div>
                                        <div class="author-info">
                                            <h4 class="title"><a href="blog.html">Gregorio Meier</a></h4>
                                            <h6 class="comment-date"><a href="blog.html">21 July 2021</a></h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod teml
                                                incidid ut labore et dolor magna aliqua. Ut enim ad minim veniam, quis
                                                nostru exercita ullamc laboris nisi ut aliquip ex ea comm consequat.</p>
                                            <a class="comment-reply" href="#/">Reply <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--== End Comment View Item ==-->

                            <!--== Start Comment Item ==-->
                            <div class="comment-form-area">
                                <h4 class="title-main">Leave a Comments</h4>
                                <div class="comment-form">
                                    <form action="#">
                                        <div class="row ">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" placeholder="Name *">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="email" placeholder="Email *">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" placeholder="Subject (Optinal)">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb--0">
                                                    <textarea class="form-control" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb--0">
                                                    <button type="submit" class="btn-theme">Send Comments</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--== End Comment Item ==-->
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="blog-sidebar">
                            <div class="blog-sidebar-search">
                                <div class="sidebar-search-form">
                                    <form action="#">
                                        <input type="search" placeholder="Search Here">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>

                            <div class="blog-widget blog-sidebar-category">
                                <h4 class="sidebar-title">Popular Categoris</h4>
                                <div class="sidebar-category">
                                    <ul class="category-list">
                                        <li><a href="blog.html">Accesasories <span>(6)</span></a></li>
                                        <li><a href="blog.html">Computer <span>(4)</span></a></li>
                                        <li><a href="blog.html">Covid-19 <span>(2)</span></a></li>
                                        <li><a href="blog.html">Electronics <span>(12)</span></a></li>
                                        <li><a href="blog.html">Furniture <span>(9)</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="blog-widget blog-sidebar-post">
                                <h4 class="sidebar-title">Recent Posts</h4>
                                <div class="sidebar-post">
                                    <div class="single-post">
                                        <div class="post-thumb">
                                            <a href="blog-details.html"><img src="{{ asset('web/assets/img/blog/s1.webp')}}" width="65"
                                                    height="68" alt="Image-HasTech"></a>
                                        </div>
                                        <div class="post-content">
                                            <span class="date"><a href="blog.html">Sep 24,2022</a></span>
                                            <h6 class="title"><a href="blog-details.html">Lorem ipsum dolor sit amet conse
                                                    adipis.</a></h6>
                                        </div>
                                    </div>
                                    <div class="single-post">
                                        <div class="post-thumb">
                                            <a href="blog-details.html"><img src="{{ asset('web/assets/img/blog/s2.webp')}}" width="65"
                                                    height="68" alt="Image-HasTech"></a>
                                        </div>
                                        <div class="post-content">
                                            <span class="date"><a href="blog.html">Sep 24,2022</a></span>
                                            <h6 class="title"><a href="blog-details.html">Nicholas K Spring 2022 Runway.</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="single-post">
                                        <div class="post-thumb">
                                            <a href="blog-details.html"><img src="{{ asset('web/assets/img/blog/s3.webp')}}" width="65"
                                                    height="68" alt="Image-HasTech"></a>
                                        </div>
                                        <div class="post-content">
                                            <span class="date"><a href="blog.html">Sep 24,2022</a></span>
                                            <h6 class="title"><a href="blog-details.html">Celebrity Daughter Opens About
                                                    Upto.</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-widget blog-sidebar-tags">
                                <h4 class="sidebar-title">Popular Tags</h4>
                                <div class="sidebar-tags">
                                    <ul class="tags-list mb--0">
                                        <li><a href="blog.html">Pet</a></li>
                                        <li><a href="blog.html">Animal</a></li>
                                        <li><a href="blog.html">Dog</a></li>
                                        <li><a href="blog.html">Pet Food</a></li>
                                        <li><a href="blog.html">Dress</a></li>
                                        <li><a href="blog.html">Food</a></li>
                                        <li><a href="blog.html">Cat</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Blog Area Wrapper ==-->
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
                                                    <a href="shop.html">Pet Food. eCommerce</a>
                                                </li>
                                                <li><span>Tags:</span>
                                                    <a href="shop.html">Petfood. Pet</a>,
                                                    <a href="shop.html">Animal.</a>
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
            <a class="d-block text-end lh-1" href="{{ route('checkout') }}"><img src="{{ asset('web/assets/img/photos/paypal.webp')}}" width="133"
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
                                    <li><a href="shop.html"><span>Shop Right Sidebar</span></a></li>
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