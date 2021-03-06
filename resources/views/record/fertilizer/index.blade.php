@extends('layouts.master')

@section('title', ' - Report Fertilizer')
@section('content_header')
    <h3>Reports of Fertilizers</h3>
    <h3 style="margin-top: -25px;margin-left: 90%;" title="Search Fertilizers"><a href="#" data-toggle="modal" data-target="#fertilizer_print"><span class="menu-icon glyphicon glyphicon-search"></span></a></h3>
@endsection
@section('content')
    <div class="result-set">
        <div class="row">
            <div class="col-sm-1">
                @if(isset($fer_user) || isset($datefrom) || isset($dateto))
                    <a href="{{route('fertilizer_print')}}?fer_user={{$fer_user}}&datefrom={{$datefrom}}&dateto={{$dateto}}" class="btn btn-primary btn-xs" target="_blank"><i class="fa fa-print"></i>Print</a>
                @else
                    <a href="{{route('fertilizer_print')}}" class="btn btn-primary btn-xs" target="_blank"><i class="fa fa-print"></i>Print</a>
                @endif
            </div>
        </div>
        <table class="table table-striped table-hover" id="data-table">
            <thead>
                <tr>
                    <th style="">USERS</th>
                    <th style="text-align: center;">FERTILIZER AMOUNT</th>
                    <th style="text-align: center;">DATE RECORDED</th>
                    <th style="text-align: center;">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($result as $results)
                    <tr>
                        <td style="">{{ ucfirst($results->users->firstname).' '.ucfirst($results->users->middlename).' '.ucfirst($results->users->lastname)}}</td>
                        <td style="text-align: center;">{{ $results->amount_fertilizers }}</td>
                        <td style="text-align: center;">{{ $results->created_at->toFormattedDateString() }}</td>
                        <td style="text-align: center;">
                            <a href="{{route('edit_fertilizer', $results->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> Edit</a>
                            <form action="{{route('delete_fertilizer',$results->id)}}" style="display: inline" onclick="return confirm('Do you really want to delete it?')" method="POST">
                                {{csrf_field()}}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn-delete btn btn-xs btn-danger" name="delete_fertilzer" value="delete_fertilzer">
                                    <i class="glyphicon glyphicon-trash"></i>
                                </button>
                            </form>
                        </td>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-center">
        </div>
    </div>
    <div class="modal fade" id="fertilizer_print" role="dialog">
    <div class="modal-dialog modal-sm" style="width: 25%;margin-top: 40px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><b>Fertilizer Search</b></h4>
            </div>
            <div class="modal-body form-horizontal">
                <form class="form-horizontal" autocomplete="off"  name="fertilizer_print_form" id="fertilizer_search_form" role="form"  method="POST" action="">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-md-4 control-label">User :</label>
                        <div class="col-md-8">
                             <input type="text" class="form-control fer_user" placeholder="User" name="fer_user" value="" id="fer_user">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Date From :</label>
                        <div class="col-md-8">
                             <input type="text" class="form-control fer_datefrom" placeholder="Date From" name="fer_datefrom" value="" id="fer_datefrom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Date To :</label>
                        <div class="col-md-8">
                             <input type="text" class="form-control fer_dateto" placeholder="Date To" name="fer_dateto" value="">
                        </div>
                    </div>
               </form>
            </div>
            <div class="modal-footer">
                <button id="search-btn" class="btn btn-sm search-btn" type="submit" style="margin-top:-7px; float: right; background-color:#a6a6a6;font-weight:200;color:#0d0d0d;height:28px;border:1px solid #8c8c8c;" value="search-btn" name="search-btn">&nbsp;<span class="menu-icon glyphicon glyphicon-search"></span> Search</button>
            </div>
        </div>
    </div>
</div>
@push('append_js')
  <script type="text/javascript">
    $(document).ready(function(){
        $('.fer_datefrom, .fer_dateto').datepicker({
            dateFormat: "M-dd-yy",
            yearRange: "1950:3000",
            changeYear: true,
            changeMonth: true,
        });

        function submitfunc(){
            var fer_user = $('.fer_user').val().trim();
            var datefrom = $('.fer_datefrom').val();
            var dateto = $('.fer_dateto').val();

            window.history.pushState("", "", '{{ url("reports/fertilizer/search") }}?fer_user='+fer_user+'&datefrom='+datefrom+'&dateto='+dateto);
            window.location.reload(); 
        }
        $(".search-btn").click(function() {
            submitfunc();
        });
    });
  </script>
@endpush
@endsection
