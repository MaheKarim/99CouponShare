@extends('frontend.layout')
@section('title')
    MyOfferBD - Get Your Offer
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
                                <a href="{{ route('dokanHasProduct' , $dokan->id) }}" class="panel is-block">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <div class="store-logo">
                                            <img src="{{ asset('storage') }}/{{  $dokan->dokan_image  }}" alt="">
                                        </div>
                                    </div>
                                <h6 class="store-name ptb-10"> {{ $dokan->dokan_name }}</h6>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </section>

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