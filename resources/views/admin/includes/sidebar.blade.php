<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" src="{{ asset('dashboard/img/profile_small.jpg') }}" />
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">
                            @if(Auth::guard('admin')->check())
                            {{Auth::guard('admin')->user()->name}}
                            @else
                            ....
                            @endif
                        </span>
                        <span class="text-muted text-xs block">Admin<b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="{{ request()->routeIs('admin.categories.index') ? 'active' : '' }}">
                <a href="{{ route('admin.categories.index') }}"><i class="fa fa-home"></i> <span class="nav-label">Category</span></a>
            </li>
            <li class="{{ request()->routeIs('admin.products.list') ? 'active' : '' }}">
                <a href="{{ route('admin.products.list') }}"><i class="fa fa-home"></i> <span class="nav-label">Products</span></a>
            </li>
            <li class="{{ request()->routeIs('admin.brands.all') ? 'active' : '' }}">
                <a href="{{ route('admin.brands.all') }}"><i class="fa fa-home"></i> <span class="nav-label">Brands</span></a>
            </li>
        
            <li>
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Profiles</span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admin.change.password') }}">Change Password</a></li>
                    <li><a href="{{ route('admin.change.profile', Auth::guard('admin')->id() ?? '') }}">Update Profile</a></li>
                </ul>
            </li>
        </ul>

    </div>
</nav>


