@extends('frontend.layout')

@section('content')
<div class="page-container ptb-60">
        <div class="container">
            <!-- Contact Us Area -->
             <!-- Notification Start -->
             @if (session()->has('success'))
             <div class="alert alert-success">
                 {{ session()->get('success') }}
             </div>
          @endif
<!-- Notification End -->
            <div class="contact-area contact-area-v1 panel">
                <div class="row row-tb-20">
                    <div class="col-xs-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="google-map-iframe embed-responsive-item" src="https://maps.google.com/maps?q=Daffodil%20International%20university&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                        </div>
                    </div>
                </div>
                <div class="ptb-30 prl-30">
                    <div class="row row-tb-20">
                        <div class="col-xs-12 col-md-6">
                            <div class="contact-area-col contact-info">
                                <div class="contact-info">
                                    <h3 class="t-uppercase h-title mb-20">Contact informations</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam officia accusamus qui est. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam officia accusamus qui est.</p>
                                    <ul class="contact-list mb-40">
                                        <li>
                                            <span class="icon lnr lnr-map-marker"></span>
                                            <h5>Address</h5>
                                            <p class="color-mid">Sobhanbag, Dhanmondi - 1207</p>
                                        </li>
                                        <li>
                                            <span class="icon lnr lnr-envelope"></span>
                                            <h5>Email</h5>
                                            <p class="color-mid">Email@address.com</p>
                                        </li>
                                        <li>
                                            <span class="icon lnr lnr-phone-handset"></span>
                                            <h5>Our phone</h5>
                                            <p class="color-mid">(+880) 177 8966 356</p>
                                        </li>
                                    </ul>
                                    <ul class="social-icons social-icons--colored list-inline">
                                        <li class="social-icons__item">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="social-icons__item">
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="social-icons__item">
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                        <li class="social-icons__item">
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </li>
                                        <li class="social-icons__item">
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="contact-area-col contact-form">
                                <h3 class="t-uppercase h-title mb-20">Get in touch</h3>
                            <form action="{{ url('contact-form') }}" method="post">
                                @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="contact_name" class="form-control" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="text" name="contact_mail" class="form-control" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label>Website</label>
                                        <input type="text" name="contact_web" class="form-control" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea rows="5" name="contact_msg" class="form-control" required="required"></textarea>
                                    </div>
                                    <button class="btn">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Contact Us Area -->
        </div>
    </div>
@endsection