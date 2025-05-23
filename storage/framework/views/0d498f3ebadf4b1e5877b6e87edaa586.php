<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Tuime - Animal Food Website Template" />
  <meta name="keywords" content="accessories, digital products, electronic html, modern, products, responsive" />
  <meta name="author" content="hastech" />

  <title>paw&care</title>

  <!--== Favicon ==-->
  <!-- <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" /> -->

  <!--== Google Fonts ==-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600&display=swap"
    rel="stylesheet">

  <!--== Bootstrap CSS ==-->
  <link href="<?php echo e(asset('web/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" />
  <!--== Font Awesome Min Icon CSS ==-->
  <link href="<?php echo e(asset('web/assets/css/font-awesome.min.css')); ?>" rel="stylesheet" />
  <!--== 7 Stroke Icon CSS ==-->
  <link href="<?php echo e(asset('web/assets/css/pe-icon-7-stroke.css')); ?>" rel="stylesheet" />
  <!--== Swiper CSS ==-->
  <link href="<?php echo e(asset('web/assets/css/swiper.min.css')); ?>" rel="stylesheet" />
  <!--== Fancybox Min CSS ==-->
  <link href="<?php echo e(asset('web/assets/css/fancybox.min.css')); ?>" rel="stylesheet" />
  <!--== Range Slider Min CSS ==-->
  <link href="<?php echo e(asset('web/assets/css/ion.rangeSlider.min.css')); ?>" rel="stylesheet" />
  <!--== Main Style CSS ==-->
  <link href="<?php echo e(asset('web/assets/css/style.css')); ?>" rel="stylesheet" />

</head>

<body>

  <!--wrapper start-->
  <div class="wrapper">

    <!--== Start Preloader Content ==-->
    <div class="preloader-wrap">
      <div class="preloader">
        <div class="dog-head"></div>
        <div class="dog-body"></div>
      </div>
    </div>
    <!--== End Preloader Content ==-->
    <?php echo $__env->yieldContent('content'); ?>
    
    <?php echo $__env->make('layouts.web.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  </div>

  <!--=======================Javascript============================-->

  <!--=== jQuery Modernizr Min Js ===-->
  <script src="<?php echo e(asset('web/assets/js/modernizr.js')); ?>"></script>
  <!--=== jQuery Min Js ===-->
  <script src="<?php echo e(asset('web/assets/js/jquery-main.js')); ?>"></script>
  <!--=== jQuery Migration Min Js ===-->
  <script src="<?php echo e(asset('web/assets/js/jquery-migrate.js')); ?>"></script>
  <!--=== jQuery Popper Min Js ===-->
  <script src="<?php echo e(asset('web/assets/js/popper.min.js')); ?>"></script>
  <!--=== jQuery Bootstrap Min Js ===-->
  <script src="<?php echo e(asset('web/assets/js/bootstrap.min.js')); ?>"></script>
  <!--=== jQuery Swiper Min Js ===-->
  <script src="<?php echo e(asset('web/assets/js/swiper.min.js')); ?>"></script>
  <!--=== jQuery Fancybox Min Js ===-->
  <script src="<?php echo e(asset('web/assets/js/fancybox.min.js')); ?>"></script>
  <!--=== jQuery Countdown Min Js ===-->
  <script src="<?php echo e(asset('web/assets/js/countdown.js')); ?>"></script>
  <!--=== jQuery Isotope Min Js ===-->
  <script src="<?php echo e(asset('web/assets/js/isotope.pkgd.min.js')); ?>"></script>
  <!--=== jQuery Range Slider Min Js ===-->
  <script src="<?php echo e(asset('web/assets/js/ion.rangeSlider.min.js')); ?>"></script>
  <!--=== jQuery Custom Js ===-->
  <script src="<?php echo e(asset('web/assets/js/custom.js')); ?>"></script>


</body>

</html><?php /**PATH C:\laragon\www\personal\paw-and-care\resources\views/layouts/web/app.blade.php ENDPATH**/ ?>