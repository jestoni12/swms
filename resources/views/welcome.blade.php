<!DOCTYPE html>
<html>
    <head>
         @include('layouts.head')
    </head>
    <body class="page-login">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="" class="logo-name text-lg text-center">WELCOME SWMS</a>
                                <p class="text-center m-t-md">Please login into your account.</p>
                                <form class="m-t-md" action="{{ route('login') }}" method="POST" autocomplete="off">
                                    <br/>
                                    <br/>
                                    <h4>Barcode Login Buhatonon Pajud.</h4>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <p class="text-center m-t-xs text-sm">Login With Username and password?</p>
                                    <a href="{{ route('login') }}" class="btn btn-default btn-block m-t-md">Login</a>
                                    <a href="{{ route('register') }}" class="btn btn-default btn-block m-t-md">Create an account</a>
                                </form>
                                <p class="text-center m-t-xs text-sm">2017 &copy; BS Information Technology</p>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        @include('layouts.script')
    </body>
</html>