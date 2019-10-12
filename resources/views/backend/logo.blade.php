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
    <div class="col-md-12 col-lg-8">
    <form class="form-group" method="POST" action="{{ route('logoupdate', $logochange->id) }}" enctype="multipart/form-data">
        @csrf
        <input name="_method" type="hidden" value="PUT">
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
                            <th>Logo Image</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">---</th>
                            <td>---</td>
                            <td>---</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
