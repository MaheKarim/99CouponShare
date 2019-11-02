@extends('backend._layout')

@section('title')
    Show Product
@endsection

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">
            @yield('title','Show Product')
        </h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">      
                    @if (Auth::user()->user_role_id == 2)
                    <a href="{{ route('addProduct') }}" class="btn btn-primary btn-round ml-auto">
                            <i class="fa fa-plus"></i>
                            Add Product
                    </a>
                    @else
                    <a class="btn btn-primary btn-round ml-auto text-white">
                        Sorry! <b>{{Auth::user()->user_role->user_role}}</b> Don't Have Permission
                    </a>
                    @endif
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

         @if ($errors->any())
         <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
        <br/>
      @endif
                                   <!-- Notification End Here -->

                     <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                   
                                    @admin
                                    <th>Shop Name </th>
                                    @endadmin
                                    <th>Product Image </th>
                                    <th>Category Name</th>
                                    <th>Product Name</th>
                                    <th>Product Description</th>
                                    <th>Product Price</th>
                                    <th>Disscount Price</th>
                                    <th>Disscount Rate(%)</th>
                                    <th>Availity Date</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($products as $product)
                                <tr>
                                {{-- <td>{{ $product->Category()->first()->category_name }} --}}
                                @admin
                                <td>{{ $product->Dokan->dokan_name}} </td>
                                @endadmin
                                <td><img style="width:100%;max-width:400px" src="{{ asset('storage') }}/{{ $product->product_image }}" /> </td>
                                <td>{{ $product->Category->category_name }}</td>
                                {{-- <td>{{ $product->Dokan()->first()->dokan_name }} </td> --}}
                                <td>{{ $product->product_name }}</td>
                                <td>{!! str_limit($product->product_description, 20) !!}</td>
                                <td>{{ $product->product_prize }}</td>
                                <td>{{ $product->product_disscount_prize }}</td>
                                <td>{{ $product->product_disscount_rate }}</td>
                                <td>{{ $product->availability_date }}</td>
                               
                                    <td>
                                      <div class="form-button-action">
                                        @if (Auth::User()->user_role_id == 2)
                                           <a href="{{ route('editProduct', $product->id) }}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                             <i class="fa fa-edit"></i>
                                            </a>
                                        @else
                                            
                                        @endif
                                        <a href="{{ route('deleteProduct', $product->id) }}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
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