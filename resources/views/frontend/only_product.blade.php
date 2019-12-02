@extends('frontend.layout')

@section('content')
<main id="mainContent" class="main-content">
        <!-- Page Container -->
        <div class="page-container ptb-60">
            <div class="container">
                <div class="row row-rl-10 row-tb-20">
                    <div class="page-content col-xs-12 col-sm-7 col-md-8">
                        <div class="row row-tb-20">
                            <div class="col-xs-12">
                                <div class="deal-deatails panel">
                                    <div class="deal-slider">
                                        <div id="product_slider" class="flexslider">
                                            <ul class="slides">
                                                <li>
                                                    <img alt="" src="{{ asset('storage') }}/{{ $productDetails->product_image }}">
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        
                                    </div>
                                    <div class="deal-body p-20">
                                        <h2 class="mb-10">{{ $productDetails->product_name }}</h2>
                                        <div class="rating mb-10">
                                            <span class="rating-stars" data-rating="3">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                        </div>
                                        <h2 class="price mb-15">Price: {{ $productDetails->product_disscount_prize }}    ৳ </h2>
                                        <h6 class="mb-15"> {{ $productDetails->product_description }}  </h6>
                                         </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="page-sidebar col-md-4 col-sm-5 col-xs-12">
                        <!-- Blog Sidebar -->
                        <aside class="sidebar blog-sidebar">
                            <div class="row row-tb-10">
                                <div class="col-xs-12">
                                    <div class="widget single-deal-widget panel ptb-30 prl-20">
                                        <div class="widget-body text-center">
                                            <h2 class="mb-20 h3">
                                                    {{ $productDetails->product_name }}
    </h2>
                                            <ul class="deal-meta list-inline mb-10 color-mid">
                                                <li><i class="ico fa fa-globe mr-10"></i><a href="#" class="color-mid">{{ $productDetails->Category->category_name }}</a>
                                                </li>
                                                <li><i class="ico fa fa-map-marker mr-10"></i>{{ $productDetails->Area->area_name }}</li>
                                               
                                            </ul>
                                            <p class="color-muted">
                                                    {!! str_limit($productDetails->product_description, 100) !!}   
                                            </p>
                                            <div class="price mb-20">
                                                <h2 class="price"><span class="price-sale"> ৳   {{ $productDetails->product_prize }}</span> ৳  {{ $productDetails->product_disscount_prize }}</h2>
                                            </div>
                                            <div class="buy-now mb-40">
                                                <a href="#" target="_blank" class="btn btn-block btn-lg">
                                                    <i class="fa fa-shopping-cart font-16 mr-10"></i> {{ $productDetails->product_coupon }}
                                                </a>
                                            </div>
                                            <div class="time-left mb-30">
                                                <p class="t-uppercase color-muted">
                                                    Hurry up Only a few deals left
                                                </p>
                                                <div class="color-mid font-14 font-lg-16">
        <i class="ico fa fa-clock-o mr-10"></i>
        <span data-countdown="{{ $productDetails->availability_date }}"></span>
      </div>
                                            </div>
                                            <ul class="list-inline social-icons social-icons--colored t-center">
                                                <li class="social-icons__item">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li class="social-icons__item">
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                               
                                                <li class="social-icons__item">
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <!-- Recent Posts -->
                                    <div class="widget about-seller-widget panel ptb-30 prl-20">
                                        <h3 class="widget-title h-title">About Seller</h3>
                                        <div class="widget-body t-center">
                                            <figure class="mt-20 pb-10">
                                                <img src="{{ asset('storage') }}/{{ $productDetails->Dokan->dokan_image }}" alt="">
                                            </figure>
                                            <div class="store-about mb-20">
                                                <h3 class="mb-10">{{ $productDetails->Dokan->dokan_name }}</h3>
                                              
                                                <p class="mb-15">{{ $productDetails->Dokan->dokan_description }}</p>
                                                <button class="btn btn-info">Call Us</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Recent Posts -->
                                </div>
                               
                                <div class="col-xs-12">
                                    <!-- Latest Deals Widegt -->
                                    
                </div>
            </div>
        </div>
        <!-- End Page Container -->


    </main>
@endsection