@extends('backend._layout')

@section('content')

<div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                @yield('title','Show Category')
            </h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                          
                        <a href="{{ route('create-category') }}" class="btn btn-primary btn-round ml-auto">
                                <i class="fa fa-plus"></i>
                                Add Category
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
                                        <th>Category Name</th>
                                        <th> Category Description </th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th style="width: 10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ($categories as $category) 
                                    <tr>
                                    <td>{{ $category->category_name }}</td>
                                    <td>{{ $category->category_description }}</td>
                                    <td>{{ $category->created_at }}</td>
                                    <td>{{ $category->updated_at }}</td>
                                        <td>
                                            <div class="form-button-action">
                                            <a href="{{ route('editCategory', $category->id) }}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                @if( $category->id != 1) 
                                                <a href="{{ route('deleteCategory', $category->id) }}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                     @endforeach
                                </tbody>
                            </table>
                            <?php echo $categories->links(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection