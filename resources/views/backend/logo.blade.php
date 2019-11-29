@extends('backend._layout')

@section('title')
    Logo Change
@endsection

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">
            @yield('title','Logo Change Option')
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
    <hr>
     <!-- Notification Start Here -->
     @if (session()->has('success'))
     <div class="alert alert-success">
         {{ session()->get('success') }}
     </div>
        @endif
     <!-- Notification End Here -->
    <div class="col-md-12 col-lg-8">
    <form class="form-group" method="post" action="{{ route('logoupdate') }}"  enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlFile1">Select a picture for logo</label>
            <small>( Ideal ressolation 440 x 100 ) </small>
            <input type="file" name="logo" class="form-control-file" id="exampleFormControlFile1">
        </div>
    </div>
        <br>
    <div class="card-action">
        <button class="btn btn-success">Submit</button>
    <a href="{{ url('/home') }}" class="btn btn-danger">Cancel</a>
    </div>
</form>
        <hr>
    <!-- Table  Start -->
    <div class="card">
        <div class="card-header">
            <div class="card-title">Responsive Table</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Logo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($logochanges as $logochange)
                        <tr>
                            {{-- <th scope="row">---</th> --}}
                            <td> <img style="width:100%;max-width:100px" src="{{ asset('storage') }}/{{ $logochange->logo }}" /></td> 
                            <td>
                                    <a href="{{ route('deleteLogo', $logochange->id) }}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                            <i class="fa fa-times"></i>
                                    </a>
                            </td> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
