
<?php $__env->startSection('content'); ?>
    <header class="header-area" data-bg-img="<?php echo e(asset('web/assets/img/photos/header-bg.webp')); ?>">
        <div class="container">
            <div class="row no-gutter align-items-center position-relative">
                <div class="col-12">
                    <div class="header-align">
                        <div class="header-align-start">
                            <div class="header-logo-area">
                                <a href="#">
                                    <img class="logo-main" src="<?php echo e(asset('web/assets/img/logo-light.webp')); ?>" width="158"
                                        height="36" alt="Logo" />
                                </a>
                            </div>
                        </div>
                        <div class="header-align-center">
                            <div class="header-navigation-area position-relative">
                                <ul class="main-menu nav">
                                    <li class="has-submenu"><a href="<?php echo e(route('home')); ?>"><span>Home</span></a>
                                    </li>
                                    <li><a href="<?php echo e(route('about')); ?>"><span>About</span></a></li>
                                    <li class="has-submenu position-static"><a
                                            href="<?php echo e(route('shop')); ?>"><span>Shop</span></a>
                                    </li>
                                    <li class="has-submenu"><a href="<?php echo e(route('blog')); ?>"><span>Blog</span></a>
                                    </li>
                                    <li class="has-submenu"><a href="<?php echo e(route('adopt')); ?>"><span>ADOPTION</span></a>
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
        <div class="page-header-area" data-bg-img="<?php echo e(asset('web/assets/img/photos/bg1.webp')); ?>">
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
        <section class="blog-area blog-inner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <!--== Start Blog Item ==-->
                        <div class="post-item">
                            <div class="thumb">
                                <a href="blog-details.html">
                                    <img src="<?php echo e(asset('web/assets/img/blog/1.webp')); ?>" width="350" height="250" alt="Image-HasTech">
                                </a>
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <ul>
                                        <li class="author-info"><span>By:</span> <a href="blog.html">Admin</a></li>
                                        <li class="post-date"><a href="blog.html">Sep 24,2022</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="blog-details.html">Lorem ipsum dolor sit amet conse adipis.</a>
                                </h4>
                                <a class="btn-theme btn-sm" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                        <!--== End Blog Item ==-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!--== Start Blog Item ==-->
                        <div class="post-item">
                            <div class="thumb">
                                <a href="blog-details.html">
                                    <img src="<?php echo e(asset('web/assets/img/blog/2.webp')); ?>" width="350" height="250" alt="Image-HasTech">
                                </a>
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <ul>
                                        <li class="author-info"><span>By:</span> <a href="blog.html">Admin</a></li>
                                        <li class="post-date"><a href="blog.html">Sep 24,2022</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="blog-details.html">It is a long established fact that a reader
                                        will.</a></h4>
                                <a class="btn-theme btn-sm" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                        <!--== End Blog Item ==-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!--== Start Blog Item ==-->
                        <div class="post-item">
                            <div class="thumb">
                                <a href="blog-details.html">
                                    <img src="<?php echo e(asset('web/assets/img/blog/3.webp')); ?>" width="350" height="250" alt="Image-HasTech">
                                </a>
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <ul>
                                        <li class="author-info"><span>By:</span> <a href="blog.html">Admin</a></li>
                                        <li class="post-date"><a href="blog.html">Sep 24,2022</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="blog-details.html">Fashions fade, style is eternal About
                                        Upto.</a></h4>
                                <a class="btn-theme btn-sm" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                        <!--== End Blog Item ==-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!--== Start Blog Item ==-->
                        <div class="post-item">
                            <div class="thumb">
                                <a href="blog-details.html">
                                    <img src="<?php echo e(asset('web/assets/img/blog/4.webp')); ?>" width="350" height="250" alt="Image-HasTech">
                                </a>
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <ul>
                                        <li class="author-info"><span>By:</span> <a href="blog.html">Admin</a></li>
                                        <li class="post-date"><a href="blog.html">Sep 24,2022</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="blog-details.html">The industry's standard dummy text ever.</a>
                                </h4>
                                <a class="btn-theme btn-sm" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                        <!--== End Blog Item ==-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!--== Start Blog Item ==-->
                        <div class="post-item">
                            <div class="thumb">
                                <a href="blog-details.html">
                                    <img src="<?php echo e(asset('web/assets/img/blog/5.webp')); ?>" width="350" height="250" alt="Image-HasTech">
                                </a>
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <ul>
                                        <li class="author-info"><span>By:</span> <a href="blog.html">Admin</a></li>
                                        <li class="post-date"><a href="blog.html">Sep 24,2022</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="blog-details.html">Be distracted by the readable content.</a>
                                </h4>
                                <a class="btn-theme btn-sm" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                        <!--== End Blog Item ==-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!--== Start Blog Item ==-->
                        <div class="post-item">
                            <div class="thumb">
                                <a href="blog-details.html">
                                    <img src="<?php echo e(asset('web/assets/img/blog/6.webp')); ?>" width="350" height="250" alt="Image-HasTech">
                                </a>
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <ul>
                                        <li class="author-info"><span>By:</span> <a href="blog.html">Admin</a></li>
                                        <li class="post-date"><a href="blog.html">Sep 24,2022</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="blog-details.html">Lorem Ipsum is simply dummy text of the.</a>
                                </h4>
                                <a class="btn-theme btn-sm" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                        <!--== End Blog Item ==-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!--== Start Blog Item ==-->
                        <div class="post-item">
                            <div class="thumb">
                                <a href="blog-details.html">
                                    <img src="<?php echo e(asset('web/assets/img/blog/7.webp')); ?>" width="350" height="250" alt="Image-HasTech">
                                </a>
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <ul>
                                        <li class="author-info"><span>By:</span> <a href="blog.html">Admin</a></li>
                                        <li class="post-date"><a href="blog.html">Sep 24,2022</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="blog-details.html">Celebrity daughter <br>opens about upto.</a>
                                </h4>
                                <a class="btn-theme btn-sm" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                        <!--== End Blog Item ==-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!--== Start Blog Item ==-->
                        <div class="post-item">
                            <div class="thumb">
                                <a href="blog-details.html">
                                    <img src="<?php echo e(asset('web/assets/img/blog/8.webp')); ?>" width="350" height="250" alt="Image-HasTech">
                                </a>
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <ul>
                                        <li class="author-info"><span>By:</span> <a href="blog.html">Admin</a></li>
                                        <li class="post-date"><a href="blog.html">Sep 24,2022</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="blog-details.html">Love stories of hollywood Celebrities.</a>
                                </h4>
                                <a class="btn-theme btn-sm" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                        <!--== End Blog Item ==-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!--== Start Blog Item ==-->
                        <div class="post-item">
                            <div class="thumb">
                                <a href="blog-details.html">
                                    <img src="<?php echo e(asset('web/assets/img/blog/9.webp')); ?>" width="350" height="250" alt="Image-HasTech">
                                </a>
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <ul>
                                        <li class="author-info"><span>By:</span> <a href="blog.html">Admin</a></li>
                                        <li class="post-date"><a href="blog.html">Sep 24,2022</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="blog-details.html">Fashions fade, style is eternal about
                                        upto.</a></h4>
                                <a class="btn-theme btn-sm" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                        <!--== End Blog Item ==-->
                    </div>
                    <div class="col-12">
                        <div class="pagination-items pagination-items-style1">
                            <ul class="pagination justify-content-center mb--0">
                                <li><a class="active" href="shop.html">1</a></li>
                                <li><a href="shop-four-columns.html">2</a></li>
                                <li><a href="shop-three-columns.html">3</a></li>
                                <li><a href="shop.html" class="icon"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Blog Area Wrapper ==-->
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
                                <img src="<?php echo e(asset('web/assets/img/shop/modal1.webp')); ?>" alt="Organic Food Juice" width="466" height="320">
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
                                <img src="<?php echo e(asset('web/assets/img/shop/modal1.webp')); ?>" alt="Organic Food Juice" width="466" height="320">
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
                                        <img src="<?php echo e(asset('web/assets/img/shop/quick-view1.webp')); ?>" width="544" height="560"
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
                        <img src="<?php echo e(asset('web/assets/img/shop/product-mini/1.webp')); ?>" width="90" height="110" alt="Image-HasTech">
                        <span class="product-title">Leather Mens Slipper</span>
                    </a>
                    <span class="product-price">1 × £69.99</span>
                </li>
                <li class="aside-product-list-item">
                    <a href="#/" class="remove">×</a>
                    <a href="single-product.html">
                        <img src="<?php echo e(asset('web/assets/img/shop/product-mini/2.webp')); ?>" width="90" height="110" alt="Image-HasTech">
                        <span class="product-title">Quickiin Mens shoes</span>
                    </a>
                    <span class="product-price">1 × £20.00</span>
                </li>
            </ul>
            <p class="cart-total"><span>Subtotal:</span><span class="amount">£89.99</span></p>
            <a class="btn-total" href="shop-cart.html">View cart</a>
            <a class="btn-total" href="shop-checkout.html">Checkout</a>
            <a class="d-block text-end lh-1" href="shop-checkout.html"><img src="<?php echo e(asset('web/assets/img/photos/paypal.webp')); ?>" width="133"
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\personal\paw-and-care\resources\views/layouts/web/blog/index.blade.php ENDPATH**/ ?>