@extends('frontend.layout')

@section('content')
<div class="row row-masnory row-tb-20">
        @php( $products = \App\Product::all())  
        @foreach ($products as $product)
         
        <div class="col-sm-6 col-lg-4">
                <div class="deal-single panel">
                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{ asset('storage') }}/{{ $product->product_image }}">
                        <div class="label-discount left-20 top-15">-{{ $product->product_disscount_rate}}</div>
                        <ul class="deal-actions top-15 right-20">
                            
                            <li class="share-btn">
                                <div class="share-tooltip fade">
                                    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                                <span><i class="fa fa-share-alt"></i></span>
                            </li>
                        </ul>
                        <div class="time-left bottom-15 right-20 font-md-14">
        <span>
            <i class="ico fa fa-clock-o mr-10"></i>
            <span class="t-uppercase" data-countdown="{{ $product->availability_date }}"> </span>
        </span>
        </div>
    </div>
</div>

        @endforeach

</div>
@endsection