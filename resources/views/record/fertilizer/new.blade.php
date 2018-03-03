@extends('layouts.master')

@section('title', ' - Garbage Weigh In')

@section('content_header')
    <h3>Recording of Fertilizers</h3>
@endsection
@section('content_header_link')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <form class="form-horizontal" action="{{route('store_fertilizer')}}" method="POST">
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
                <div class="form-group">
                    <label class="control-label col-sm-3"></label>
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-sm btn-info">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection