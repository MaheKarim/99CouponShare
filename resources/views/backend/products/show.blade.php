@extends('backend._layout')

@section('title')
    Add Product
@endsection

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">
            @yield('title','Show Email Subscriiber List')
        </h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">      
                    <a href="{{ route('addProduct') }}" class="btn btn-primary btn-round ml-auto">
                            <i class="fa fa-plus"></i>
                            Add Product
                        </a>
                    </div>
                </div>
                <div class="card-body">
                <!-- Modal -->
                                   <!-- Notification Start Here -->
                                   @if (session()->has('success'))
                                   <div class="alert alert-success">
                                       {{ session()->get('success') }}
                                   </div>
                                      @endif
                                   <!-- Notification End Here -->

                     <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Description</th>
                                    <th>Product Prize</th>
                                    <th>Disscount Prize</th>
                                    <th>Availity Date</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($products as $product)
                                <tr>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->product_description }}</td>
                                <td>{{ $product->product_prize }}</td>
                                <td>{{ $product->product_disscount_prize }}</td>
                                <td>{{ $product->availability_date }}</td>
                                    <td>
                                        <div class="form-button-action">
                                        <a href="#" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                        <i class="fa fa-times"></i>
                                        </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection