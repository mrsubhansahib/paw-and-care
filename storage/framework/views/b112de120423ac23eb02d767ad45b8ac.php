
<?php $__env->startSection('content'); ?>
    <main class="main-content">
        <!--== Start Page Header Area Wrapper ==-->
        <div class="page-header-area" data-bg-img="<?php echo e(asset('web/assets/img/photos/bg1.webp')); ?>">
            <div class="container pt--0 pb--0">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content">
                            <h2 class="title">Login</h2>
                            <nav class="breadcrumb-area">
                                <ul class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-sep">//</li>
                                    <li>Login</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Page Header Area Wrapper ==-->

        <!--== Start My Account Area Wrapper ==-->
        <section class="account-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="login-form-content">
                            <form action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="username">Username or email address <span
                                                    class="required">*</span></label>
                                            <input id="username" class="form-control" type="email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="password">Password <span class="required">*</span></label>
                                            <input id="password" class="form-control" type="password">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <a class="btn-login" href="<?php echo e(('#')); ?>">Login</a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group account-info-group mb--0">
                                            <div class="rememberme-account">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">Remember me</label>
                                                </div>
                                            </div>
                                            <a class="lost-password" href="<?php echo e(route('user-register')); ?>">Lost your password?</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== Start Feature Area Wrapper ==-->
        <div class="feature-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="feature-icon-box">
                            <div class="icon-box">
                                <img class="icon-img" src="<?php echo e(asset('web/assets/img/icons/f1.webp')); ?>" width="46" height="34"
                                    alt="Icon-HasTech">
                            </div>
                            <div class="content">
                                <h5 class="title">Free Shipping</h5>
                                <p>Capped at $39 per order</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="feature-icon-box">
                            <div class="icon-box">
                                <img class="icon-img" src="<?php echo e(asset('web/assets/img/icons/f2.webp')); ?>" width="43" height="34"
                                    alt="Icon-HasTech">
                            </div>
                            <div class="content">
                                <h5 class="title">Card Payments</h5>
                                <p>12 Months Installments</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="feature-icon-box">
                            <div class="icon-box">
                                <img class="icon-img" src="<?php echo e(asset('web/assets/img/icons/f3.webp')); ?>" width="39" height="39"
                                    alt="Icon-HasTech">
                            </div>
                            <div class="content">
                                <h5 class="title">Easy Returns</h5>
                                <p>Shop With Confidence</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="feature-icon-box">
                            <div class="icon-box">
                                <img class="icon-img" src="<?php echo e(asset('web/assets/img/icons/f4.webp')); ?>" width="36" height="39"
                                    alt="Icon-HasTech">
                            </div>
                            <div class="content">
                                <h5 class="title">24/7 Support</h5>
                                <p>Contact 24 hours everyday</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\personal\paw-and-care\resources\views/layouts/web/profile/login/index.blade.php ENDPATH**/ ?>