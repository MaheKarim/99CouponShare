@extends('backend._layout')


@section('title')
    Add Dokan
@endsection
@section('content')
<div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                @yield('title','Shop')
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
                
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <div class="card-title">Add Shop Here</div>
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
                        <form action="{{ url('store-dokan') }}" method="POST" enctype="multipart/form-data">
                                 @csrf
                                <div class="form-group">
                                    <label for="text">Add Shop Name</label>
                                    <input type="text" class="form-control" name="dokan_name" id="text" placeholder="Enter Shop Name">
                                    <label for="text">Add Shop Description</label>
                                    <input type="text" class="form-control" name="dokan_description" id="text" placeholder="Enter Shop  Description">
                                    <label for="text">Choose Shop Image</label>
                                   <input type="file" class="form-control" name="dokan_image">    
                                </div>
                                </div> 
                            </div>
                        </div>
                        <div class="card-action">
                                <button class="btn btn-success">Submit</button>
                                <a href="{{ route('showDokan') }}" class="btn btn-danger">Cancel</a>
                        </div> 
                       </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection