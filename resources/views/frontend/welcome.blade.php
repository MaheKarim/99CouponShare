@extends('frontend.layout')
@section('title')
    99CouponShare
@endsection

@section('content')
                     {{-- @include('frontend.slider-content') --}}
                      <!-- Notification Start -->
                      @if (session()->has('success'))
                      <div class="alert alert-success">
                          {{ session()->get('success') }}
                      </div>
                   @endif
                   <!-- Notification End -->
                     <div class="section explain-process-area ptb-30">
                        <div class="row row-rl-10">
                                
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
                   @include('frontend.coupon')
                   
                   {{-- @include('frontend.store') --}}
                   <section class="section stores-area stores-area-v1 ptb-30">
                        <header class="panel ptb-15 prl-20 pos-r mb-30">
                            <h3 class="section-title font-18">Popular Stores</h3>
                            <a href="stores_01.html" class="btn btn-o btn-xs pos-a right-10 pos-tb-center">All Stores</a>
                        </header>
                        <div class="popular-stores-slider owl-slider" data-loop="true" data-autoplay="true" data-smart-speed="1000" data-autoplay-timeout="10000" data-margin="20" data-items="2" data-xxs-items="2" data-xs-items="2" data-sm-items="3" data-md-items="5" data-lg-items="6">
                            
                            @php( $dokans = \App\Dokan::all())  
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