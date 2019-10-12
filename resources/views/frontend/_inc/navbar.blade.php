<header id="mainHeader" class="main-header">

    <!-- Top Bar -->
    <div class="top-bar bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 is-hidden-sm-down">
                    <ul class="nav-top nav-top-left list-inline t-left">
                        <li><a href="terms_conditions.html"><i class="fa fa-question-circle"></i>Discounts Guide</a>
                        </li>
                        <li><a href="faq.html"><i class="fa fa-support"></i>Customer Assistance</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-8">
                    <ul class="nav-top nav-top-right list-inline t-xs-center t-md-right">
                        <li>
                            <a href="#"><i class="fa fa-flag-en"></i>English <i class="fa fa-caret-down"></i></a>
                            <ul>
                                <li><a href="index-2.html"><i class="fa fa-flag-en"></i>Bangla</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-usd"></i>USD <i class="fa fa-caret-down"></i></a>
                            <ul>
                                <li><a href="#">USD - US Dollar</a>
                                </li>
                                <li><a href="#">EUR - Euro</a>
                                </li>
                                <li><a href="#">CNY - Chinese Yuan</a>
                                </li>
                                <li><a href="#">RUB - Russian Ruble</a>
                                </li>
                            </ul>
                        </li>
                    <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i>Sign In</a>
                        </li>
                    <li><a href="{{ route('register') }}"><i class="fa fa-user"></i>Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Bar -->

    <!-- Header Header -->
    <div class="header-header bg-white">
        <div class="container">
            <div class="row row-rl-0 row-tb-20 row-md-cell">
                <div class="brand col-md-3 t-xs-center t-md-left valign-middle">
                    <a href="#" class="logo">
                        <img src="{{asset('/frontend')}}/assets/images/logo.png" alt="" width="250">
                    </a>
                </div>
                <div class="header-search col-md-9">
                    <div class="row row-tb-10 ">
                        <div class="col-sm-8">
                            <form class="search-form">
                                <div class="input-group">
                                    <input type="text" class="form-control input-lg search-input" placeholder="Enter Keywork Here ..." required="required">
                                    <div class="input-group-btn">
                                        <div class="input-group">
                                            <select class="form-control input-lg search-select">
                                                <option>Select Your Category</option>
                                                <option>Deals</option>
                                                <option>Coupons</option>
                                                <option>Discounts</option>
                                            </select>
                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-lg btn-search btn-block">
                                                    <i class="fa fa-search font-16"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Header -->

    <!-- Header Menu -->
    <div class="header-menu bg-blue">
        <div class="container">
            <nav class="nav-bar">
                <div class="nav-header">
                    <span class="nav-toggle" data-toggle="#header-navbar">
                        <i></i>
                        <i></i>
                        <i></i>
                    </span>
                </div>
                <div id="header-navbar" class="nav-collapse">
                    <ul class="nav-menu">
                        <li class="active">
                            <a href="index-3.html">Home</a>
                        </li>
                        <li class="dropdown-mega-menu">
                            <a href="deals_grid.html">Deals</a>
                            <div class="mega-menu">
                                <div class="row row-v-10">
                                    <div class="col-md-3">
                                        <ul>
                                            <li><a href="deals_grid.html">Grid View</a>
                                            </li>
                                            <li><a href="deals_grid_sidebar.html">Grid With Sidebar</a>
                                            </li>
                                            <li><a href="deals_list.html">List View</a>
                                            </li>
                                            <li><a href="deal_single.html">Deal Single</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="assets/images/deals/deal_03.jpg">
                                            <div class="label-discount top-10 right-10">-15%</div>
                                            <div class="deal-about p-10 pos-a bottom-0 left-0">
                                                <div class="rating mb-10">
                                                    <span class="rating-stars rate-allow" data-rating="2">
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                                <h6 class="deal-title mb-10">
                                                    <a href="deal_single.html" class="color-lighter">Aenean ut orci vel massa</a>
                                                </h6>
                                            </div>
                                        </figure>
                                    </div>
                                    <div class="col-md-3">
                                        <figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="assets/images/deals/deal_04.jpg">
                                            <div class="label-discount top-10 right-10">-60%</div>
                                            <div class="deal-about p-10 pos-a bottom-0 left-0">
                                                <div class="rating mb-10">
                                                    <span class="rating-stars rate-allow" data-rating="3">
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                                <h6 class="deal-title mb-10">
                                                    <a href="deal_single.html" class="color-lighter">Aenean ut orci vel massa</a>
                                                </h6>
                                            </div>
                                        </figure>
                                    </div>
                                    <div class="col-md-3">
                                        <figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="assets/images/deals/deal_05.jpg">
                                            <div class="label-discount top-10 right-10">-60%</div>
                                            <div class="deal-about p-10 pos-a bottom-0 left-0">
                                                <div class="rating mb-10">
                                                    <span class="rating-stars rate-allow" data-rating="5">
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                                <h6 class="deal-title mb-10">
                                                    <a href="deal_single.html" class="color-lighter">Aenean ut orci vel massa</a>
                                                </h6>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="coupons_grid.html">Coupons</a>
                            <ul>
                                <li><a href="coupons_grid.html">Grid View</a>
                                </li>
                                <li><a href="coupons_grid_sidebar.html">Grid With Sidebar</a>
                                </li>
                                <li><a href="coupons_list.html">List View</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="stores_01.html">Stores</a>
                            <ul>
                                <li><a href="stores_01.html">Stores Search</a>
                                </li>
                                <li><a href="stores_02.html">Stores Categories</a>
                                </li>
                                <li><a href="store_single_01.html">Store Single 1</a>
                                </li>
                                <li><a href="store_single_02.html">Store Single 2</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact_us_01.html">Contact Us</a>
                        </li>
                    </ul>
                </div>
                
            </nav>
        </div>
    </div>
    <!-- End Header Menu -->

</header>