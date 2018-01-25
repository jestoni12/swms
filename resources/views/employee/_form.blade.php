{{csrf_field()}}
<div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="firstname">Firstname :</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="firstname" placeholder="Firstname" required name="firstname" value="{{ isset($emps) ? $emps->firstname : old('firstname') }}">
        @if ($errors->has('firstname'))
            <span class="help-block">
                <strong>{{ $errors->first('firstname') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('middlename') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="middlename">Middlename :</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="middlename" placeholder="Middlename" required name="middlename" value="{{ isset($emps) ? $emps->middlename : old('middlename') }}">
        @if ($errors->has('middlename'))
            <span class="help-block">
                <strong>{{ $errors->first('middlename') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="lastname">Lastname :</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="lastname" placeholder="Lastname" required name="lastname" value="{{ isset($emps) ? $emps->lastname : old('lastname') }}">
        @if ($errors->has('lastname'))
            <span class="help-block">
                <strong>{{ $errors->first('lastname') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('job') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="job">Job :</label>
    <div class="col-sm-9">
        <select class="form-control" name="job_id" id="job_id" placeholder="Job">
            @foreach($jobs as $job)
                <option value="{{ $job->id }}" {{ $emps->job_id == $job->id ? 'selected' : '' }}>{{ ucfirst($job->description) }}</option>
            @endforeach
        </select>
        @if ($errors->has('job'))
            <span class="help-block">
                <strong>{{ $errors->first('job') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="status">Status:</label>
    <div class="col-sm-9">
        <select class="form-control" name="status" placeholder="Status" id="status" required>
            <option value="Active" {{ $emps->status == "Active" ? 'selected' : '' }}>Active</option>
            <option value="Inactive" {{ $emps->status == "Inactive" ? 'selected' : '' }}>Inactive</option>
        </select>
        @if ($errors->has('status'))
            <span class="help-block">
                <strong>{{ $errors->first('status') }}</strong>
            </span>
        @endif
    </div>
</div>