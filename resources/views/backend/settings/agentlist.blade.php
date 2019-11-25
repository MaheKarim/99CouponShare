@extends('backend._layout')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">
            @yield('title','Show Agent List')
        </h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                      
                    <a href="#" class="btn btn-primary btn-round ml-auto">
                            {{-- <i class="fa fa-plus"></i> --}}
                        Show Agent
                    </a>
                   
                    </div>
                </div>
                <div class="card-body">
                <!-- Modal -->

                <div class="alert alert-primary" role="alert">
                    Full Feature is Coming!
                  </div>
                    
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
                                    <th>Agent Name</th>
                                    <th>Agent Login Mail</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($users as $user) 
                                <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
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