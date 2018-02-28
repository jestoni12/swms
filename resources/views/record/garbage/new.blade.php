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
                        <input type="text" class="form-control total_weight" id="total_weight" placeholder="kilogram" required name="total_weight" value="{{ isset($garbage) ? $garbage->total_weight : old('total_weight') }}" onkeypress="return isNumberKey(event, this);">
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
                        <input type="text" class="form-control recycable_weight" id="recycable_weight" placeholder="kilogram" required name="recycable_weight" value="{{ isset($garbage) ? $garbage->recycable_weight : old('recycable_weight') }}" onkeypress="return isNumberKey(event, this);">
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
                        <input type="text" class="form-control biodegradable_weight" id="biodegradable_weight" placeholder="kilogram" required name="biodegradable_weight" value="{{ isset($garbage) ? $garbage->biodegradable_weight : old('biodegradable_weight') }}" onkeypress="return isNumberKey(event, this);">
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
                <div class="form-group">
                    <label class="control-label col-sm-3"></label>
                    <div class="col-sm-9">
                        @can('add_garbages')
                            <button type="submit" class="btn btn-sm btn-info">
                                Save
                            </button>
                        @endcan
                    </div>
                </div>
            </form>
        </div>
    </div>
    @push('append_js')
        <script type="text/javascript">
            $(document).ready(function(){
                $('.recycable_weight').on('keyup', function(){
                    var amount12 = 0;
                    if($('.recycable_weight').val()){
                        amount12 = $('.recycable_weight').val();
                    }
                    var amount1 = $('.total_weight').val();
                    var total = parseInt(amount1) - parseInt(amount12);

                    $('.biodegradable_weight').val(parseInt(total));
                });

                $('.biodegradable_weight').on('keyup', function(){
                    var amount12 = 0;
                    if($('.biodegradable_weight').val()){
                        amount12 = $('.biodegradable_weight').val();
                    }
                    var amount1 = $('.total_weight').val();
                    var total = parseInt(amount1) - parseInt(amount12);

                    $('.recycable_weight').val(parseInt(total));
                });
            });

            function isNumberKey(evt, element){
                var charCode = (evt.which) ? evt.which : event.keyCode
                if ((charCode != 46 || $(element).val().indexOf('.') != -1) && // “.” CHECK DOT, AND ONLY ONE.
                  (charCode < 48 || charCode > 57))
                  return false;
                return true;
            }
        </script>
    @endpush
@endsection