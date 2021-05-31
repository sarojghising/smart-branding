<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" src="{{ asset('dashboard/img/profile_small.jpg') }}" />
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">
                            @if(Auth::guard('brand')->check())
                            {{Auth::guard('brand')->user()->name}}
                            @else
                            ....
                            @endif
                        </span>
                        <span class="text-muted text-xs block">Brand<b class="caret"></b></span>
                        Dashboard
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('brand.logout') }}">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="{{ request()->routeIs('brand.campaigns.index') ? 'active' : '' }}">
                <a href="{{ route('brand.campaigns.index') }}"><i class="fa fa-home"></i> <span class="nav-label">My Campaigns</span></a>
            </li>

            <li class="">
                <a href=""><i class="fa fa-home"></i> <span class="nav-label">Category</span></a>
            </li>

            <li class="">
                <a href=""><i class="fa fa-home"></i> <span class="nav-label">Product Services</span></a>
            </li>

            <li class="">
                <a href=""><i class="fa fa-home"></i> <span class="nav-label">Target Audience</span></a>
            </li>


            <li class="">
                <a href=""><i class="fa fa-home"></i> <span class="nav-label">Post Selection</span></a>
            </li>

            <li class="">
                <a href=""><i class="fa fa-home"></i> <span class="nav-label">Review</span></a>
            </li>

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



