
<li class="nav-item">
    <a href="{{ route('showArea') }}">
            <i class="fas fa-layer-group"></i>
            <p>Area</p>
            <span class="badge badge-success">{{ \App\Area::count() }} </span>
        </a>
    </li>

<li class="nav-item">
<a href="{{ route('showCategory') }}">
        <i class="fas fa-th-list"></i>
        <p>Category</p>
     <span class="badge badge-success">{{ \App\Category::count() }} </span>
    </a>
</li>

<li class="nav-item">
<a href="{{ route('showDokan') }}">
        <i class="fa fa-store"></i>
        <p>Dokan</p>
     <span class="badge badge-success">{{ \App\Dokan::count() }} </span>
    </a>
</li>

<li class="nav-item">
    <a data-toggle="collapse" href="#sidebarLayouts">
        <i class="fas fa-cogs"></i>
        <p>Settings</p>
        <span class="caret"></span>
    </a>
    <div class="collapse" id="sidebarLayouts">
        <ul class="nav nav-collapse">
            <li>
                <a href="{{ route('logoChange') }}">
                    <span class="sub-item">Logo Change</span>
                </a>
            </li>

        </ul>
    </div>
</li>