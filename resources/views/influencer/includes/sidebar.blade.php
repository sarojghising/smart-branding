<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" src="{{ asset('dashboard/img/profile.jpeg') }}" width="50" />
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">
                            @if(Auth::guard('influencer')->check())
                            {{Auth::guard('influencer')->user()->name}}
                            @else
                            ....
                            @endif
                        </span>
                        <span class="text-muted text-xs block">Influencer<b class="caret"></b></span>
                        Dashboard
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('influencer.logout') }}">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>

            <li class="{{ request()->routeIs('influencer.list.of.brands') ? 'active' : '' }}">
                <a href="{{ route('influencer.list.of.brands') }}"><i class="fa fa-home"></i> <span class="nav-label">Brands</span></a>
            </li>
        
            {{-- <li class="{{ request()->routeIs('brand.categories.index') ? 'active' : '' }}">
                <a href="{{ route('brand.categories.index') }}"><i class="fa fa-shopping-cart"></i> <span
                        class="nav-label">Category</span></a>
            </li> --}}

           

            {{-- <li class="">
                <a href=""><i class="fa fa-home"></i> <span class="nav-label">Review</span></a>
            </li> --}}

            <li>
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Profiles</span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="">Change Password</a></li>
                    <li><a href="">Update Profile</a></li>
                </ul>
            </li>
        </ul>

    </div>
</nav>
