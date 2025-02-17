
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ijaboShop">
    <meta name="keywords" content="ijaboShop">
    <meta name="author" content="ijaboShop">
    <link rel="icon" href="/images/site/<?php echo e(get_settings()->site_favicon); ?>" type="image/x-icon">
    <title><?php echo $__env->yieldContent('pageTitle'); ?></title>
    <link type="text/css" rel="stylesheet" href="/front/css/animate.min.css" />
    <link type="text/css" rel="stylesheet" href="/front/css/vendors/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="/front/css/vendors/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="/front/css/vendors/feather-icon.css">
    <link type="text/css" rel="stylesheet" href="/front/css/vendors/slick/slick.css">
    <link type="text/css" rel="stylesheet" href="/front/css/vendors/slick/slick-theme.css">
    <link type="text/css" rel="stylesheet" href="/front/styles/icon-font.min.css" />
    <link type="text/css" rel="stylesheet" href="/front/css/vendors/animate.css">
    <link type="text/css" rel="stylesheet" href="/front/css/custom.css">
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    <?php echo $__env->yieldPushContent('stylesheets'); ?>
</head>

<body class="bg-effect">

    <!-- Header Start -->
    <?php echo $__env->make('front.layout.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Header End -->

    <!-- mobile menu start -->
    <?php echo $__env->make('front.layout.inc.mobile-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- mobile menu end -->

    <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer Section Start -->
    <?php echo $__env->make('front.layout.inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Footer Section End -->

   

    <!-- Tap to top start -->
    <div class="theme-option">
        <div class="back-to-top">
            <a id="back-to-top" href="#">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <!-- Tap to top end -->

    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->

    <script src="/front/js/jquery-3.6.0.min.js"></script>
    <script src="/front/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="/front/js/bootstrap/bootstrap-notify.min.js"></script>
    <script src="/front/js/bootstrap/popper.min.js"></script>
    <script src="/front/js/jquery-ui.min.js"></script>
    <script src="/front/js/feather/feather.min.js"></script>
    <script src="/front/js/feather/feather-icon.js"></script>
    <script src="/front/js/lazysizes.min.js"></script>
    <script src="/front/js/slick/slick.js"></script>
    <script src="/front/js/slick/slick-animation.min.js"></script>
    <script src="/front/js/slick/custom_slick.js"></script>
    <script src="/front/js/auto-height.js"></script>
    <script src="/front/js/timer.js"></script>
    <script src="/front/js/fly-cart.js"></script>
    <script src="/front/js/quantity-2.js"></script>
    <script src="/front/js/wow.min.js"></script>
    <script src="/front/js/custom-wow.js"></script>
    <script src="/front/js/script.js"></script>
    <script src="/front/js/settings.js"></script>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\Build-Laravel-10-Multi-Vendor-ECommerce-project-main\resources\views/front/layout/pages-layout.blade.php ENDPATH**/ ?>