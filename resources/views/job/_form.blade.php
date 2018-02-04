{{csrf_field()}}
<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="description">Job Description:</label>
    <div class="col-sm-9">
        <input type="hidden" name="job_id" value="{{ isset($jobs) ? $jobs->id : '' }}">
        <input type="text" class="form-control" id="description" placeholder="Description" required name="description" value="{{ isset($jobs) ? $jobs->description : old('description') }}">
        @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="status">Status:</label>
    <div class="col-sm-9">
        <select class="form-control" name="status" placeholder="Status" id="status" required>
            <option value="Active" {{ $jobs->status == "Active" ? 'selected' : '' }}>Active</option>
            <option value="Inactive" {{ $jobs->status == "Inactive" ? 'selected' : '' }}>Inactive</option>
        </select>
        @if ($errors->has('status'))
            <span class="help-block">
                <strong>{{ $errors->first('status') }}</strong>
            </span>
        @endif
    </div>
</div>