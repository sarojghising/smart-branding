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
            <li class="{{ request()->routeIs('admin.restaurant.index') ? 'active' : '' }}">
                <a href="{{ route('admin.restaurant.index') }}"><i class="fa fa-home"></i> <span class="nav-label">Restaurant</span></a>
            </li>
            <li class="{{ request()->routeIs('admin.category.index') ? 'active' : '' }}">
                <a href="{{ route('admin.category.index') }}"><i class="fa fa-calendar-minus-o"></i> <span class="nav-label">Categories</span></a>
            </li>
            <li class="{{ request()->routeIs('admin.menuItem.index') ? 'active' : '' }}">
                <a href="{{ route('admin.menuItem.index') }}"><i class="fa fa-shopping-cart"></i> <span class="nav-label">MenuItems</span></a>
            </li>
            <li class="{{ request()->routeIs('admin.order.list') ? 'active' : '' }}">
                <a href="{{ route("admin.order.list") }}"><i class="fa fa-first-order"></i> <span class="nav-label">Orders</span></a>
            </li>
            <li class="{{ request()->routeIs('admin.delivery.list') ? 'active' : '' }}">
                <a href="{{ route('admin.delivery.list') }}"><i class="fa fa-user"></i> <span class="nav-label">Delivery</span></a>
            </li>
            <li class="{{ request()->routeIs('admin.user.show') ? 'active' : '' }}">
                <a href="{{ route('admin.user.show') }}"><i class="fa fa-users"></i> <span class="nav-label">Users</span></a>
            </li>
            <li class="{{ request()->routeIs('admin.menuItem.review.show') ? 'active' : '' }}">
                <a href="{{ route('admin.menuItem.review.show') }}"><i class="fa fa-user"></i> <span class="nav-label">Reviews</span></a>
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


