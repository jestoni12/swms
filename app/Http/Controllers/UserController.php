<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\Permission;
use App\Authorizable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
class UserController extends Controller
{
    use Authorizable;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->page_num = 15;
    }

    public function index()
    {
        $result = User::where('status','Active')->latest()->orderBy('id','desc')->paginate($this->page_num);
        return view('user.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::select('name', 'id')->get();
        return view('user.new', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|min:1',
            'lastname' => 'required|min:1',
            'username' => 'required|unique:users',
            'password' => 'required|min:4',
            'roles' => 'required|min:1'
        ]);

        // hash password
        $request->merge(['password' => bcrypt($request->get('password'))]);

        // Create the user
        if ( $user = User::create($request->except('roles', 'permissions')) ) {

            $this->syncPermissions($request, $user);

            flash('User has been created.');

        } else {
            flash()->error('Unable to create user.');
        }

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all('name', 'id');
        $permissions = Permission::all('name', 'id');
        $user_role = $user->roles->pluck('id')->toArray();
        return view('user.edit', compact('user', 'roles', 'permissions','user_role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $this->validate($request, [
            'firstname' => 'required|min:1',
            'lastname' => 'required|min:1',
            'username' => 'required|unique:users,username,' . $id,
            'roles' => 'required|min:1',
            'status' => 'required'
        ]);

        // Get the user
        $user = User::findOrFail($id);

        // Update user
        $user->fill($request->except('roles', 'permissions', 'password'));
        $user->status = $request->input('status');
        // check for password change
        if($request->get('password')) {
            $user->password = bcrypt($request->get('password'));
        }

        // Handle the user roles
        $this->syncPermissions($request, $user);

        $user->save();

        flash()->success('User has been updated.');

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @internal param Request $request
     */
    public function destroy($id)
    {
        if ( Auth::user()->id == $id ) {
            flash()->warning('Deletion of currently logged in user is not allowed :(')->important();
            return redirect()->back();
        }

        if( User::findOrFail($id)->delete() ) {
            flash()->success('User has been deleted');
        } else {
            flash()->success('User not deleted');
        }

        return redirect()->back();
    }

    /**
     * Sync roles and permissions
     *
     * @param Request $request
     * @param $user
     * @return string
     */
    private function syncPermissions(Request $request, $user)
    {
        // Get the submitted roles
        $roles = $request->get('roles', []);
        $permissions = $request->get('permissions', []);

        // Get the roles
        $roles = Role::find($roles);

        // check for current role changes
        if( ! $user->hasAllRoles( $roles ) ) {
            // reset all direct permissions for user
            $user->permissions()->sync([]);
        } else {
            // handle permissions
            $user->syncPermissions($permissions);
        }

        $user->syncRoles($roles);

        return $user;
    }

    public function print(){
        $users = User::all();

        // $pdf = PDF::setPaper("letter");
        // $pdf->loadView('user.print',compact('users'));
        // return $pdf->stream();

        $pdf = PDF::loadView('user.print',compact('users'), [], [
            'format' => 'letter'
        ]);
        return $pdf->stream('list_user.pdf');
    }

    public function print2(){
        $users = User::all();

        // $pdf = PDF::setPaper("letter");
        // $pdf->loadView('user.print_barcode',compact('users'));
        // return $pdf->stream();

        $pdf = PDF::loadView('user.print_barcode',compact('users'), [], [
            'format' => 'letter'
        ]);
        return $pdf->stream('list_user_barcode.pdf');
    }
}
