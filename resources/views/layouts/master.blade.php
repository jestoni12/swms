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
                    <div class="topmenu-outer">
                        <div class="top-menu">
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
                    <ul class="menu accordion-menu">
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>User Management</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li class="{{ Request::is('users*') ? 'active' : '' }}"><a href="{{ route('users.index') }}">User</a></li>
                                <li class="{{ Request::is('roles*') ? 'active' : '' }}"><a href="{{ route('roles.index') }}">Permission</a></li>
                            </ul>
                        </li>
                        <li class="droplink {{ Request::is('employees*') ? 'active' : '' }}" style=""><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-list"></span><p>Employee Management</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                @can('view_employees')
                                    <li class="{{ Request::is('employees*') ? 'active' : '' }}"><a href="{{ route('employees') }}">Employees</a></li>
                                @endcan
                                @can('view_jobs')
                                    <li class="{{ Request::is('jobs*') ? 'active' : '' }}"><a href="{{ route('jobs') }}">Jobs</a></li>
                                @endcan
                            </ul>
                        </li>
                        <li class="droplink {{ Request::is('record*') ? 'active' : '' }}"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-bar"></span><p>Record</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li class="{{ Request::is('garbage*') ? 'active' : '' }}"><a href="{{ route('create_garbage') }}">Waste</a></li>
                                <li class="{{ Request::is('fertilizer*') ? 'active' : '' }}"><a href="{{ route('create_fertilizer') }}">Fertilizer</a></li>
                            </ul>
                        </li>
                        <li  style="margin-bottom:100px;" class="droplink {{ Request::is('reports*') ? 'active' : '' }}"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-file"></span><p>Reports</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li class="{{ Request::is('reports/fertilizer*') ? 'active' : '' }}"><a href="{{ route('fertilizer') }}">Fertilizer Report</a></li>
                                <li class="{{ Request::is('reports/garbage*') ? 'active' : '' }}"><a href="{{ route('garbage') }}">Waste Report</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->
            <div class="page-inner">
                <div class="page-title">
                    @yield('content_header')
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
        @include('layouts.script')
    </body>
</html>