@extends('backend._layout')

@section('content')
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
							<h5 class="text-white op-10 mb-2">Hello 
								<b> {{ Auth::user()->name }} </b>, You Are Our Great <b> {{ Auth::user()->user_role->user_role }} </b>
							</h5>
							</div>
							@admin
							<div class="ml-md-auto py-2 py-md-0">
								<a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
							<a href="{{ url('/register') }}" class="btn btn-secondary btn-round">Add Agent</a>
							</div>
							@endadmin
						</div>
					</div>
				</div>
			
				<!--  Start Bautiful Static Bar -->
				<div class="page-inner mt--5">
					@admin
				<div class="row row-card-no-pd mt--2">
					<div class="col-sm-6 col-md-3">
						<div class="card card-stats card-round">
							<div class="card-body ">
								<div class="row">
									<div class="col-5">
										<div class="icon-big text-center">
											<i class="flaticon-user-2 text-success"></i>
										</div>
									</div>
									<div class="col-7 col-stats">
										<div class="numbers">
											<p class="card-category">Total Admin</p>
											<h4 class="card-title"> {{$users = App\User::where('user_role_id','1')->count() }} </h4>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="card card-stats card-round">
							<div class="card-body ">
								<div class="row">
									<div class="col-5">
										<div class="icon-big text-center">
											<i class="icon-user-following text-success"></i>
										</div>
									</div>
									<div class="col-7 col-stats">
										<div class="numbers">
											<p class="card-category">Total Agent</p>
											<h4 class="card-title">{{ \App\User::where(['user_role_id' => 2])->get()->count() }}</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="card card-stats card-round">
							<div class="card-body">
								<div class="row">
									<div class="col-5">
										<div class="icon-big text-center">
											<i class="icon-people text-info"></i>
										</div>
									</div>
									<div class="col-7 col-stats">
										<div class="numbers">
											<p class="card-category">Total User</p>
										<h4 class="card-title">{{$users = App\User::where('user_role_id','3')->count() }}</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="card card-stats card-round">
							<div class="card-body">
								<div class="row">
									<div class="col-5">
										<div class="icon-big text-center">
											<i class="flaticon-twitter text-primary"></i>
										</div>
									</div>


									<div class="col-7 col-stats">
										<div class="numbers">
											<p class="card-category">Followers</p>
											<h4 class="card-title">+45K</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				  @include('backend._inc._adminBeautify')
				@endadmin
				<!-- Start For Agent Code -->
				 @agent
				  @include('backend.agent.staticbar')
                @endagent

				<!-- End For Agent Code -->
			</div>
				<!-- End Static Bar-->
			</div>
			@include('backend._inc._footer')
		</div> 
@endsection