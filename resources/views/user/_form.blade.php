{{ csrf_field() }}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label class="control-label col-sm-4" for="name">Name:</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="name" placeholder="Name" required name="name" value="{{ isset($user) ? $user->name : old('name') }}">
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
    <label class="control-label col-sm-4" for="username">Username:</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required value="{{ isset($user) ? $user->username : old('username') }}">
        @if ($errors->has('username'))
            <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label class="control-label col-sm-4" for="password">Password:</label>
    <div class="col-sm-8">
        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-4" for="cpassword">Confirm Password:</label>
    <div class="col-sm-8">
        <input type="password" class="form-control" id="cpassword" name="password_confirmation" placeholder="Confirm Password" required> 
    </div> 
</div>

<!-- Roles Form Input -->
<div class="form-group{{ $errors->has('roles') ? ' has-error' : '' }}">
    <label class="control-label col-sm-4" for="roles">Roles:</label>
    <div class="col-sm-8">
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
@if(isset($user))
    @include('shared._permissions', ['closed' => 'true', 'model' => $user ])
@endif