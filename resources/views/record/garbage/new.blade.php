@extends('layouts.master')

@section('title', ' - Waste Weigh In')

@section('content_header')
    <h3>Recording of Waste</h3>
@endsection
@section('content_header_link')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <form class="form-horizontal" action="{{route('store_garbage')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-3" for="status">Waste Type :</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="type" placeholder="Type of Waste" id="type" required>
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
                    <label class="control-label col-sm-3" for="kilo">Amount in Kilo :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="amount_in_kilo" placeholder="Amount in Kilo" required name="amount_in_kilo" value="" onkeypress="return isNumberKey(event, this);">
                        @if ($errors->has('amount_in_kilo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('amount_in_kilo') }}</strong>
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