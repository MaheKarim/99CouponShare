<header id="mainHeader" class="main-header">

    <!-- Top Bar -->
    @if(!Auth::user())
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
                        <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i>Sign In</a>
                        </li>
                        <li><a href="{{ route('register') }}"><i class="fa fa-user"></i>Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endif


<!-- Marquee / Scroll code here -->

<marquee behavior="scroll" direction="left">
   
        @foreach ($products as $product)
        {{ $product->product_name }}  ⏩
        @endforeach

</marquee>



    <!-- Header Header -->
    <div class="header-header bg-white">
        <div class="container">
            <div class="row row-rl-0 row-tb-20 row-md-cell">
                <div class="brand col-md-3 t-xs-center t-md-left valign-middle">
                    <a href="#" class="logo">
                        <img src="{{ asset('storage') }}/{{ $logochange->logo }}" alt="" width="250">
                    </a>
                </div>
                <div class="header-search col-md-9">
                    <div class="row row-tb-10 ">
                        <div class="col-sm-8">
                        <form class="search-form" method="GET" action="{{ route('search_product') }}">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control input-lg search-input" placeholder="Enter Keywork Here ..." required="required">
                                    <div class="input-group-btn">
                                        <div class="input-group">
                                            <div class="input-group-btn">search
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
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        
                        <li>
                        <a href="#">Choose Category</a>
                            <ul name="category_name_id">
                                 @php( $categories = \App\Category::all())
                                 
                                 @foreach($categories as $category)
                                <li><a href="{{ route('allCategoryshow' , $category->id) }}">{{ $category->category_name }}</a>
                                </li>
                                 @endforeach
                            </ul>
                        </li>


                        <li>
                                <a href="coupons_grid.html">Area We Covered</a>
                                <ul name="area_name_id">
                                    @php( $areas = \App\Area::all())
                                     @foreach($areas as $area)
                                    <li><a href="{{route('allAreayShow' , $area->id) }}">{{ $area->area_name }}</a>
                                    </li>
                                     @endforeach
                                </ul>
                        </li>
                        <li>
                        <a href="{{  route('contactwithus') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
                @if(Auth::User())
                    <div class="nav-menu nav-menu-fixed">
                        <a href="{{ url('/home') }}" target="_blank">Dashboard<i class="fa fa-long-arrow-right ml-10"></i></a>
                    </div>
                @endif
            </nav>
        </div>
    </div>
    <!-- End Header Menu -->

</header>