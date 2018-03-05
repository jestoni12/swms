<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\UserLog;
use Illuminate\Http\Request;
use Auth;
use Session;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Change the needed authorization credentials for email to username from the request.
     *
     * @return string
     */

    public function username()
    {
        return 'username';
    }

    protected function redirectTo()
    {
        $log = new UserLog;
        $log->user_id = \Auth::user()->id;
        $log->status = 'in';
        $log->save();
    }
    public function logout(Request $request) {
        $log = new UserLog;
        $log->user_id = \Auth::user()->id;
        $log->status = 'out';
        $log->save();
        
        $this->guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        
        return redirect('/login');
    }
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        if (Auth::attempt(['username' => $username, 'password' => $password, 'status' => 'Active'])) {
            // Authentication passed...
            return redirect()->intended('/home');
        }
        else{
            Session::flash('message', "User is already inactive.Please contact to admistrator.");
            return redirect()->route('login');
        }
    }
}
