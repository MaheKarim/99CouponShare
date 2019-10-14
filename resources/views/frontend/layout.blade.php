

<!DOCTYPE html>

<html lang="en" dir="ltr" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- META TAGS                                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile specific meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>
        @yield('title')
    </title>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- SEO METAS                                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="description" content="FRIDAY is a responsive multipurpose-ecommerce site template allows you to store coupons and promo codes from different brands and create store for deals, discounts, It can be used as coupon website such as groupon.com and also as online store">
    <meta name="black friday, coupon, coupon codes, coupon theme, coupons, deal news, deals, discounts, ecommerce, friday deals, groupon, promo codes, responsive, shop, store coupons">
    <meta name="robots" content="index, follow">
    <meta name="author" content="CODASTROID">

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- PAGE FAVICON                              -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="apple-touch-icon" href="{{asset('/frontend')}}/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" href="{{asset('/frontend')}}/assets/images/favicon/favicon.ico">

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- GOOGLE FONTS                              -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Include CSS Filess                        -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->

    <!-- Bootstrap -->
    <link href="{{asset('/frontend')}}/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{asset('/frontend')}}/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Linearicons -->
    <link href="{{asset('/frontend')}}/assets/vendors/linearicons/css/linearicons.css" rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="{{asset('/frontend')}}/assets/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('/frontend')}}/assets/vendors/owl-carousel/owl.theme.min.css" rel="stylesheet">

    <!-- Flex Slider -->
    <link href="{{asset('/frontend')}}/assets/vendors/flexslider/flexslider.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('/frontend')}}/assets/css/base.css" rel="stylesheet">
    <link href="{{asset('/frontend')}}/assets/css/style.css" rel="stylesheet">

</head>

<body id="body" class="wide-layout preloader-active">

    

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- PRELOADER                                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Preloader -->
    <div id="preloader" class="preloader">
        <div class="loader-cube">
            <div class="loader-cube__item1 loader-cube__item"></div>
            <div class="loader-cube__item2 loader-cube__item"></div>
            <div class="loader-cube__item4 loader-cube__item"></div>
            <div class="loader-cube__item3 loader-cube__item"></div>
        </div>
    </div>
    <!-- End Preloader -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- WRAPPER                                   -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <div id="pageWrapper" class="page-wrapper">
        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->
       @include('frontend._inc.navbar')
        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->

        <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
        <main id="mainContent" class="main-content">
            <div class="page-container ptb-10">
                <div class="container">

                    <!-- Notification Start Here -->
                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                       @endif
                    <!-- Notification End Here -->

                     


                 @yield('content')
                </div>
            </div>
        </main>
        <!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->
         @include('frontend.footer')
        <!-- –––––––––––––––[ END FOOTER ]––––––––––––––– -->

    </div>
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- END WRAPPER                               -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->

    <!-- ========== BUY THEME ========== -->
    <a href="https://google.com/" class="buy-theme" data-href="https://themeforest.net/item/friday-coupons-deals-discounts-promo-codes-template/19577226?ref=CODASTROID" target="_blank" id="buy_theme">
        <i class="fa fa-credit-card"></i>
    </a>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- BACK TO TOP                               -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <div id="backTop" class="back-top is-hidden-sm-down">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

     @include('frontend._inc.script')
</body>


<!-- Mirrored from friday-theme.firebaseapp.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Oct 2019 21:17:46 GMT -->
</html>