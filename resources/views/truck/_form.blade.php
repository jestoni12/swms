{{ csrf_field() }}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="firstname">Name:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="name" placeholder="Name" required name="name" value="{{ isset($truck) ? $truck->name : old('name') }}">
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="description">Description:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="description" placeholder="Description" required name="description" value="{{ isset($truck) ? $truck->description : old('description') }}">
        @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('plate_number') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="plate_number">Plate Number:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="plate_number" placeholder="Plate Number" required name="plate_number" value="{{ isset($truck) ? $truck->plate_number : old('plate_number') }}">
        @if ($errors->has('plate_number'))
            <span class="help-block">
                <strong>{{ $errors->first('plate_number') }}</strong>
            </span>
        @endif
    </div>
</div>
