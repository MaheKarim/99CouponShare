
<!-- Sidebar -->
<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                <img src="{{ asset('/') }}assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->name }}
                            <span class="user-level">
                               {{ Auth::user()->user_role->user_role }} 
                            </span>
                          
                        </span>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <ul class="nav nav-primary">
                    <li class="nav-item">
                   <li class="nav-section">
                    <ul class="nav nav-primary">
						<li class="nav-item active">
                        <a  href="{{ url('/home')}}" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>	
                        </a>
                        </li>
                    </ul>
                    <hr>
                    @admin
                    @include('backend._inc._sidebar4admin')
                    @endadmin
                <!-- Dashboard Separate -->
                    @agent
                    @include('backend._inc._sidebar4agent')
                    @endagent

                    <li class="nav-item">
                        <a href="{{ route('showProduct') }}">
                            <i class="fab fa-mailchimp"></i>
                            <p>Disscount List</p>
                            <span class="badge badge-success">{{ \App\Product::count() }} </span>
                        </a>
                    </li>
            </div>
    </div>
</div>