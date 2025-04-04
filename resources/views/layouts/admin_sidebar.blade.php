 <!-- Left Panel -->

 <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href=""><img src="{{asset('admin_assets/images/whiteBG.png')}}" alt="Logo"></a>
            <a class="navbar-brand hidden" href=""><img src="{{asset('admin_assets/images/admin_logo.png')}}" width="50%" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{request()->is('admin') ? 'active' : '' }}">
                    <a href="{{route('dashborad')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>

                {{-- <h3 class="menu-title">Settings</h3> --}}
                <li class=" {{ request()->is('setting')  == 'setting' ? 'active' : '' }}">
                    <a href="{{route('setting')}}"> <i class="menu-icon ti-settings"></i>Settings</a>
                    {{-- <ul class="sub-menu children dropdown-menu">
                        <li class="{{ request()->is('setting') ? 'active' : '' }}"><i class="menu-icon fa fa-th"></i><a href="{{route('setting')}}">Update Settings</a></li>
                    </ul> --}}
                </li>

                <li class="{{ request()->is('cms') || request()->is('storecms') || request()->is('edit-cms/*') ? 'active' : '' }}">
                    <a href="{{ route('cms') }}">
                        <i class="menu-icon ti-receipt"></i>CMS Setting
                    </a>
                </li>
                
           
                {{-- <h3 class="menu-title">Services</h3>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Services Details</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{route('updateService')}}">Update Service Details</a></li>
                    </ul>
                </li> --}}
               
                <li class="{{ request()->is('service_list') || request()->is('add_service') || request()->is('edit-service/*') ? 'active' : '' }}">
                    <a href="{{route('service_list')}}">
                        <i class="menu-icon fa fa-tasks"></i> Service Master
                    </a>
                    {{-- <ul class="sub-menu children dropdown-menu">
                        <li class="{{ request()->is('service_list') ? 'active' : '' }}">
                            <i class="menu-icon ti-layout-grid2"></i><a href="{{ route('service_list') }}">All Services</a>
                        </li>
                        <li class="{{ request()->is('add_service') ? 'active' : '' }}">
                            <i class="menu-icon ti-receipt"></i><a href="{{ route('add_service') }}">Add Service</a>
                        </li>
                    </ul> --}}
                </li>
                

                {{-- <h3 class="menu-title">Blogs</h3> --}}
                <li class="{{request()->is('bloglist') || request()->is('addblog') || request()->is('edit-blog/*')? 'active' : '' }}">
                    <a href="{{route('bloglist')}}"> <i class="menu-icon fa fa-th"></i>Blogs Details</a>
                    {{-- <ul class="sub-menu children dropdown-menu">
                        <li class="{{ request()->is('bloglist') ? 'active' : '' }}"><i class="menu-icon ti-layout-grid2"></i><a href="{{route('bloglist')}}">Blog List</a></li>
                        <li class="{{ request()->is('addblog') ? 'active' : '' }}"><i class="menu-icon ti-thought"></i><a href="{{route('addblog')}}">Add Blogs</a></li>
                    </ul> --}}
                </li>
                {{-- <h3 class="menu-title">Users</h3> --}}
                <li class="menu-item-has-children dropdown {{request()->is('allUsers') || request()->is('allcontactus') ? 'active' : '' }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-user"></i>Users Detail</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li class="{{ request()->is('allUsers') ? 'active' : '' }}"><i class="menu-icon fa fa-user"></i><a href="{{route('allUsers')}}">All Users</a></li>
                        <li class="{{ request()->is('allcontactus') ? 'active' : '' }}"><i class="menu-icon fa fa-users"></i><a href="{{route('allcontactus')}}">users of contact us</a></li>
                        {{-- <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li> --}}
                        {{-- <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li> --}}
                    </ul>
                </li>

                <li class="{{request()->is('seo_details') || request()->is('addblog') || request()->is('edit-blog/*')? 'active' : '' }}">
                    <a href="{{route('seo_details')}}"> <i class="menu-icon fa fa-search"></i>SEO Page Detail</a>
                    {{-- <ul class="sub-menu children dropdown-menu">
                        <li class="{{ request()->is('bloglist') ? 'active' : '' }}"><i class="menu-icon ti-layout-grid2"></i><a href="{{route('bloglist')}}">Blog List</a></li>
                        <li class="{{ request()->is('addblog') ? 'active' : '' }}"><i class="menu-icon ti-thought"></i><a href="{{route('addblog')}}">Add Blogs</a></li>
                    </ul> --}}
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->