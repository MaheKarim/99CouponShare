
<li class="nav-item">
    <a href="{{ route('showArea') }}">
            <i class="fas fa-layer-group"></i>
            <p>Show Area</p>
            <span class="badge badge-success">{{ \App\Area::count() }} </span>
        </a>
</li>

<li class="nav-item">
<a href="{{ route('showCategory') }}">
        <i class="fas fa-th-list"></i>
        <p>Shop Category</p>
     <span class="badge badge-success">{{ \App\Category::count() }} </span>
    </a>
</li>

<li class="nav-item">
<a href="{{ route('showDokan') }}">
        <i class="fa fa-store"></i>
        <p>Show Shop</p>
     <span class="badge badge-success">{{ \App\Dokan::count() }} </span>
    </a>
</li>
<li class="nav-item">
        <a href="{{ route('showProduct') }}">
            <i class="fab fa-product-hunt"></i>
            <p>Shop Product</p>
            <span class="badge badge-success">{{ \App\Product::count() }} </span>
        </a>
    </li>

<li class="nav-item">
<a href="{{ route('showMailSubscribe') }}">
        <i class="fab fa-mailchimp"></i>
        <p>Email Subscriber List</p>
     <span class="badge badge-success">{{ \App\NewsLater::count() }} </span>
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
                <a href="{{ route('showcontact') }}">
                    <span class="sub-item">Show Contact</span>
                </a>
                <a href="{{ route('logoChange') }}">
                    <span class="sub-item">Logo Change</span>
                </a>
                <a href="{{ route('footerPartUpdatehere') }}">
                    <span class="sub-item">Footer Text</span>
                </a>
            </li>
        </ul>
    </div>
</li>