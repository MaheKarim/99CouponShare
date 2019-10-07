@extends('backend._layout')

@section('content')
kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="form-group">
                    <label for="email2">Email Address</label>
                    <input type="email" class="form-control" id="email2" placeholder="Enter Email">
                    <small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group form-inline">
                    <label for="inlineinput" class="col-md-3 col-form-label">Inline Input</label>
                    <div class="col-md-9 p-0">
                        <input type="text" class="form-control input-full" id="inlineinput" placeholder="Enter Input">
                    </div>
                </div>
                <div class="form-group has-success">
                    <label for="successInput">Success Input</label>
                    <input type="text" id="successInput" value="Success" class="form-control">
                </div>
            </div>
        </div>
    </div>

@endsection