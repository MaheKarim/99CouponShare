
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

                    @admin
                    @include('backend._inc._sidebar4admin')
                    @endadmin

                    @agent
                    <li class="nav-item">
                            <a data-toggle="collapse" href="#submenu">
                                <i class="fas fa-bars"></i>
                                <p>Coupon</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="submenu">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a data-toggle="collapse" href="#subnav1">
                                            <span class="sub-item">Level 1</span>
                                        </a>
                                    </li>
                                    <li>
                                         <a href="{{ route('showArea') }}">
                                            <span class="sub-item">View Area</span>
                                        </a>
                                    </li>
                               </ul>
                            </div>
                        </li>
                    @endagent
            </div>
    </div>
</div>