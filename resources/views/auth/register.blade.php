@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
  <style>
   .error{ color:red; } 
  </style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        {{ $errors->first('name') }}
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email"  data-validation="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- User Role -->
                    @admin
                        <div class="form-group row">
                                <label for="user_role_id" class="col-md-4 col-form-label text-md-right">{{ __('Select A Role') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="user_role_id">
                                        <option disabled selected>Select a role</option>
                                        @php( $userrole = \App\user_role::all())
                                        @foreach($userrole as $user_role)
                                            <option value="{{ $user_role->id }}">{{ $user_role->user_role }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                   @endadmin
                   
                   @if(!auth::check())
                   <input type="hidden" name="user_role_id" value="3">
                   @endif
                   {{-- <input type="hidden" name="user_rolee_id"  value="{{ $user_role_id == 3 }}"> --}}
                        <!-- User Role End -->

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" data-validation="length" data-validation-length="min6"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" data-validation="confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <script>
        if ($("#customerform").length > 0) {
         $("#customerform").validate({
          
         rules: {
           name: {
             required: true,
             maxlength: 50,
             minlength: 3,
           },
      
             email: {
                     required: true,
                     maxlength: 50,
                     email: true,
                 },    
         },
         messages: {
            
           name: {
             required: "Please enter name",
             maxlength: "Your last name maxlength should be 50 characters long."
           },
           
           email: {
               required: "Please enter valid email",
               email: "Please enter valid email",
               maxlength: "The email name should less than or equal to 50 characters",
             },
             
         },
         })
       }
</script> --}}

@endsection
