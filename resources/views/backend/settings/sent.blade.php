@extends('backend._layout')

@section('title')
    Settings
@endsection

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">
            {{-- @yield('title','Category') --}}
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
            
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <div class="card-title">Site Core Seetings</div>
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
                    <form action="{{  route('updatehere') }}" method="POST">
                             @csrf
                             <input name="_method" type="hidden" value="post">
                            <div class="form-group">
                                <label for="text">Add Footer Text</label>
                                <input type="text" value="{{ old('footer_text') }}" class="form-control" name="footer_text" id="text" placeholder="Enter Footer">
                                {{-- <label for="text">Site Email</label>
                                <input type="text" value="{{ old('site_mail') }}" class="form-control" name="site_mail" id="text" placeholder="Enter Mail">
                                <label for="text">Site PHN Number</label>
                                <input type="text" class="form-control" name="site_phn_number" id="text" placeholder="Enter Site PHN Number"> --}}
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="card-action">
                            <button class="btn btn-success">Submit</button>
                    <a href="" class="btn btn-danger">Cancel</a>
                    </div> 
                   </form>
                </div>
            </div>


            <table class="table table-dark">
                    <thead>
                      <tr>
                     
                        <th scope="col">Site Footer Text</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                       
                      @foreach ($settinga as $setting)
                      <tr>
                        <td>{{ $setting->footer_text }}</td>
                       
                      </tr>
                      @endforeach
                    </tbody>
                  </table>



        </div>
    </div>
</div>
@endsection