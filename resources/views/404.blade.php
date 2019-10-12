@extends('frontend.layout')
@section('title')
    Error 404 | Go to Your Mom
@endsection
@section('content')
    <main id="mainContent" class="main-content">
        <div class="page-container pt-40 pb-60">
            <div class="container">
                <section class="error-page-area">
                    <div class="container">
                        <div class="error-page-wrapper t-center">
                            <div class="error-page-header">
                                <span class="color-blue">4</span>
                                <span class="color-green">0</span>
                                <span class="color-blue">4</span>
                            </div>
                            <div class="error-page-footer">
                                <h5 class="color-mid mb-5">Oops !</h5>
                                <h2 class="t-uppercase m-10 color-green">Don't Found! Crying ?</h2>
                                <p class="color-muted mb-30 font-15">
                                    Go To Your Mom, Quick!
                                </p>
                            </div>
                            <a href="{{ url('/') }}" class="btn btn-rounded">Back to home page</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection