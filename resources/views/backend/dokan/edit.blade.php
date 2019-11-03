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
                        <div class="card-title">Update Shop Here</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-8">
                                <form action="{{ route('updateDokan') }}" method="POST">
                                 @csrf
                                <div class="form-group">
                                <label for="text">Update Shop Name</label>
                                <input type="text" class="form-control" name="dokan_name" id="dokan_name" value="{{ $dokans->dokan_name }}" placeholder="Enter Shop Name">
                                <input type="hidden" name="dokan_name_id"  value="{{ $dokans->id }}">    
                                <label for="text">Update Shop Description</label>
                                <input type="text" class="form-control" name="dokan_description" id="dokan_description" value="{{ $dokans->dokan_description }}" placeholder="Enter Shop Description">

                                </div>
                                </div> 
                            </div>
                          </div>
                              <div class="card-action">
                                      <button class="btn btn-success">Submit</button>
                              <a href="{{ url('/show/dokan') }}" class="btn btn-danger">Cancel</a>
                        </div> 
                       </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection