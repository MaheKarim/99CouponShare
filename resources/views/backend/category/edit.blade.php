@extends('backend._layout')

@section('content')
<div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Update Page</h4>
           
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Update Category Here</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-8">
                                <form action="{{ route('updateCategory') }}" method="POST">
                                 @csrf
                                <div class="form-group">
                                <label for="text">Update Category Name</label>
                                <input type="text" class="form-control" name="category_name" id="category_name" value="{{ $categories->category_name }}" placeholder="Enter Category Name">
                                <input type="hidden" name="category_name_id"  value="{{ $categories->id }}"> 
                                <label for="text">Update Category Description</label>
                                <input type="text" class="form-control" name="category_description" id="category_description" value="{{ $categories->category_description }}" placeholder="Enter Category Description">
                                
                            </div>
                                </div> 
                            </div>
                          </div>
                              <div class="card-action">
                                      <button class="btn btn-success">Submit</button>
                              <a href="{{ url('/show/category') }}" class="btn btn-danger">Cancel</a>
                        </div> 
                       </form>
                    </div>
                </div>
            </div>
        </div>
   </div>
@endsection