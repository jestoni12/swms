{{csrf_field()}}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="firstname">Fertilizer Name:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="name" placeholder="Name" required name="name" value="{{ isset($fertilizer) ? $fertilizer->name : old('name') }}">
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('remarks') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="remarks">Remarks:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="remarks" placeholder="Description" required name="remarks" value="{{ isset($fertilizer) ? $fertilizer->remarks : old('remarks') }}">
        @if ($errors->has('remarks'))
            <span class="help-block">
                <strong>{{ $errors->first('remarks') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('generated_kilo') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="generated_kilo">Plate Number:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="generated_kilo" placeholder="Plate Number" required name="generated_kilo" value="{{ isset($fertilizer) ? $fertilizer->generated_kilo : old('generated_kilo') }}">
        @if ($errors->has('generated_kilo'))
            <span class="help-block">
                <strong>{{ $errors->first('generated_kilo') }}</strong>
            </span>
        @endif
    </div>
</div>
