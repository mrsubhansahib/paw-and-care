
<?php $__env->startSection('content'); ?>
    <header class="header-area" data-bg-img="<?php echo e(asset('web/assets/img/photos/header-bg.webp')); ?>">
        <div class="container">
            <div class="row no-gutter align-items-center position-relative">
                <div class="col-12">
                    <div class="header-align">
                        <div class="header-align-start">
                            <div class="header-logo-area">
                                <a href="<?php echo e(route('home')); ?>">
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
                                    <a class="shopping-account-btn" href="<?php echo e(route('user-login')); ?>">
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
        <section class="blog-details-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12">
                        <div class="blog-details-content-wrap">
                            <div class="blog-details-item">
                                <div class="blog-details-thumb">
                                    <img src="<?php echo e(asset('web/assets/img/blog/details2.webp')); ?>" width="1100" height="590" alt="Image-HasTech">
                                </div>
                                <div class="blog-details-content">
                                    <div class="meta">
                                        <ul>
                                            <li class="author-info"><span>By:</span> <a href="blog.html">Admin</a></li>
                                            <li class="post-date"><a href="blog.html">Sep 24,2022</a></li>
                                        </ul>
                                    </div>
                                    <h3 class="main-title">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</h3>
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
                                            <img class="inner-shape" src="<?php echo e(asset('web/assets/img/icons/quote2.webp')); ?>" width="111"
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
                                            <a href="blog.html"><img src="<?php echo e(asset('web/assets/img/blog/author1.webp')); ?>" width="120"
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
                                            <a href="blog.html"><img src="<?php echo e(asset('web/assets/img/blog/author2.webp')); ?>" width="120"
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
                                            <a href="blog.html"><img src="<?php echo e(asset('web/assets/img/blog/author3.webp')); ?>" width="120"
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
                </div>
            </div>
        </section>
        <!--== End Blog Area Wrapper ==-->
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\personal\paw-and-care\resources\views/layouts/web/blog/detail/index.blade.php ENDPATH**/ ?>