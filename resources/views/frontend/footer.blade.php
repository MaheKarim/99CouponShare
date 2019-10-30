<section class="footer-top-area pt-70 pb-30 pos-r bg-blue">
    <div class="container">
        <div class="row row-tb-20">
            <div class="col-sm-12 col-md-7">
                <div class="row row-tb-20">
                    <div class="footer-col col-sm-6">
                        <div class="footer-about">
                            {{-- @foreach ($logochanges as $logochange) --}}
                            <img class="mb-40" src="{{ asset('storage') }}/{{ $logochange->logo }}" width="250" alt="">
                            {{-- @endforeach --}}
                            <p class="color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam dolores quidem mollitia id ipsa nisi necessitatibus iure repudiandae aperiam, odit ipsam dolor fugiat corporis nesciunt illo nemo minus.</p>
                        </div>
                    </div>
                    <div class="footer-col col-sm-6">
                        <div class="footer-top-twitter">
                            <h2 class="color-lighter">Twitter Feed</h2>
                            <ul class="twitter-list">
                                <li class="single-twitter">
                                    <p class="color-light"><i class="ico fa fa-twitter"></i><a href="#">@masum_rana :</a> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore in reprehenderit.</p>
                                </li>
                                <li class="single-twitter">
                                    <p class="color-light"><i class="ico fa fa-twitter"></i><a href="#">@masum_rana :</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione id corrupti iusto cupiditate omnis.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-5">
                <div class="row row-tb-20">
                    <div class="footer-col col-sm-6">
                        <div class="footer-links">
                            <h2 class="color-lighter">Quick Links</h2>
                            <ul>
                            <li><a href="{{ route('aboutus') }}">About Us</a>
                                </li>
                                <li><a href="{{route('error404')}}">Error 404</a>
                                </li>
                                <li><a href="{{ route('contactwithus') }}">Contact Us</a>
                                </li>
                                <li><a href="{{ route('login') }}">Sign In</a>
                                </li>
                            <li><a href="{{ route('register') }}">Sign Up</a>
                                </li>
                                <li><a href="faq.html">FAQs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-col col-sm-6">
                        <div class="footer-top-instagram instagram-widget">
                            <h2>Map Widget</h2>
                            <div class="row row-tb-5 row-rl-5">
                                <div class="mapouter"><div class="gmap_canvas"><iframe width="295" height="238" id="gmap_canvas" src="https://maps.google.com/maps?q=Daffodil%20International%20university&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/20-off-discount-for-elegant-themes-divi-sale-coupon-code-2019/"></a></div><style>.mapouter{position:relative;text-align:right;height:238px;width:295px;}.gmap_canvas {overflow:hidden;background:none!important;height:238px;width:295px;}</style></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="payment-methods t-center">
                    <span><img src="{{asset('/frontend')}}/assets/images/icons/payment/paypal.jpg" alt=""></span>
                    <span><img src="{{asset('/frontend')}}/assets/images/icons/payment/visa.jpg" alt=""></span>
                    <span><img src="{{asset('/frontend')}}/assets/images/icons/payment/mastercard.jpg" alt=""></span>
                    <span><img src="{{asset('/frontend')}}/assets/images/icons/payment/discover.jpg" alt=""></span>
                    <span><img src="{{asset('/frontend')}}/assets/images/icons/payment/american.jpg" alt=""></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- –––––––––––––––[ FOOTER ]––––––––––––––– -->
<footer id="mainFooter" class="main-footer">
    <div class="container">
        <div class="row">
            <p>Copyright &copy; 2019 . All rights reserved.</p>
        </div>
    </div>
</footer>