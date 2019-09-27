<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>
        @yield('title', 'HomePage')
    </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="{{ asset('/') }}images/favicon.ico">
	<link rel="apple-touch-icon" href="{{ asset('/') }}images/icon.png">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('/') }}css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('/') }}css/plugins.css">
	<link rel="stylesheet" href="{{ asset('/') }}style.css">

	<!-- Cusom css -->
   <link rel="stylesheet" href="{{ asset('/') }}css/custom.css">

	<!-- Modernizer js -->
<script src="{{ asset('/') }}js/vendor/modernizr-3.5.0.min.js"></script>
</head>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Add your site or application content here -->
	
	<!-- <div class="fakeloader"></div> -->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Start Header Area -->
        <header class="htc__header bg--white">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-sm-4 col-md-6 order-1 order-lg-1">
                            <div class="logo">
                                <a href="index.html">
                                <img src="{{ asset('/') }}images/logo/foody.png" alt="logo images">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-4 col-md-2 order-3 order-lg-2">
                            <div class="main__menu__wrap">
                                <nav class="main__menu__nav d-none d-lg-block">
                                    <ul class="mainmenu">
                                        <li class="drop"><a href="index.html">Home</a>
                                            <ul class="dropdown__menu">
                                                <li><a href="index.html">Home Food Delivery</a></li>
                                                <li><a href="index-2.html">Home Pizza Delivery</a></li>
                                                <li><a href="index-3.html">Home Backery Delivery</a></li>
                                                <li><a href="index-4.html">Home Box Layout</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about-us.html">About</a></li>
                                        <li class="drop"><a href="menu-grid.html">Menu</a>
                                            <ul class="dropdown__menu">
                                                <li><a href="menu-grid.html">Menu Grid</a></li>
                                                <li><a href="menu-list.html">Menu List</a></li>
                                                <li><a href="menu-details.html">Menu Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li class="drop"><a href="blog-list.html">Blog</a>
                                            <ul class="dropdown__menu">
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-mesonry.html">Blog mesonry</a></li>
                                                <li><a href="blog-grid-left-sidebar.html">Blog Grid</a></li>
                                                <li><a href="blog-list-right-sidebar.html">Blog List with right sidebar</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="drop"><a href="#">Pages</a>
                                            <ul class="dropdown__menu">
                                                <li><a href="service.html">Service</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                                <li><a href="contact.html">Contact Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-4 col-md-4 order-2 order-lg-3">
                            <div class="header__right d-flex justify-content-end">
                                <div class="log__in">
                                    <a class="accountbox-trigger" href="#"><i class="zmdi zmdi-account-o"></i></a>
                                </div>
                                <div class="shopping__cart">
                                    <a class="minicart-trigger" href="#"><i class="zmdi zmdi-shopping-basket"></i></a>
                                    <div class="shop__qun">
                                        <span>03</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                        <div class="mobile-menu d-block d-lg-none"></div>
                    <!-- Mobile Menu -->
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Area -->
        <!-- Start Slider Area -->
        <div class="slider__area slider--two">
            <div class="slider__activation--1">
                <!-- Start Single Slide -->
                <div class="slide fullscreen bg-image--7 poss--relative">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="slider__content">
                                    <div class="slider__inner">
                                        <div class="slider__text__img">
                                            <img class="layear-1" src="{{ asset('/') }}images/slider/text/2.png" alt="slider text image">
                                            <img class="layear-2" src="{{ asset('/') }}images/slider/text/1.png" alt="slider text image">
                                        </div>
                                        <div class="slider__input">
                                            <input type="text" placeholder="Type Place, City.Division">
                                            <input class="res__search" type="text" placeholder="Restaurant">
                                            <div class="src__btn">
                                                <a href="#">Search</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide__pizza">
                    <img src="{{ asset('/') }}images/shape/slider-pizza.png" alt="pizza images">
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>
        <!-- End Slider Area -->
        <!-- Start About Area -->
        <section class="fd__about__area section-padding--lg bg--white">
            <div class="container">
                <div class="row">
                    <!-- Start Single About -->
                    <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center">
                        <div class="fd__about__center foo">
                            <div class="fd__about">
                                <div class="section__title service__align--left">
                                    <p>Best product, Best service</p>
                                    <h2 class="title__line">About Aahar</h2>
                                </div>
                                <h4>Best Service  For Our Customer</h4>
                                <p>Lorem ipsum dolor sit amet, cotnsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single About -->
                    <!-- Start Single Adout -->
                    <div class="col-lg-4 col-md-6 col-sm-12 sm--mt--40 md--mt--40">
                        <div class="about wow fadeInRight" data-wow-delay="0.2s">
                            <div class="about__thumb">
                                <img src="{{ asset('/') }}images/about/1.jpg" alt="about images">
                                <div class="pro__offer">
                                    <div class="pro__offer__inner">
                                        <div class="pro__offer__inner__inner">
                                            <span class="fd__diccount">50%</span>
                                            <span>Discount</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about__details">
                                <h2>For All <span>“Montanara”</span> Pizza</h2>
                                <p>Don’t Delay to Order</p>
                                <div class="about__btn">
                                    <a class="food__btn white--btn" href="about-us.html">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Adout -->
                    <!-- Start Single Adout -->
                    <div class="col-lg-4 col-md-6 col-sm-12 md--mt--40 sm--mt--40">
                        <div class="about bg--yellow wow fadeInRight" data-wow-delay="0.3s">
                            <div class="about__thumb">
                                <img src="{{ asset('/') }}images/about/2.jpg" alt="about images">
                                <div class="pro__offer">
                                    <div class="pro__offer__inner">
                                        <div class="pro__offer__inner__inner">
                                            <span class="fd__diccount">50%</span>
                                            <span>Discount</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about__details">
                                <h2>For All <span>“Montanara”</span> Pizza</h2>
                                <p>Don’t Delay to Order</p>
                                <div class="about__btn">
                                    <a class="food__btn white--btn" href="about-us.html">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Adout -->
                </div>
            </div>
        </section>
        <!-- End About Area -->
        <!-- Start Our Pizza Area -->
        <section class="fd__pizza__area bg-image--25 section-padding--lg" style="background-image: url('{{ asset('/') }}images/bg/9.jpg')">
            <div class="bg__cat">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__title service__align--left">
                                <p>The process of our service </p>
                                <h2 class="title__line">Our Special Pizza</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--40">
                        <!-- Start Single Pizza -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="pizza foo">
                                <div class="pizza__thumb">
                                    <img src="{{ asset('/') }}images/product/pizza/1.jpg" alt="pizza images">
                                    <div class="pizza__hover__action">
                                        <span class="pizza__prize">$80</span>
                                    </div>
                                </div>
                                <div class="pizza__details">
                                    <h2 class="pizza__title"><a href="menu-details.html">Montanara</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectadipisicing labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <div class="pizza__btn">
                                        <a class="food__btn white--btn theme--hover" href="menu-details.html">Order Online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Pizza -->
                        <!-- Start Single Pizza -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="pizza foo">
                                <div class="pizza__thumb">
                                    <img src="{{ asset('/') }}images/product/pizza/1.jpg" alt="pizza images">
                                    <div class="pizza__hover__action">
                                        <span class="pizza__prize">$50</span>
                                    </div>
                                </div>
                                <div class="pizza__details">
                                    <h2 class="pizza__title"><a href="menu-details.html">Pepperoni</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectadipisicing labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <div class="pizza__btn">
                                        <a class="food__btn white--btn theme--hover" href="menu-details.html">Order Online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Pizza -->
                        <!-- Start Single Pizza -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="pizza foo">
                                <div class="pizza__thumb">
                                    <img src="{{ asset('/') }}images/product/pizza/1.jpg" alt="pizza images">
                                    <div class="pizza__hover__action">
                                        <span class="pizza__prize">$70</span>
                                    </div>
                                </div>
                                <div class="pizza__details">
                                    <h2 class="pizza__title"><a href="menu-details.html">Supreme</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectadipisicing labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <div class="pizza__btn">
                                        <a class="food__btn white--btn theme--hover" href="menu-details.html">Order Online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Pizza -->
                    </div>
                </div>
            </div>
            <div class="order-now-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="fd__order__now text-center">
                                <div class="order__now__inner">
                                    <h6>We Offer Free Delivery</h6>
                                    <h2>Order Now: +123654789</h2>
                                    <p>Extremely thin ,juicy,cheeze,fluffy,crispy & light weight Pizza</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Pizza Area -->
        <!-- Start Counter Up Area -->
        <section class="fd__counterup__area funfact--2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="counter__up__inner d-flex flex-wrap flex-lg-nowrap flex-md-nowrap justify-content-between text-center">
                            <!-- Start Single Fact -->
                            <div class="funfact">
                                <div class="fact__details">
                                    <div class="funfact__count__inner">
                                        <div class="fact__icon">
                                            <img src="{{ asset('/') }}images/icon/flat-icon/1.png" alt="flat icon">
                                        </div>
                                        <div class="fact__count ">
                                            <span class="count">2456</span>
                                        </div>
                                    </div>
                                    <div class="fact__title">
                                        <h2>Food</h2>
                                    </div>
                                </div>
                            </div> 
                            <!-- End Single Fact -->
                            <!-- Start Single Fact -->
                            <div class="funfact">
                                <div class="fact__details">
                                    <div class="funfact__count__inner">
                                        <div class="fact__icon">
                                            <img src="{{ asset('/') }}images/icon/flat-icon/2.png" alt="flat icon">
                                        </div>
                                        <div class="fact__count">
                                            <span class="count">2056</span>
                                        </div>
                                    </div>
                                    <div class="fact__title">
                                        <h2>Chef</h2>
                                    </div>
                                </div>
                            </div> 
                            <!-- End Single Fact -->
                            <!-- Start Single Fact -->
                            <div class="funfact">
                                <div class="fact__details">
                                    <div class="funfact__count__inner">
                                        <div class="fact__icon">
                                            <img src="{{ asset('/') }}images/icon/flat-icon/3.png" alt="flat icon">
                                        </div>
                                        <div class="fact__count ">
                                            <span class="count">3000</span>
                                        </div>
                                    </div>
                                    <div class="fact__title">
                                        <h2>Menu</h2>
                                    </div>
                                </div>
                            </div> 
                            <!-- End Single Fact -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counter Up Area -->
        <!-- Start Resturant MEnu -->
    <section class="resturent__food__menu bg-image--8 section-padding--lg" style="background-image: url('{{ asset('/') }}images/bg/8.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section__title service__align--center">
                            <p>All delicious pizza menu  for pizza lovers</p>
                            <h2 class="title__line">Restaurant with Special Menu</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="resturent__food__menu plr--250px mt--80 d-flex flex-wrap">
                <!-- Start Single Resturent Food -->
                <div class="single__resturent__food d-flex">
                    <div class="resturent__thumb">
                        <a href="menu-details.html">
                            <img src="{{ asset('/') }}images/product/restu/1.png" alt="resturent image">
                        </a>
                    </div>
                    <div class="resturent__details d-flex flex-column justify-content-center">
                        <ul class="res__pizz__size d-flex justify-content-center">
                            <li>small <span>$20</span></li>
                            <li>Medium <span>$40</span></li>
                            <li>Large <span>$50</span></li>
                        </ul>
                        <h4><a href="menu-details.html">Maxican Food Fev</a></h4>
                        <h6>Friends & Family Restaurant</h6>
                        <p>Provolone is the second most popular one. Cheddar may be mixed with Mozzarella to preserve armesan may be added to the top of a pizza,</p>
                        <div class="res__btn">
                            <a class="food__btn" href="menu-details.html">Order Now</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Resturent Food -->
                <!-- Start Single Resturent Food -->
                <div class="single__resturent__food d-flex">
                    <div class="resturent__thumb">
                        <a href="menu-details.html">
                            <img src="{{ asset('/') }}images/product/restu/2.png" alt="resturent image">
                        </a>
                    </div>
                    <div class="resturent__details d-flex flex-column justify-content-center">
                        <ul class="res__pizz__size d-flex justify-content-center">
                            <li>small <span>$20</span></li>
                            <li>Medium <span>$20</span></li>
                            <li>Large <span>$60</span></li>
                        </ul>
                        <h4><a href="menu-details.html">Italian Pizza Fev</a></h4>
                        <h6>Friends & Family Restaurant</h6>
                        <p>Provolone is the second most popular one. Cheddar may be mixed with Mozzarella to preserve armesan may be added to the top of a pizza,</p>
                        <div class="res__btn">
                            <a class="food__btn" href="menu-details.html">Order Now</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Resturent Food -->
                <!-- Start Single Resturent Food -->
                <div class="single__resturent__food d-flex">
                    <div class="resturent__thumb">
                        <a href="menu-details.html">
                            <img src="{{ asset('/') }}images/product/restu/3.png" alt="resturent image">
                        </a>
                    </div>
                    <div class="resturent__details d-flex flex-column justify-content-center">
                        <ul class="res__pizz__size d-flex justify-content-center">
                            <li>small <span>$30</span></li>
                            <li>Medium <span>$40</span></li>
                            <li>Large <span>$20</span></li>
                        </ul>
                        <h4><a href="menu-details.html">Mozzarela Cheez Pizza</a></h4>
                        <h6>Friends & Family Restaurant</h6>
                        <p>Provolone is the second most popular one. Cheddar may be mixed with Mozzarella to preserve armesan may be added to the top of a pizza,</p>
                        <div class="res__btn">
                            <a class="food__btn" href="menu-details.html">Order Now</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Resturent Food -->
                <!-- Start Single Resturent Food -->
                <div class="single__resturent__food d-flex">
                    <div class="resturent__thumb">
                        <a href="menu-details.html">
                            <img src="{{ asset('/') }}images/product/restu/4.png" alt="resturent image">
                        </a>
                    </div>
                    <div class="resturent__details d-flex flex-column justify-content-center">
                        <ul class="res__pizz__size d-flex justify-content-center">
                            <li>small <span>$10</span></li>
                            <li>Medium <span>$60</span></li>
                            <li>Large <span>$20</span></li>
                        </ul>
                        <h4><a href="menu-details.html">Mozzarela Cheez Pizza</a></h4>
                        <h6>Friends & Family Restaurant</h6>
                        <p>Provolone is the second most popular one. Cheddar may be mixed with Mozzarella to preserve armesan may be added to the top of a pizza,</p>
                        <div class="res__btn">
                            <a class="food__btn" href="menu-details.html">Order Now</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Resturent Food -->
            </div>
        </section>
        <!-- End Resturant MEnu -->
        <!-- Start Clint Demand Area -->
        <section class="clint__demand__area section-padding--lg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section__title service__align--center">
                            <p>The process of our service </p>
                            <h2 class="title__line">Most popular Cuisine For Client Demand</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--40">
                    <!-- Start Single Clint Demand -->
                    <div class="col-lg-4 col-md-6">
                        <div class="clint__demand">
                            <div class="clnt__demand__thumb">
                                <img src="{{ asset('/') }}images/product/popular/1.png" alt="Demand images">
                            </div>
                            <div class="clnt__thumb__hover">
                                <div class="clnt__thumb__hover__action wow zoomIn" data-wow-delay="0.2s">
                                    <img src="{{ asset('/') }}images/product/popular/sm-img/1.png" alt="small images">
                                </div>
                                <div class="demand__food__prize">
                                    <span>$80</span>
                                </div>  
                            </div>
                            <div class="clint__demand__inner">
                                <h4><a href="menu-details.html">Friends Restaurant</a></h4>
                                <div class="clt__delevery__time">
                                    <p>Food Type :Mixed Fruit Custard</p>
                                    <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                </div>
                                <ul class="rating">
                                    <li><i class="zmdi zmdi-star"></i></li>
                                    <li><i class="zmdi zmdi-star"></i></li>
                                    <li><i class="zmdi zmdi-star"></i></li>
                                    <li><i class="zmdi zmdi-star"></i></li>
                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Clint Demand -->
                    <!-- Start Single Clint Demand -->
                    <div class="col-lg-4 col-md-6">
                        <div class="clint__demand">
                            <div class="clnt__demand__thumb">
                                <img src="{{ asset('/') }}images/product/popular/2.png" alt="Demand images">
                            </div>
                            <div class="clnt__thumb__hover">
                                <div class="clnt__thumb__hover__action wow zoomIn" data-wow-delay="0.3s">
                                    <img src="{{ asset('/') }}images/product/popular/sm-img/2.png" alt="small images">
                                </div>
                                <div class="demand__food__prize">
                                    <span>$80</span>
                                </div>  
                            </div>
                            <div class="clint__demand__inner">
                                <h4><a href="menu-details.html">Italian Pizza Fev</a></h4>
                                <div class="clt__delevery__time">
                                    <p>Food Type :Mixed Fruit Custard</p>
                                    <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                </div>
                                <ul class="rating">
                                    <li><i class="zmdi zmdi-star"></i></li>
                                    <li><i class="zmdi zmdi-star"></i></li>
                                    <li><i class="zmdi zmdi-star"></i></li>
                                    <li><i class="zmdi zmdi-star"></i></li>
                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Clint Demand -->
                    <!-- Start Single Clint Demand -->
                    <div class="col-lg-4 col-md-6">
                        <div class="clint__demand">
                            <div class="clnt__demand__thumb">
                                <img src="{{ asset('/') }}images/product/popular/1.png" alt="Demand images">
                            </div>
                            <div class="clnt__thumb__hover">
                                <div class="clnt__thumb__hover__action wow zoomIn" data-wow-delay="0.4s">
                                    <img src="{{ asset('/') }}images/product/popular/sm-img/3.png" alt="small images">
                                </div>
                                <div class="demand__food__prize">
                                    <span>$80</span>
                                </div>  
                            </div>
                            <div class="clint__demand__inner">
                                <h4><a href="menu-details.html">Asian Food Fev</a></h4>
                                <div class="clt__delevery__time">
                                    <p>Food Type :Mixed Fruit Custard</p>
                                    <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                </div>
                                <ul class="rating">
                                    <li><i class="zmdi zmdi-star"></i></li>
                                    <li><i class="zmdi zmdi-star"></i></li>
                                    <li><i class="zmdi zmdi-star"></i></li>
                                    <li><i class="zmdi zmdi-star"></i></li>
                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Clint Demand -->
                </div>
            </div>
        </section>
        <!-- End Clint Demand Area -->
        <!-- Start Testimonial Area -->
        <section class="fd__testimonial__area testimonial--2 bg-image--9 ptb--150" style="background-image: url('{{ asset('/') }}images/bg/9.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="fd__testimonial__container testimonial__activation--2">
                            <!-- Start Single Testimonial -->
                            <div class="single__testimonial d-flex justify-content-between flex-wrap">
                                <!-- Start Testimonial -->
                                <div class="testimonial-2">
                                    <p>Lorem ipsum dolor samconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. veniam,</p>
                                    <div class="fd__test__info">
                                        <h6>Mily Cyrus</h6>
                                        <span>Food Expert</span>
                                    </div>
                                </div>
                                <!-- End Testimonial -->
                                <!-- Start Testimonial -->
                                <div class="testimonial-2">
                                    <p>Lorem ipsum dolor samconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. veniam,</p>
                                    <div class="fd__test__info">
                                        <h6>Mily Cyrus</h6>
                                        <span>Food Expert</span>
                                    </div>
                                </div>
                                <!-- End Testimonial -->
                            </div>
                            <!-- End Single Testimonial -->
                            <!-- Start Single Testimonial -->
                            <div class="single__testimonial d-flex justify-content-between flex-wrap">
                                <!-- Start Testimonial -->
                                <div class="testimonial-2">
                                    <p>Lorem ipsum dolor samconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. veniam,</p>
                                    <div class="fd__test__info">
                                        <h6>Mily Cyrus</h6>
                                        <span>Food Expert</span>
                                    </div>
                                </div>
                                <!-- End Testimonial -->
                                <!-- Start Testimonial -->
                                <div class="testimonial-2">
                                    <p>Lorem ipsum dolor samconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. veniam,</p>
                                    <div class="fd__test__info">
                                        <h6>Mily Cyrus</h6>
                                        <span>Food Expert</span>
                                    </div>
                                </div>
                                <!-- End Testimonial -->
                            </div>
                            <!-- End Single Testimonial -->
                            <!-- Start Single Testimonial -->
                            <div class="single__testimonial d-flex justify-content-between flex-wrap">
                                <!-- Start Testimonial -->
                                <div class="testimonial-2">
                                    <p>Lorem ipsum dolor samconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. veniam,</p>
                                    <div class="fd__test__info">
                                        <h6>Mily Cyrus</h6>
                                        <span>Food Expert</span>
                                    </div>
                                </div>
                                <!-- End Testimonial -->
                                <!-- Start Testimonial -->
                                <div class="testimonial-2">
                                    <p>Lorem ipsum dolor samconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. veniam,</p>
                                    <div class="fd__test__info">
                                        <h6>Mily Cyrus</h6>
                                        <span>Food Expert</span>
                                    </div>
                                </div>
                                <!-- End Testimonial -->
                            </div>
                            <!-- End Single Testimonial -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial Area -->
        <!-- Start Subscribe Area -->
        <section class="fd__subscribe__area bg--white subscribe--2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="subscribe__inner">
                            <h2>Subscribe to our newsletter</h2>
                            <div id="mc_embed_signup">
                                <div id="enter__email__address">
                                    <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                            <div class="news__input">
                                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter Your E-mail Address" required>
                                            </div>
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                            <div class="clearfix subscribe__btn"><input type="submit" value="Send Now" name="subscribe" id="mc-embedded-subscribe" class="sign__up food__btn">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Subscribe Area -->
        <!-- Start Banner Area -->
        <div class="banner__area d-flex instagram__activation owl-carousel owl-theme">
            <div class="banner">
                <img src="{{ asset('/') }}images/product/ins/1.jpg" alt="images">
                <a href="#"><i class="zmdi zmdi-instagram"></i></a>
            </div>
            <div class="banner">
                <img src="{{ asset('/') }}images/product/ins/2.jpg" alt="images">
                <a href="#"><i class="zmdi zmdi-instagram"></i></a>
            </div>
            <div class="banner">
                <img src="{{ asset('/') }}images/product/ins/3.jpg" alt="images">
                <a href="#"><i class="zmdi zmdi-instagram"></i></a>
            </div>
            <div class="banner">
                <img src="{{ asset('/') }}images/product/ins/4.jpg" alt="images">
                <a href="#"><i class="zmdi zmdi-instagram"></i></a>
            </div>
            <div class="banner">
                <img src="{{ asset('/') }}images/product/ins/5.jpg" alt="images">
                <a href="#"><i class="zmdi zmdi-instagram"></i></a>
            </div>
        </div>
        <!-- End Banner Area -->
        <!-- Start Footer Area -->
        <footer class="footer__area footer--1">
            <div class="footer__wrapper bg__cat--1 section-padding--lg">
                <div class="container">
                    <div class="row">
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="footer">
                                <h2 class="ftr__title">About Aahar</h2>
                                <div class="footer__inner">
                                    <div class="ftr__details">
                                        <p>Lorem ipsum dolor sit amconsectetur adipisicing elit,</p>
                                        <div class="ftr__address__inner">
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-home"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p>Elizabeth Tower. 6th Floor Medtown, New York</p>
                                                </div>
                                            </div>
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-phone"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p><a href="#">+088 01673-453290</a></p>
                                                    <p><a href="#">+088 01773-458290</a></p>
                                                </div>
                                            </div>
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-email"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p><a href="#">Aahardelivery@email.com</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="social__icon">
                                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12 sm--mt--40">
                            <div class="footer gallery">
                                <h2 class="ftr__title">Our Gallery</h2>
                                <div class="footer__inner">
                                    <ul class="sm__gallery__list">
                                        <li><a href="#"><img src="{{ asset('/') }}images/gallery/sm-img/1.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="{{ asset('/') }}images/gallery/sm-img/5.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="{{ asset('/') }}images/gallery/sm-img/3.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="{{ asset('/') }}images/gallery/sm-img/6.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="{{ asset('/') }}images/gallery/sm-img/5.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="{{ asset('/') }}images/gallery/sm-img/6.jpg" alt="gallery images"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12 md--mt--40 sm--mt--40">
                            <div class="footer">
                                <h2 class="ftr__title">Opening Time</h2>
                                <div class="footer__inner">
                                    <ul class="opening__time__list">
                                        <li>Saturday<span>.......</span>9am to 11pm</li>
                                        <li>Sunday<span>.......</span>9am to 11pm</li>
                                        <li>Monday<span>.......</span>9am to 11pm</li>
                                        <li>Tuesday<span>.......</span>9am to 11pm</li>
                                        <li>Wednesday<span>.......</span>9am to 11pm</li>
                                        <li>Thursday<span>.......</span>9am to 11pm</li>
                                        <li>Friday<span>.......</span>9am to 11pm</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12 md--mt--40 sm--mt--40">
                            <div class="footer">
                                <h2 class="ftr__title">Latest Post</h2>
                                <div class="footer__inner">
                                    <div class="lst__post__list">
                                        <div class="single__sm__post">
                                            <div class="sin__post__thumb">
                                                <a href="blog-details,html">
                                                    <img src="{{ asset('/') }}images/blog/sm-img/1.jpg" alt="blog images">
                                                </a>
                                            </div>
                                            <div class="sin__post__details">
                                                <h6><a href="blog-details.html">chicken Shawarma </a></h6>
                                                <p>Lordoloram consecte turadip isicing</p>
                                            </div>
                                        </div>
                                        <div class="single__sm__post">
                                            <div class="sin__post__thumb">
                                                <a href="blog-details,html">
                                                    <img src="{{ asset('/') }}images/blog/sm-img/2.jpg" alt="blog images">
                                                </a>
                                            </div>
                                            <div class="sin__post__details">
                                                <h6><a href="blog-details.html">chicken Shawarma </a></h6>
                                                <p>Lordoloramcon secte turadipi sicing</p>
                                            </div>
                                        </div>
                                        <div class="single__sm__post">
                                            <div class="sin__post__thumb">
                                                <a href="blog-details,html">
                                                    <img src="{{ asset('/') }}images/blog/sm-img/3.jpg" alt="blog images">
                                                </a>
                                            </div>
                                            <div class="sin__post__details">
                                                <h6><a href="blog-details.html">chicken Shawarma </a></h6>
                                                <p>Lordoloramcon secte turadip isicing</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                    </div>
                </div>
            </div>
            <div class="copyright bg--theme">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="copyright__inner">
                                <div class="cpy__right--left">
                                    <p>@All Right Reserved.<a href="https://devitems.com">Devitems</a></p>
                                </div>
                                <div class="cpy__right--right">
                                    <a href="#">
                                    <img src="{{ asset('/') }}images/icon/shape/2.png" alt="payment images">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->
        <!-- Login Form -->
        <div class="accountbox-wrapper">
            <div class="accountbox text-left">
                <ul class="nav accountbox__filters" id="myTab" role="tablist">
                    <li>
                        <a class="active" id="log-tab" data-toggle="tab" href="#log" role="tab" aria-controls="log" aria-selected="true">Login</a>
                    </li>
                    <li>
                        <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                    </li>
                </ul>
                <div class="accountbox__inner tab-content" id="myTabContent">
                    <div class="accountbox__login tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="log-tab">
                        <form action="#">
                            <div class="single-input">
                                <input class="cr-round--lg" type="text" placeholder="User name or email">
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="password" placeholder="Password">
                            </div>
                            <div class="single-input">
                                <button type="submit" class="food__btn"><span>Go</span></button>
                            </div>
                            <div class="accountbox-login__others">
                                <h6>Or login with</h6>
                                <div class="social-icons">
                                    <ul>
                                        <li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="accountbox__register tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="#">
                            <div class="single-input">
                                <input class="cr-round--lg" type="text" placeholder="User name">
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="email" placeholder="Email address">
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="password" placeholder="Password">
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="password" placeholder="Confirm password">
                            </div>
                            <div class="single-input">
                                <button type="submit" class="food__btn"><span>Sign Up</span></button>
                            </div>
                        </form>
                    </div>
                    <span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
                </div>
            </div>
        </div><!-- //Login Form -->
            <!-- Cartbox -->
        <div class="cartbox-wrap">
            <div class="cartbox text-right">
                <button class="cartbox-close"><i class="zmdi zmdi-close"></i></button>
                <div class="cartbox__inner text-left">
                    <div class="cartbox__items">
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                <img src="{{ asset('/') }}images/blog/sm-img/1.jpg" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Vanila Muffin</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">$15</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="{{ asset('/') }}images/blog/sm-img/2.jpg" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Wheat Bread</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">$25</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="{{ asset('/') }}images/blog/sm-img/3.jpg" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Mixed Fruits Pie</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">$30</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                    </div>
                    <div class="cartbox__total">
                        <ul>
                            <li><span class="cartbox__total__title">Subtotal</span><span class="price">$70</span></li>
                            <li class="shipping-charge"><span class="cartbox__total__title">Shipping Charge</span><span class="price">$05</span></li>
                            <li class="grandtotal">Total<span class="price">$75</span></li>
                        </ul>
                    </div>
                    <div class="cartbox__buttons">
                        <a class="food__btn" href="cart.html"><span>View cart</span></a>
                        <a class="food__btn" href="checkout.html"><span>Checkout</span></a>
                    </div>
                </div>
            </div>
        </div><!-- //Cartbox -->  
	</div><!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="{{ asset('/') }}js/vendor/jquery-3.2.1.min.js"></script>
	<script src="{{ asset('/') }}js/popper.min.js"></script>
	<script src="{{ asset('/') }}js/bootstrap.min.js"></script>
	<script src="{{ asset('/') }}js/plugins.js"></script>
	<script src="{{ asset('/') }}js/active.js"></script>
</body>
</html>