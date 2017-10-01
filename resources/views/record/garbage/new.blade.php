@extends('layouts.master')

@section('title', ' - Garbage Weigh In')

@section('content_header', 'Add Garbage')

@section('content_header_link')
    <li><a href="{{ route('garbage') }}" style="color:#08A7C3">List</a></li>
    @can('add_garbages')
        <li class="active"><i class="glyphicon glyphicon-plus"></i> Add Garbage</li>
    @endcan
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <form class="form-horizontal" action="{{route('store_garbage')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group{{ $errors->has('garbage') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-3" for="garbage">Garbage Description:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="garbage" placeholder="Name" required name="garbage" value="{{ isset($garbage) ? $garbage->garbage : old('garbage') }}">
                        @if ($errors->has('garbage'))
                            <span class="help-block">
                                <strong>{{ $errors->first('garbage') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('remarks') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-3" for="remarks">Remarks:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="remarks" placeholder="Remarks" required name="remarks" value="{{ isset($garbage) ? $garbage->remarks : old('remarks') }}">
                        @if ($errors->has('remarks'))
                            <span class="help-block">
                                <strong>{{ $errors->first('remarks') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('kilo') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-3" for="kilo">Total Garbage Weight:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="kilo" placeholder="kilogram" required name="kilo" value="{{ isset($fertilizer) ? $fertilizer->kilo : old('kilo') }}">
                        @if ($errors->has('kilo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kilo') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('kilo') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-3" for="kilo">Recycable Garbage Weight:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="kilo" placeholder="kilogram" required name="kilo" value="{{ isset($fertilizer) ? $fertilizer->kilo : old('kilo') }}">
                        @if ($errors->has('kilo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kilo') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('kilo') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-3" for="kilo">Biodegradable Garbage Weight:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="kilo" placeholder="kilogram" required name="kilo" value="{{ isset($fertilizer) ? $fertilizer->kilo : old('kilo') }}">
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