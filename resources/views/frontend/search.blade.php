@extends('frontend.layout')

@section('content')
<div class="container">
    
  {{-- <form method="GET" action="{{ url('index') }}">
        <div class="row">
            <div class="col-md-6">
                <input type="text" name="search" class="form-control" placeholder="Search">
            </div>
            <div class="col-md-6">
                <button class="btn btn-info">Search</button>
            </div>
        </div>
    </form>
<br/> --}}

<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
       
    </tr>
    @if(count($users) > 0)
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->mail }}</td>
           
        </tr>
        @endforeach
    @else
    <tr>
        <td colspan="3" class="text-danger">Result not found.</td>
    </tr>
    @endif
</table>
</div>
@endsection