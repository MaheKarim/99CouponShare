@extends('backend._layout')

@section('title')
    Products Edit
@endsection

@section('content')
<div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Update Page</h4>
           
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Update Products Here</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-8">
                                <form action="{{ route('updateProduct') }}" method="POST">
                                 @csrf
                                <div class="form-group">
                                <label for="text">Update Product Name</label>
                                <input type="text" class="form-control" name="product_name" id="product_name" value="{{ $products->product_name }}" placeholder="Enter Product Name">
                                <input type="hidden" name="product_name_id"  value="{{ $products->id }}">    
                                <label for="text">Update Product Description</label>
                                <input type="text" class="form-control" name="product_description" id="product_description" value="{{ $products->product_description }}" placeholder="Enter Product Description">
                                <label for="text">Update Product Prize</label>
                                <input type="text" class="form-control" name="product_prize" id="product_prize" value="{{ $products->product_prize }}" placeholder="Enter Product Prize">
                                <label for="text">Update Product Disscount Prize</label>
                                <input type="text" class="form-control" name="product_disscount_prize " id="product_disscount_prize " value="{{ $products->product_disscount_prize  }}" placeholder="Enter Product Disscount Prize">
                                <label for="text">Update Product Disscount Rate</label>
                                <input type="text" class="form-control" name="product_disscount_rate" id="product_disscount_rate" value="{{ $products->product_disscount_rate }}" placeholder="Enter Product Disscount Rate">
                                <label for="text">Update Product Date</label>
                                <input type="text" class="form-control" name="availability_date" id="availability_date" value="{{ $products->availability_date }}">

                                </div>
                                </div> 
                            </div>
                          </div>
                              <div class="card-action">
                                      <button class="btn btn-success">Submit</button>
                              <a href="{{ url('/show/product') }}" class="btn btn-danger">Cancel</a>
                        </div> 
                       </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection