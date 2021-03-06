
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
                                <a href="" class="logo-name text-lg text-center"> <img src="{{asset('assets/images/swms-logo.png')}}" class="text-center" width="50px" height="50px" style="display: none;"><p style="width: 100%"><b>E-recording of Composts in ESWMS Office of Tabango, Leyte</b></p></a>
                                <p class="text-center m-t-md">Please login into your account.</p>
                                @if (Session::has('message'))
                                   <div class="alert alert-danger" style="text-align: center;">{{ Session::get('message') }}</div>
                                @endif
                                <form class="m-t-md" action="{{ route('login') }}" method="POST" autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                        <input type="text" name="username" value="{{ old('username') }}" class="form-control" placeholder="Username" required autofocus>
                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <label>
                                       <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                    <button type="submit" class="btn btn-success btn-block">Login</button>
                                    <a href="{{ route('password.request') }}" class="display-block text-center m-t-md text-sm">Forgot Password?</a>
                                    <p class="text-center m-t-xs text-sm">Do not have an account?</p>
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