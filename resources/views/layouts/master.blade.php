
<!DOCTYPE html>
<html>
    <head>
       @include('layouts.head')
    </head>
    <body class="page-header-fixed">
        <div class="overlay"></div>
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
            <h3><span class="pull-left">Bogart Brown</span> <a href="javascript:void(0);" class="pull-right" id="closeRight2"><i class="fa fa-angle-right"></i></a></h3>
            <div class="slimscroll chat">
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="assets/images/avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Hi There!
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        Hi! How are you?
                    </div>
                </div>
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="assets/images/avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Fine! do you like my project?
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        Yes, It's clean and creative, good job!
                    </div>
                </div>
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="assets/images/avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Thanks, I tried!
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        Good luck with your sales!
                    </div>
                </div>
            </div>
            <div class="chat-write">
                <form class="form-horizontal" action="javascript:void(0);">
                    <input type="text" class="form-control" placeholder="Say something">
                </form>
            </div>
		</nav>
        <div class="menu-wrap">
            <nav class="profile-menu">
                <div class="profile"><img src="assets/images/profile-menu-image.png" width="60" alt="David Green"/><span>David Green</span></div>
                <div class="profile-menu-list">
                    <a href="#"><i class="fa fa-star"></i><span>Home</span></a>
                    <a href="#"><i class="fa fa-bell"></i><span>Profile</span></a>
                    <a href="#"><i class="fa fa-envelope"></i><span>Messages</span></a>
                    <a href="#"><i class="fa fa-comment"></i><span>Comments</span></a>
                </div>
            </nav>
            <button class="close-button" id="close-button">Close Menu</button>
        </div>
        <form class="search-form" action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form -->
        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a href="" class="logo-text"><span>SWMS</span></a>
                    </div><!-- Logo Box -->
                    <div class="search-button">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left" style="display: none;">
                                <li>		
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                                </li>
                                <li>
                                    <a href="#cd-nav" class="waves-effect waves-button waves-classic cd-nav-trigger"><i class="fa fa-diamond"></i></a>
                                </li>
                                <li>		
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <i class="fa fa-cogs"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-md dropdown-list theme-settings" role="menu">
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Fixed Header 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right fixed-header-check" checked>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Fixed Sidebar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right fixed-sidebar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Horizontal bar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right horizontal-bar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Toggle Sidebar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right toggle-sidebar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Compact Menu 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right compact-menu-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Hover Menu 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right hover-menu-check">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Boxed Layout 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right boxed-layout-check">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Choose Theme Color
                                                    <div class="color-switcher">
                                                        <a class="colorbox color-blue" href="?theme=blue" title="Blue Theme" data-css="blue"></a>
                                                        <a class="colorbox color-green" href="?theme=green" title="Green Theme" data-css="green"></a>
                                                        <a class="colorbox color-red" href="?theme=red" title="Red Theme" data-css="red"></a>
                                                        <a class="colorbox color-white" href="?theme=white" title="White Theme" data-css="white"></a>
                                                        <a class="colorbox color-purple" href="?theme=purple" title="purple Theme" data-css="purple"></a>
                                                        <a class="colorbox color-dark" href="?theme=dark" title="Dark Theme" data-css="dark"></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="no-link"><button class="btn btn-default reset-options">Reset Options</button></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li>	
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search" style="display: none;"><i class="fa fa-search"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <span class="user-name">{{ Auth::user()->username }}<i class="fa fa-angle-down"></i></span>
                                        <img class="img-circle avatar" src="{{ asset('assets/images/swms-logo.png') }}" width="40" height="40" alt="">
                                    </a>
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                        <li role="presentation">
                                            <a href="" style="display: none;"><i class="fa fa-user"></i>Profile</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="" style="display: none;"><i class="fa fa-calendar"></i>Calendar</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="" style="display: none;"><i class="fa fa-cog"></i>Setting</a>
                                        </li>
                                        <li role="presentation"><a href="" style="display: none;"><i class="fa fa-lock"></i>Lock screen</a></li>
                                        <li role="presentation">
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out m-r-xs"></i>Log out
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
            <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <div class="sidebar-header" style="display: none;">
                        <div class="sidebar-profile">
                            <a href="javascript:void(0);" id="profile-menu-link">
                                <div class="sidebar-profile-image">
                                    <img src="{{ asset('assets/images/swms-logo.png') }}" class="img-circle img-responsive" alt="">
                                </div>
                                <div class="sidebar-profile-details">
                                    <span>{{Auth::user()->username}}
                                        <br>
                                        <small>
                                        @foreach(Auth::user()->roles as $k => $role)
                                            @if($k == 0)
                                                {{$role->name}}
                                            @else
                                                , {{$role->name}}
                                            @endif
                                        @endforeach
                                        </small>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <ul class="menu accordion-menu">
                        @can('view_users','view_roles','view_user_logs')
                            <li class="droplink {{ Request::is('users*') ? 'active' : '' }}"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>User Management</p><span class="arrow"></span></a>
                                <ul class="sub-menu">
                                    @can('view_users')
                                        <li class="{{ Request::is('users*') ? 'active' : '' }}"><a href="{{ route('users.index') }}">Users</a></li>
                                    @endcan
                                    @can('view_roles')
                                        <li class="{{ Request::is('roles*') ? 'active' : '' }}"><a href="{{ route('roles.index') }}">Roles</a></li>
                                    @endcan
                                    @can('view_user_logs')
                                        <li class="{{ Request::is('record/userlog*') ? 'active' : '' }}"><a href="{{ route('userlogs') }}">User Logs</a></li>
                                    @endcan
                                </ul>
                            </li>
                        @endcan
                        @can('view_jobs','view_employees')
                            <li class="droplink {{ Request::is('employees*') ? 'active' : '' }}"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-list"></span><p>Employee Management</p><span class="arrow"></span></a>
                                <ul class="sub-menu">
                                    @can('view_employees')
                                        <li class="{{ Request::is('employees*') ? 'active' : '' }}"><a href="{{ route('employees') }}">Employees</a></li>
                                    @endcan
                                    @can('view_jobs')
                                        <li class="{{ Request::is('jobs*') ? 'active' : '' }}"><a href="{{ route('jobs') }}">Jobs</a></li>
                                    @endcan
                                </ul>
                            </li>
                        @endcan
                        @can('view_fertilizers','view_garbages')
                            <li class="droplink {{ Request::is('record*') ? 'active' : '' }}"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-book"></span><p>Records</p><span class="arrow"></span></a>
                                <ul class="sub-menu">
                                    @can('view_fertilizers')
                                        <li class="{{ Request::is('record/fertilizer*') ? 'active' : '' }}"><a href="{{ route('fertilizer') }}">Fertilizer</a></li>
                                    @endcan
                                    @can('view_garbages')
                                        <li class="{{ Request::is('record/garbage*') ? 'active' : '' }}"><a href="{{ route('garbage') }}">Garbage</a></li>
                                    @endcan
                                </ul>
                            </li>
                        @endcan
                        @can('view_fertilizer_report','view_garbage_report','view_emp_dtr_report')
                            <li  style="margin-bottom:100px;" class="droplink {{ Request::is('reports*') ? 'active' : '' }}"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-file"></span><p>Reports</p><span class="arrow"></span></a>
                                <ul class="sub-menu">
                                    @can('view_fertilizer_report')
                                        <li class="{{ Request::is('reports/fertilizer*') ? 'active' : '' }}"><a href="#" data-toggle="modal" data-target="#fertilizer_print">Fertilizer Report</a></li>
                                    @endcan
                                    @can('view_garbage_report')
                                        <li class="{{ Request::is('reports/garbage*') ? 'active' : '' }}"><a href="{{ route('garbage_report') }}" target="_blank">Garbage Report</a></li>
                                    @endcan
                                    @can('view_emp_dtr_report')
                                        <li class="{{ Request::is('reports/employee_dtr*') ? 'active' : '' }}"><a href="{{ route('employee_dtr') }}" target="_blank">Employee Dtr Report</a></li>
                                    @endcan
                                </ul>
                            </li>
                        @endcan
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->
            <div class="page-inner">
                <div class="page-title">
                    <h3>@yield('content_header')</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            @yield('content_header_link')
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    @include('flash::message')
                    @yield('content')
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s"><?php $date = date('Y') ?> {{ $date }}  &copy; BS Information Technology</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        <nav class="cd-nav-container" id="cd-nav">
            <header>
                <h3>Navigation</h3>
                <a href="#0" class="cd-close-nav">Close</a>
            </header>
            <ul class="cd-nav list-unstyled">
                <li class="cd-selected" data-menu="index">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li data-menu="profile">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <p>Profile</p>
                    </a>
                </li>
                <li data-menu="inbox">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                        <p>Mailbox</p>
                    </a>
                </li>
                <li data-menu="#">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-tasks"></i>
                        </span>
                        <p>Tasks</p>
                    </a>
                </li>
                <li data-menu="#">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-cog"></i>
                        </span>
                        <p>Settings</p>
                    </a>
                </li>
                <li data-menu="calendar">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                        <p>Calendar</p>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="cd-overlay"></div>
        @include('layouts.script')
        @include('layouts.modalfunction')
    </body>
</html>