<section class="section latest-deals-area ptb-30">
        <header class="panel ptb-15 prl-20 pos-r mb-30">
            <h3 class="section-title font-18">Latest Deals</h3>
        <a href="{{ route('showAllProducts') }}" class="btn btn-o btn-xs pos-a right-10 pos-tb-center">View All</a>
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
                                 {{-- @foreach ($dokans as $dokan) --}}
                                <div class="deal-store-logo">
                                        {{-- <img style="width:100%;max-width:400px" src="{{ asset('storage') }}/{{ $product->Dokan->dokan_image }}" /> --}}
                                </div>
                                  {{-- @endforeach --}}
                            </figure>
                            <div class="bg-white pt-20 pl-20 pr-15">
                                <div class="pr-md-10">
                                    <div class="rating mb-10">
                                        <span class="rating-reviews">
                                            <span class="rating-count">From  ➤  </span> 
                                            {{ $product->Dokan->dokan_name }} 
                                        </span>
                                    </div>
                                  
                                    <h3 class="deal-title mb-10">
                    <a href="#">{{ $product->product_name }}</a>
                </h3>
                                    <ul class="deal-meta list-inline mb-10 color-mid">
                                    <li><i class="ico fa fa-map-marker mr-10"> <span> </span>          {{ $product->Area->area_name }}</i></li>
                                    <li><i class="ico fa fa-folder-open mr-10"></i>{{ $product->Category->category_name }}</li>
                                    </ul>
                                    <p class="text-muted mb-20">{!! str_limit($product->product_description, 50) !!}</p>
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
            
                 <!--- Product For ach End Here -->
                 @endforeach
        </div>
    </section>