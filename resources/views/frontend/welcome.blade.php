@extends('frontend.layout')
@section('title')
    99CouponShare
@endsection

@section('content')
                     {{-- @include('frontend.slider-content') --}}
                     <div class="section explain-process-area ptb-30">
                        <div class="row row-rl-10">
                                 <!-- Notification Start Here -->
                            @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                               @endif
                            <!-- Notification End Here -->
                            <div class="col-md-4">
                                <div class="item panel prl-15 ptb-20">
                                    <div class="row row-rl-5 row-xs-cell">
                                        <div class="col-xs-4 valign-middle">
                                            <img class="pr-10" src="{{asset('/frontend')}}/assets/images/icons/tablet.png" alt="">
                                        </div>
                                        <div class="col-xs-8">
                                            <h5 class="mb-10 pt-5">Deals & Coupons</h5>
                                            <p class="color-mid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aspernatur.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item panel prl-15 ptb-20">
                                    <div class="row row-rl-5 row-xs-cell">
                                        <div class="col-xs-4 valign-middle">
                                            <img class="pr-10" src="{{asset('/frontend')}}/assets/images/icons/online-shop-6.png" alt="">
                                        </div>
                                        <div class="col-xs-8">
                                            <h5 class="mb-10 pt-5">Find Best Offers</h5>
                                            <p class="color-mid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aspernatur.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item panel prl-15 ptb-20">
                                    <div class="row row-rl-5 row-xs-cell">
                                        <div class="col-xs-4 valign-middle">
                                            <img class="pr-10" src="{{asset('/frontend')}}/assets/images/icons/money.png" alt="">
                                        </div>
                                        <div class="col-xs-8">
                                            <h5 class="mb-10 pt-5">Save Money</h5>
                                            <p class="color-mid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aspernatur.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <section class="section latest-deals-area ptb-30">
                        <header class="panel ptb-15 prl-20 pos-r mb-30">
                            <h3 class="section-title font-18">Latest Deals</h3>
                            <a class="btn btn-o btn-xs pos-a right-10 pos-tb-center">View All</a>
                        </header>

                        <div class="row row-masnory row-tb-20">
                            <!-- Step Foreach For Product-->
                            @foreach ($products as $product)
                                
                    
                                <div class="col-sm-6 col-lg-4">
                                        <div class="deal-single panel">
                                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{ asset('storage') }}/{{ $product->product_image }}">
                                                <div class="label-discount left-20 top-15">-{{ $product->product_disscount_rate}}</div>
                                                <ul class="deal-actions top-15 right-20">
                                                    <li class="like-deal">
                                                        <span>
                                        <i class="fa fa-heart"></i>
                                    </span>
                                                    </li>
                                                    <li class="share-btn">
                                                        <div class="share-tooltip fade">
                                                            <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                            <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                            <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                            <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                        </div>
                                                        <span><i class="fa fa-share-alt"></i></span>
                                                    </li>
                                                    <li>
                                                        <span>
                                        <i class="fa fa-camera"></i>
                                    </span>
                                                    </li>
                                                </ul>
                                                <div class="time-left bottom-15 right-20 font-md-14">
                                                    <span>
                                    <i class="ico fa fa-clock-o mr-10"></i>
                                    <span class="t-uppercase" data-countdown="{{ $product->availability_date }}"> </span>
                                </span>
                                                </div>
                                                <div class="deal-store-logo">
                                                        <img style="width:100%;max-width:400px" src="{{ asset('storage') }}/{{ $product->product_image }}" />
                                                </div>
                                            </figure>
                                            <div class="bg-white pt-20 pl-20 pr-15">
                                                <div class="pr-md-10">
                                                    {{-- @foreach ($dokans as $dokan) --}}
                                                        
                                                    
                                                    <div class="rating mb-10">
                                                       
                                                        <span class="rating-reviews">
                                         <span class="rating-count">From  ➤ </span> {{ $product->Dokan->dokan_name }} 
                                                        </span>
                                                    </div>
                                                    {{-- @endforeach --}}
                                                    <h3 class="deal-title mb-10">
                                    <a href="deal_single.html">{{ $product->product_name }}</a>
                                </h3>
                                                    <ul class="deal-meta list-inline mb-10 color-mid">
                                                        <li><i class="ico fa fa-map-marker mr-10"></i>United Kingdom</li>
                                                        <li><i class="ico fa fa-shopping-basket mr-10"></i>42 Bought</li>
                                                    </ul>
                                                    <p class="text-muted mb-20">{{ str_limit($product->product_description, 50) }}</p>
                                                </div>
                                                <div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_03"> Get Coupon</button>
                                                <div class="coupon-hide"> {{$product->product_coupon}} </div>
                                            
                                                <div class="deal-price pos-r mb-15">
                                                    <h3 class="price ptb-5 text-right"><span class="price-sale">${{ $product->product_prize }}</span>${{ $product->product_disscount_prize }}</h3>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                             </div>
                                 <!--- Product For ach End Here -->
                                 @endforeach
                        </div>
                    </section>


                    <section class="section latest-coupons-area ptb-30">
                        <header class="panel ptb-15 prl-20 pos-r mb-30">
                            <h3 class="section-title font-18">Latest Deals</h3>
                            <a class="btn btn-o btn-xs pos-a right-10 pos-tb-center">View All</a>
                        </header>

                        <div class="latest-coupons-slider owl-slider" data-autoplay-hover-pause="true" data-loop="true" data-autoplay="true" data-smart-speed="1000" data-autoplay-timeout="10000" data-margin="30" data-nav-speed="false" data-items="1" data-xxs-items="1" data-xs-items="2" data-sm-items="2" data-md-items="3" data-lg-items="4">
                            <div class="coupon-item">
                                <div class="coupon-single panel t-center">
                                    <div class="ribbon-wrapper is-hidden-xs-down">
                                        <div class="ribbon">Featured</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center p-20">
                                                <img class="store-logo" src="{{asset('/frontend')}}/assets/images/coupons/coupon_01.jpg" alt="">
                                            </div>
                                            <!-- end media -->
                                        </div>
                                        <!-- end col -->

                                        <div class="col-xs-12">
                                            <div class="panel-body">
                                                <ul class="deal-meta list-inline mb-10">
                                                    <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                                                    <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>125 Used</li>
                                                </ul>
                                                <h4 class="color-green mb-10 t-uppercase">10% OFF</h4>
                                                <h5 class="deal-title mb-10">
                                <a href="#">10% off select XPS & Alienware laptops</a>
                            </h5>
                                                <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 01/01/2018</p>
                                                <div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
                                                    <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_01">Get Coupon Code</button>
                                                    <div class="coupon-hide">X455-17GT-OL58</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                            <div class="coupon-item">
                                <div class="coupon-single panel t-center">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center p-20">
                                                <img class="store-logo" src="{{asset('/frontend')}}/assets/images/coupons/coupon_02.jpg" alt="">
                                            </div>
                                            <!-- end media -->
                                        </div>
                                        <!-- end col -->

                                        <div class="col-xs-12">
                                            <div class="panel-body">
                                                <ul class="deal-meta list-inline mb-10">
                                                    <li class="color-muted"><i class="ico fa fa-map-marker mr-5"></i>California</li>
                                                    <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>13 Used</li>
                                                </ul>
                                                <h4 class="color-green mb-10 t-uppercase">15% OFF</h4>
                                                <h5 class="deal-title mb-10">
                                <a href="#">15% off 2 select Amazon Fire cases</a>
                            </h5>
                                                <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 05/02/2018</p>
                                                <div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
                                                    <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_02">Show Code</button>
                                                    <div class="coupon-hide">X455-17GT-OL58</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                            <div class="coupon-item">
                                <div class="coupon-single panel t-center">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center p-20">
                                                <img class="store-logo" src="{{asset('/frontend')}}/assets/images/coupons/coupon_03.jpg" alt="">
                                            </div>
                                            <!-- end media -->
                                        </div>
                                        <!-- end col -->

                                        <div class="col-xs-12">
                                            <div class="panel-body">
                                                <ul class="deal-meta list-inline mb-10">
                                                    <li class="color-muted"><i class="ico fa fa-tag mr-5"></i>Coupon</li>
                                                    <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>425 Used</li>
                                                </ul>
                                                <h4 class="color-green mb-10 t-uppercase">20% OFF</h4>
                                                <h5 class="deal-title mb-10">
                                <a href="#">Flat 40% off hotel bookings in 10 cities</a>
                            </h5>
                                                <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 15/01/2018</p>
                                                <div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
                                                    <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_03">See Sale</button>
                                                    <div class="coupon-hide">X455-17GT-OL58</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                            <div class="coupon-item">
                                <div class="coupon-single panel t-center">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center p-20">
                                                <img class="store-logo" src="{{asset('/frontend')}}/assets/images/coupons/coupon_04.jpg" alt="">
                                            </div>
                                            <!-- end media -->
                                        </div>
                                        <!-- end col -->

                                        <div class="col-xs-12">
                                            <div class="panel-body">
                                                <ul class="deal-meta list-inline mb-10">
                                                    <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                                                    <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>230 Used</li>
                                                </ul>
                                                <h4 class="color-green mb-10 t-uppercase">30% OFF</h4>
                                                <h5 class="deal-title mb-10">
                                <a href="#">There is no place like home 25% off</a>
                            </h5>
                                                <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 02/03/2018</p>
                                                <div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
                                                    <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_04">Print Code</button>
                                                    <div class="coupon-hide">X455-17GT-OL58</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                            <div class="coupon-item">
                                <div class="coupon-single panel t-center">
                                    <div class="ribbon-wrapper is-hidden-xs-down">
                                        <div class="ribbon">Featured</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center p-20">
                                                <img class="store-logo" src="{{asset('/frontend')}}/assets/images/coupons/coupon_05.jpg" alt="">
                                            </div>
                                            <!-- end media -->
                                        </div>
                                        <!-- end col -->

                                        <div class="col-xs-12">
                                            <div class="panel-body">
                                                <ul class="deal-meta list-inline mb-10">
                                                    <li class="color-muted"><i class="ico fa fa-tag mr-5"></i>Coupon</li>
                                                    <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>86 Used</li>
                                                </ul>
                                                <h4 class="color-green mb-10 t-uppercase">10% OFF</h4>
                                                <h5 class="deal-title mb-10">
                                <a href="#">10% off $399+ refurbished laptops</a>
                            </h5>
                                                <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 20/02/2018</p>
                                                <div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
                                                    <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_05">Show Code</button>
                                                    <div class="coupon-hide">X455-17GT-OL58</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                            <div class="coupon-item">
                                <div class="coupon-single panel t-center">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center p-20">
                                                <img class="store-logo" src="{{asset('/frontend')}}/assets/images/coupons/coupon_06.jpg" alt="">
                                            </div>
                                            <!-- end media -->
                                        </div>
                                        <!-- end col -->

                                        <div class="col-xs-12">
                                            <div class="panel-body">
                                                <ul class="deal-meta list-inline mb-10">
                                                    <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                                                    <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>24 Used</li>
                                                </ul>
                                                <h4 class="color-green mb-10 t-uppercase">25% OFF</h4>
                                                <h5 class="deal-title mb-10">
                                <a href="#">There is no place like home 25% off</a>
                            </h5>
                                                <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 14/01/2018</p>
                                                <div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
                                                    <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_06">Show Coupon</button>
                                                    <div class="coupon-hide">X455-17GT-OL58</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                        </div>
                    </section>
                   {{-- @include('frontend.store') --}}
                   <section class="section stores-area stores-area-v1 ptb-30">
                        <header class="panel ptb-15 prl-20 pos-r mb-30">
                            <h3 class="section-title font-18">Popular Stores</h3>
                            <a href="stores_01.html" class="btn btn-o btn-xs pos-a right-10 pos-tb-center">All Stores</a>
                        </header>
                        <div class="popular-stores-slider owl-slider" data-loop="true" data-autoplay="true" data-smart-speed="1000" data-autoplay-timeout="10000" data-margin="20" data-items="2" data-xxs-items="2" data-xs-items="2" data-sm-items="3" data-md-items="5" data-lg-items="6">
                                @foreach ($dokans as $dokan)
                                <div class="store-item t-center">
                                      
                                <a href="store_single_01.html" class="panel is-block">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <div class="store-logo">
                                            <img src="{{ asset('storage') }}/{{ $dokan->first()->dokan_image }}" alt="">
                                        </div>
                                    </div>
                                <h6 class="store-name ptb-10">{{ $dokans->first()->dokan_name }}</h6>
                                </a>
                              
                            </div>
                            @endforeach
                            
                        </div>
                    </section>


                    {{-- <section class="section latest-news-area blog-area blog-grid blog-3-col ptb-30">
                            <header class="panel ptb-15 prl-20 pos-r mb-30">
                                <h3 class="section-title font-18">Latest News</h3>
                                <a href="blog_classic_right_sidebar.html" class="btn btn-o btn-xs pos-a right-10 pos-tb-center">Visit Blog</a>
                            </header>
    
                            <div class="row row-tb-20">
    
                                <!-- Blog Post -->
                                <div class="blog-post col-xs-12 col-sm-6 col-md-4">
                                    <article class="entry panel">
                                        <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="assets/images/blog/post_01.jpg">
                                            <div class="entry-date">
                                                <h4>13</h4>
                                                <h6>JUN</h6>
                                            </div>
                                        </figure>
                                        <div class="entry-wrapper pt-20 pb-10 prl-20">
                                            <header class="entry-header">
                                                <h4 class="entry-title mb-10 mb-md-15 font-xs-16 font-sm-18 font-md-16 font-lg-16">
                                <a href="blog_single_standard.html">Restaurant Employer Read Clients Orders On His iPad</a>
                            </h4>
                                                <div class="entry-meta mb-10">
                                                    <ul class="tag-info list-inline">
                                                        <li><i class="icon fa fa-user"></i> By : John Doe</li>
                                                        <li><i class="icon fa fa-comments"></i>14 Comments </li>
                                                    </ul>
                                                </div>
                                            </header>
                                            <div class="entry-content">
                                                <p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
                                            </div>
                                            <footer class="entry-footer text-right">
                                                <a href="blog_single_standard.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                            </footer>
                                        </div>
                                    </article>
                                </div>
                                <!-- End Blog Post -->
    
                                <!-- Blog Post -->
                                <div class="blog-post col-xs-12 col-sm-6 col-md-4">
                                    <article class="entry panel">
                                        <figure class="entry-media embed-responsive embed-responsive-16by9">
                                            <iframe src="https://player.vimeo.com/video/28786762?portrait=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                            <div class="entry-date">
                                                <h4>13</h4>
                                                <h6>JUN</h6>
                                            </div>
                                        </figure>
                                        <div class="entry-wrapper pt-20 pb-10 prl-20">
                                            <header class="entry-header">
                                                <h4 class="entry-title mb-10 mb-md-15 font-xs-16 font-sm-18 font-md-16 font-lg-16">
                                                    <a href="blog_single_vimeo.html">Amazing Classic Interior Design With Perfect Lighting</a>
                                                </h4>
                                                <div class="entry-meta mb-10">
                                                    <ul class="tag-info list-inline">
                                                        <li><i class="icon fa fa-user"></i> By : John Doe</li>
                                                        <li><i class="icon fa fa-comments"></i> 14 Comments </li>
                                                    </ul>
                                                </div>
                                            </header>
                                            <div class="entry-content">
                                                <p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
                                            </div>
                                            <footer class="entry-footer text-right">
                                                <a href="blog_single_vimeo.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                            </footer>
                                        </div>
                                    </article>
                                </div>
                                <!-- End Blog Post -->
    
                                <!-- Blog Post -->
                                <div class="blog-post col-xs-12 col-sm-6 col-md-4">
                                    <article class="entry panel">
                                        <figure class="entry-media embed-responsive embed-responsive-16by9">
                                            <iframe src="https://www.youtube.com/embed/mcixldqDIEQ?v=mcixldqDIEQ" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                            <div class="entry-date">
                                                <h4>13</h4>
                                                <h6>JUN</h6>
                                            </div>
                                        </figure>
                                        <div class="entry-wrapper pt-20 pb-10 prl-20">
                                            <header class="entry-header">
                                                <h4 class="entry-title mb-10 mb-md-15 font-xs-16 font-sm-18 font-md-16 font-lg-16">
                                <a href="blog_single_youtube.html">English Breakfast Tea With Tasty Donut Desserts</a>
                            </h4>
                                                <div class="entry-meta mb-10">
                                                    <ul class="tag-info list-inline">
                                                        <li><i class="icon fa fa-user"></i> By : John Doe</li>
                                                        <li><i class="icon fa fa-comments"></i> 14 Comments </li>
                                                    </ul>
                                                </div>
                                            </header>
                                            <div class="entry-content">
                                                <p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
                                            </div>
                                            <footer class="entry-footer text-right">
                                                <a href="blog_single_youtube.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                            </footer>
                                        </div>
                                    </article>
                                </div>
                                <!-- End Blog Post -->
                            </div>
                    </section> --}}
                         
                                             
                    
                        <section class="section subscribe-area ptb-40 t-center">
                        <div class="newsletter-form">
                            <h4 class="mb-20"><i class="fa fa-envelope-o color-green mr-10"></i>Sign up for our weekly email newsletter</h4>
                            <p class="mb-20 color-mid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi animi magni accusantium architecto possimus.</p>

                    <!-- error message -->
                    @if ($errors->any())
                            <div class="alert alert-danger">
                                    <ul>
                                       @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                  </ul>
                            </div>
                    @endif
                    <!-- error message end -->
                    <!-- Notification Start Here -->
                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                       @endif
                    <!-- Notification End Here -->
                            <form method="post" action="{{ url('emailSubscriber') }}">
                            @csrf
                                <div class="input-group mb-10">
                                    <input type="mail" name="mail" class="form-control bg-white" placeholder="Email Address" required="required">
                                    <span class="input-group-btn">
                                        <button class="btn" type="submit">Subscribe</button>
                                    </span>
                                </div>
                            </form>
                            <p class="color-muted"><small>We’ll never share your email address with a third-party.</small> </p>
                        </div>
                    </section>  
@endsection