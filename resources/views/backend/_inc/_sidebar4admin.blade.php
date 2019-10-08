</li>
<li class="nav-item">
    <a data-toggle="collapse" href="#base">
        <i class="fas fa-layer-group"></i>
        <p>Area</p>
        <span class="caret"></span>
    </a>
    <div class="collapse" id="base">
        <ul class="nav nav-collapse">
            <li>
                <a href="{{route('addArea')}}">
                    <span class="sub-item">Add Area</span>
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

<li class="nav-item">
        <a data-toggle="collapse" href="#submenu">
            <i class="fas fa-bars"></i>
            <p>Category</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="submenu">
            <ul class="nav nav-collapse">
                <li>
                <a href="{{ route('showCategory') }}">
                        <span class="sub-item">Show Category</span>  
                    </a>
                </li>
           </ul>
        </div>
    </li>

  <li class="nav-item">
    <a data-toggle="collapse" href="#sidebarLayouts">
        <i class="fas fa-th-list"></i>
        <p>Dokan</p>
        <span class="caret"></span>
    </a>
    <div class="collapse" id="sidebarLayouts">
        <ul class="nav nav-collapse">
            <li>
                <a href="sidebar-style-1.html">
                    <span class="sub-item">Add Dokan</span>
                </a>
            </li>
            <li>
                <a href="static-sidebar.html">
                    <span class="sub-item">RUD Dokan</span>
                </a>
            </li>
        </ul>
    </div>
</li>