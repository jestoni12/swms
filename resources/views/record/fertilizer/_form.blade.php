{{csrf_field()}}
<div class="form-group{{ $errors->has('amount_fertilizers') ? ' has-error' : '' }}">
    <label class="control-label col-sm-3" for="kilo">Amount of Fertilizer :</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" id="amount_fertilizers" placeholder="Amount of Fertilizer" required name="amount_fertilizers" value="" onkeypress="return isNumberKey(event, this);">
        @if ($errors->has('amount_fertilizers'))
            <span class="help-block">
                <strong>{{ $errors->first('amount_fertilizers') }}</strong>
            </span>
        @endif
    </div>
</div>