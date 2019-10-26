@extends('backend._layout')

@section('title')
    Add Product
@endsection

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">
            @yield('title','Products')
        </h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
            <a href="{{ url('/home') }}">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Forms</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Basic Form</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <div class="card-title">Add Products Here</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-lg-8">

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
                    <form action="{{ url('store-products') }}" method="POST" enctype="multipart/form-data">
                             @csrf
                            <label for="category_name_id">Select Your Category</label>
                            <div class="form-group">
                                    <select class="form-control" name="category_name_id">
                                            <option disabled selected>Select a Category</option>
                                            @php( $categories = \App\Category::all())
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                            <div>
                            <label for="dokan_name_id">Select Your Dokan</label>
                            <div class="form-group">
                                    <select class="form-control" name="dokan_name_id">
                                            <option disabled selected>Select Your Dokan</option>
                                            @php( $dokans = \App\Dokan::where('user_id', Auth::id())->get())
                                            @foreach($dokans as $dokan)
                                                <option value="{{ $dokan->id }}">{{ $dokan->dokan_name }}</option>
                                            @endforeach
                                    </select>
                                        
                            <div>
                                <label for="text">Add Products Name</label>
                                <input type="text" class="form-control" name="product_name" id="text" placeholder="Enter Product Name">
                                <label for="text">Add Products Description</label>
                                <textarea type="text" class="form-control" name="product_description" id="editor" placeholder="Enter Product Description"> </textarea>
                                <label for="text">Product Prize</label>
                                <input type="text" class="form-control" name="product_prize" id="text" placeholder="Previous Prize">
                                <label for="text">After Disscount Prize</label>
                                <input type="text" class="form-control" name="product_disscount_prize" id="text" placeholder="Disscount Prize">
                                <label for="text">Disscount %</label>
                                <input type="text" class="form-control" name="product_disscount_rate" id="text" placeholder="Disscount %">
                                <label for="text">Coupon Code</label>
                                <input type="text" class="form-control" name="product_coupon" id="text" placeholder="Coupon Code if available">
                                <label for="date">Availibility Date</label>
                                <input type="date" class="form-control" name="availability_date" id="text">    
                                <label for="text">Choose product Image</label>
                                <input type="file" class="form-control" name="product_image">
                            </div>
                            </div> 
                        </div>
                    </div>
                    <div class="card-action">
                            <button class="btn btn-success">Submit</button>
                            <a href="{{ route('showProduct') }}" class="btn btn-danger">Cancel</a>
                    </div> 
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection