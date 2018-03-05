{{csrf_field()}}
<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="status">Garbage Type :</label>
    <div class="col-sm-4">
        <select class="form-control" name="type" placeholder="Type of Garbage" id="type" required>
                <option value="" selected="">--Select One--</option>
                <option value="Biodegradable">Biodegradable</option>
                <option value="Non-Biodegradable">Non-Biodegradable</option>
        </select>
        @if ($errors->has('type'))
            <span class="help-block">
                <strong>{{ $errors->first('type') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('amount_in_kilo') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="amount_in_kilo">Amount :</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="amount_in_kilo" placeholder="kilogram" required name="amount_in_kilo" value="{{ isset($garbage) ? $garbage->amount_in_kilo : old('amount_in_kilo') }}">
        @if ($errors->has('amount_in_kilo'))
            <span class="help-block">
                <strong>{{ $errors->first('amount_in_kilo') }}</strong>
            </span>
        @endif
    </div>
</div>