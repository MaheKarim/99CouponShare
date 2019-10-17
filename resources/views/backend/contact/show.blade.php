@extends('backend._layout')
@section('title')
    Show Contact Req
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
                          
                        {{-- <a href="{{ route('addDokan') }}" class="btn btn-primary btn-round ml-auto">
                                <i class="fa fa-plus"></i>
                                Add Dokan
                            </a>
                        </div> --}}
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

                                        <th>Contact Namee</th>
                                        <th>Contact Mail</th>
                                        <th>Contact Web</th>
                                        <th>Contact MSG</th>
                                       
                                        <th style="width: 10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($contactsubmits as $contactsubmit)
                                    
                                
                                    <tr>
                                    <td>{{ $contactsubmit->contact_name }}</td>
                                    <td>{{ $contactsubmit->contact_mail }}</td>
                                    <td>{{ $contactsubmit->contact_web }}</td>
                                    <td>{{ $contactsubmit->contact_msg }}</td>
                                    
                                        <td>
                                            <div class="form-button-action">
                                            {{-- <a href="{{ route('deleteMail', $newslater->id) }}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                            <i class="fa fa-times">X</i>
                                            </a> --}}
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