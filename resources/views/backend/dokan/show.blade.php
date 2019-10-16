@extends('backend._layout')

@section('content')
<style>
    td.tdCSS{
        /* background-color: aqua; */
        width: 22px;
        height: 20px;
    }
    </style>
<div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                @yield('title','Show Dokan')
            </h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                       @if (Auth::user()->user_role_id == 2)
                       <div class="d-flex align-items-center">
                            <a href="{{ route('addDokan') }}" class="btn btn-primary btn-round ml-auto">
                                    <i class="fa fa-plus"></i>
                                    Add Dokan
                            </a>
                    </div>
                       @else
                           <div class="d-flex align-items-center">
                               
                                <a  class="btn btn-primary btn-round ml-auto text-white">
                                        
                                        Sorry! <b> {{Auth::User()->user_role->user_role}} </b> Don't Have Permission Here!
                                </a>
                           </div>
                       @endif
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
                                       @if ($errors->any())
                                       <div class="alert alert-danger">
                                         <ul>
                                             @foreach ($errors->all() as $error)
                                               <li>{{ $error }}</li>
                                             @endforeach
                                         </ul>
                                       </div><br />
                                 @endif
                         <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover" >
                                <thead>
                                    <tr>
                                        <th>Dokan Name</th>
                                        <th>Description</th>
                                        <th>Dokan Image</th>
                                        <th>Created At</th>
                                        <th style="width: 10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($dokans as $dokan)
                                    <tr>
                                    <td>{{ $dokan->dokan_name }}</td>
                                    <td>{{ $dokan->dokan_description }}</td>
                                    <td class="tdCSS"> <img style="width:100%;max-width:400px" src="{{ asset('storage') }}/{{ $dokan->dokan_image }}" /> </td>
                                    <td>{{ $dokan->created_at }}</td>
                                        <td>
                                            <div class="form-button-action">   
                                             @if (Auth::user()->user_role_id == 2)
                                             <a href="{{ route('editDokan', $dokan->id) }}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            <a href="{{ route('deleteDokan', $dokan->id) }}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                             @else
                                             <a href="{{ route('deleteDokan', $dokan->id) }}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                             @endif      
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