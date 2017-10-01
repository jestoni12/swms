@extends('layouts.master')

@section('title', ' - Fertilizer')

@section('content_header', 'Add Fertilizer')

@section('content_header_link')
    <li><a href="{{ route('fertilizer') }}" style="color:#08A7C3">List</a></li>
    @can('add_fertilizers')
        <li class="active"><i class="glyphicon glyphicon-plus"></i> Add Fertilizer</li>
    @endcan
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <form class="form-horizontal" action="{{route('store_fertilizer')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group{{ $errors->has('fertilizer') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-3" for="fertilizer">Fertilizer Name:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="fertilizer" placeholder="Name" required name="fertilizer" value="{{ isset($fertilizer) ? $fertilizer->fertilizer : old('fertilizer') }}">
                        @if ($errors->has('fertilizer'))
                            <span class="help-block">
                                <strong>{{ $errors->first('fertilizer') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('remarks') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-3" for="remarks">Remarks:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="remarks" placeholder="Remarks" required name="remarks" value="{{ isset($fertilizer) ? $fertilizer->remarks : old('remarks') }}">
                        @if ($errors->has('remarks'))
                            <span class="help-block">
                                <strong>{{ $errors->first('remarks') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('kilo') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-3" for="kilo">Generated Kilo:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="kilo" placeholder="kilo" required name="kilo" value="{{ isset($fertilizer) ? $fertilizer->kilo : old('kilo') }}">
                        @if ($errors->has('kilo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kilo') }}</strong>
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