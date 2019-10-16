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
                            <img src="{{ asset('storage') }}/{{ $dokans->dokan_image }}" alt="">
                        </div>
                    </div>
                <h6 class="store-name ptb-10">{{ $dokan->dokan_name }}</h6>
                </a>
            </div>
            @endforeach
            
        </div>
    </section>