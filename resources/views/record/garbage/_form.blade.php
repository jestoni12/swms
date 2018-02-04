{{csrf_field()}}
<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="description">Garbage Description:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="description" placeholder="Name" required name="description" value="{{ isset($garbage) ? $garbage->description : old('description') }}">
        @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('total_weight') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="total_weight">Total Garbage Weight:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="total_weight" placeholder="kilogram" required name="total_weight" value="{{ isset($garbage) ? $garbage->total_weight : old('total_weight') }}">
        @if ($errors->has('total_weight'))
            <span class="help-block">
                <strong>{{ $errors->first('total_weight') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('recycable_weight') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="recycable_weight">Recycable Garbage Weight:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="recycable_weight" placeholder="kilogram" required name="recycable_weight" value="{{ isset($garbage) ? $garbage->recycable_weight : old('recycable_weight') }}">
        @if ($errors->has('recycable_weight'))
            <span class="help-block">
                <strong>{{ $errors->first('recycable_weight') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('biodegradable_weight') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="biodegradable_weight">Biodegradable Garbage Weight:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="biodegradable_weight" placeholder="kilogram" required name="biodegradable_weight" value="{{ isset($garbage) ? $garbage->biodegradable_weight : old('biodegradable_weight') }}">
        @if ($errors->has('biodegradable_weight'))
            <span class="help-block">
                <strong>{{ $errors->first('biodegradable_weight') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('remarks') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="remarks">Remarks:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="remarks" placeholder="Remarks" name="remarks" value="{{ isset($garbage) ? $garbage->remarks : old('remarks') }}">
        @if ($errors->has('remarks'))
            <span class="help-block">
                <strong>{{ $errors->first('remarks') }}</strong>
            </span>
        @endif
    </div>
</div>