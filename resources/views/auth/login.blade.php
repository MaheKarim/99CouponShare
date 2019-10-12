@extends('frontend.layout')

@section('content')
<main id="mainContent" class="main-content">
    <div class="page-container ptb-60">
        <div class="container">
            <section class="sign-area panel p-40">
                <h3 class="sign-title">Sign In <small>Or <a href="signup.html" class="color-green">Sign Up</a></small></h3>
                <div class="row row-rl-0">
                    <div class="col-sm-6 col-md-7 col-left">
                        <form class="p-40" action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="sr-only">Email</label>
                                <input type="email" class="form-control input-lg" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Password</label>
                                <input type="password" class="form-control input-lg" placeholder="Password" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <a href="#" class="forgot-pass-link color-green">Forget Youe Password ?</a>
                            </div>
                            <div class="custom-checkbox mb-20">
                                <input type="checkbox" id="remember_account" checked>
                                <label class="color-mid" for="remember_account">Keep me signed in on this computer.</label>
                            </div>
                            <button type="submit" class="btn btn-block btn-lg">Sign In</button>
                        </form>
                        <span class="or">Or</span>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
@endsection
