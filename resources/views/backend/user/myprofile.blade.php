@extends('backend._layout')

@section('title')
    Profile
@endsection

@section('content')
<div class="page-inner">
    <div class="page-header  justify-content-center">
<div class="col-md-4">
    <div class="card card-profile">
        <div class="card-header" style="background-image: url('../assets/img/blogpost.jpg')">
            <div class="profile-picture">
                <div class="avatar avatar-xl">
                    <img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="user-profile text-center">
          

                <div class="name">{{ Auth::user()->name }}</div>
                <div class="job">Junior Dev</div>
                <div class="desc">A man who hates loneliness</div>
                <div class="social-media">
                    <a class="btn btn-info btn-twitter btn-sm btn-link" href="#"> 
                        <span class="btn-label just-icon"><i class="flaticon-twitter"></i> </span>
                    </a>
                    <a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#"> 
                        <span class="btn-label just-icon"><i class="flaticon-google-plus"></i> </span> 
                    </a>
                    <a class="btn btn-primary btn-sm btn-link" rel="publisher" href="#"> 
                        <span class="btn-label just-icon"><i class="flaticon-facebook"></i> </span> 
                    </a>
                    <a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#"> 
                        <span class="btn-label just-icon"><i class="flaticon-dribbble"></i> </span> 
                    </a>
                </div>
                <div class="view-profile">
                    <a href="#" class="btn btn-secondary btn-block">Update Profile</a>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row user-stats text-center">
                <div class="col">
                    <div class="number">125</div>
                    <div class="title">Post</div>
                </div>
                <div class="col">
                    <div class="number">25K</div>
                    <div class="title">Followers</div>
                </div>
                <div class="col">
                    <div class="number">134</div>
                    <div class="title">Following</div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
@endsection