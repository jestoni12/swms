
<!DOCTYPE html>
<html>
    <head>
        @include('layouts.head')
    </head>
    <body class="page-register">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="index.html" class="logo-name text-lg text-center">SWMS</a>
                                <p class="text-center m-t-md">Create a SWMS's account</p>
                                <form class="m-t-md" action="{{ route('register') }}" method="POST" >
                                    {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" placeholder="First Name" required name="firstname" value="{{ old('firstname') }}">
                                        @if ($errors->has('firstname'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('firstname') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Middle Name"  name="middlename">
                                    </div>
                                    <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" placeholder="Last Name" required name="lastname" value="{{ old('lastname') }}">
                                        @if ($errors->has('lastname'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('lastname') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="username" placeholder="Username" required value="{{ old('username') }}">
                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>   
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block m-t-xs">Submit</button>
                                    <p class="text-center m-t-xs text-sm">Already have an account?</p>
                                    <a href="{{ route('login') }}" class="btn btn-default btn-block m-t-xs">Login</a>
                                </form>
                                <p class="text-center m-t-xs text-sm">2017 &copy; Bs Information Technology</p>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        @include('layouts.script')
    </body>
</html>