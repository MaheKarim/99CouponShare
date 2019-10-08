
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