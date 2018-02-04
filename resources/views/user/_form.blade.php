{{ csrf_field() }}
<div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="firstname">First Name:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="firstname" placeholder="First Name" required name="firstname" value="{{ isset($user) ? $user->firstname : old('firstname') }}">
        @if ($errors->has('firstname'))
            <span class="help-block">
                <strong>{{ $errors->first('firstname') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('middlename') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="middlename">Middle Name:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="middlename" placeholder="Middle Name" required name="middlename" value="{{ isset($user) ? $user->middlename : old('middlename') }}">
    </div>
</div>
<div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="lastname">Last Name:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="lastname" placeholder="Last Name" required name="lastname" value="{{ isset($user) ? $user->lastname : old('lastname') }}">
        @if ($errors->has('lastname'))
            <span class="help-block">
                <strong>{{ $errors->first('lastname') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="username">Username:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required value="{{ isset($user) ? $user->username : old('username') }}">
        @if ($errors->has('username'))
            <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="status">Status:</label>
    <div class="col-sm-9">
        <select class="form-control" name="status" placeholder="Status" id="status" required>
            @if(isset($user))
                <option value="Active" {{ $user->status == "Active" ? 'selected' : '' }}>Active</option>
                <option value="Inactive" {{ $user->status == "Inactive" ? 'selected' : '' }}>Inactive</option>
            @else
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            @endif
        </select>
        @if ($errors->has('status'))
            <span class="help-block">
                <strong>{{ $errors->first('status') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="password">Password:</label>
    <div class="col-sm-9">
        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-3" for="cpassword">Confirm Password:</label>
    <div class="col-sm-9">
        <input type="password" class="form-control" id="cpassword" name="password_confirmation" placeholder="Confirm Password" required> 
    </div> 
</div>

<!-- Roles Form Input -->
<div class="form-group{{ $errors->has('roles') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="roles">Roles:</label>
    <div class="col-sm-9">
        <select class="form-control" id="roles" multiple="true" name="roles[]">
            @if(isset($user))
                @foreach($roles as $role)
                    <option value="{{$role->id}}" {{in_array($role->id,$user_role) ? 'selected' : ''}}>{{$role->name}}</option>
                @endforeach
            @else
                @foreach($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            @endif
        </select>
        @if ($errors->has('roles'))
            <span class="help-block">
                <strong>{{ $errors->first('roles') }}</strong>
            </span>
        @endif
    </div>
</div>
<!-- Permissions -->
{{--

@if(isset($user))
    @include('shared._permissions', ['closed' => 'true', 'model' => $user ])
@endif

--}}
