@extends('layouts.master')

@section('title', ' - Report Garbage')
@section('content_header')
    <h3>Reports of Garbages</h3>
    <h3 style="margin-top: -25px;margin-left: 90%;" title="Search Garbages"><a href="#" data-toggle="modal" data-target="#garbage_print"><span class="menu-icon glyphicon glyphicon-search"></span></a></h3>
@endsection

@section('content')
    <div class="result-set">
        <div class="row">
            <div class="col-sm-1">
                <a href="{{route('garbage_print')}}" class="btn btn-primary btn-xs" target="_blank"><i class="fa fa-print"></i>Print</a>
            </div>
        </div>
        <table class="table table-striped table-hover" id="data-table">
            <thead>
            <tr>
                <th>USER</th>
                <th style="text-align: center;">TYPE OF GARBAGE</th>
                <th style="text-align: center;">AMOUNT</th>
                <th style="text-align: center;">DATE RECORDED</th>
                @can('edit_garbages', 'delete_garbages')
                <th style="text-align: center;">Actions</th>
                @endcan
            </tr>
            </thead>
            <tbody>
                @foreach($garbage as $garbages)
                    <tr>
                        <td>{{ ucfirst($garbages->users->firstname).' '.ucfirst($garbages->users->middlename).' '.ucfirst($garbages->users->lastname) }}</td>
                        <td style="text-align: center;">{{ $garbages->type }}</td>
                        <td style="text-align: center;">{{ $garbages->amount_in_kilo }}</td>
                        <td style="text-align: center;">{{ $garbages->created_at->toFormattedDateString() }}</td>
                        <td style="text-align: center;">
                            @can('edit_garbages')
                                <a href="{{route('edit_garbage', $garbages->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> Edit</a>
                            @endcan
                            @can('delete_garbages')
                                <form action="{{route('delete_garbage',$garbages->id)}}" style="display: inline" onclick="return confirm('Do you really want to delete it?')" method="POST">
                                    {{csrf_field()}}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn-delete btn btn-xs btn-danger" name="delete_garbage" value="delete_garbage">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-center">
        </div>
    </div>
    <div class="modal fade" id="garbage_print" role="dialog">
    <div class="modal-dialog modal-sm" style="width: 33%;margin-top: 40px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><b>Garbage Search</b></h4>
            </div>
            <div class="modal-body form-horizontal">
                <form class="form-horizontal" autocomplete="off"  name="garbage_search_form" id="garbage_search_form" role="form"  method="POST" action="">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-md-4 control-label">User :</label>
                        <div class="col-md-8">
                             <input type="text" class="form-control gar_user" placeholder="User" name="gar_user" value="" id="gar_user">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Type of Garbage :</label>
                        <div class="col-md-8">
                            <select class="form-control type" name="type" placeholder="Type of Garbage" id="type">
                                <option value="" selected="">--Select One--</option>
                                <option value="Biodegradable">Biodegradable</option>
                                <option value="Non-Biodegradable">Non-Biodegradable</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Date From :</label>
                        <div class="col-md-8">
                             <input type="text" class="form-control gar_datefrom" placeholder="Date From" name="gar_datefrom" value="" id="gar_datefrom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Date To :</label>
                        <div class="col-md-8">
                             <input type="text" class="form-control gar_dateto" placeholder="Date To" name="gar_dateto" value="">
                        </div>
                    </div>
               </form>
            </div>
            <div class="modal-footer">
                <button id="garbage_print_form" class="btn btn-sm search-btn" type="submit" form="garbage_search_form" style="margin-top:-7px; float: right; background-color:#a6a6a6;font-weight:200;color:#0d0d0d;height:28px;border:1px solid #8c8c8c;" value="search-btn" name="garbage_print_btn"><span class="menu-icon glyphicon glyphicon-search"></span>&nbsp;Search</button>
            </div>
        </div>
    </div>
</div>
@push('append_js')
  <script type="text/javascript">
    $(document).ready(function(){
        $('.gar_datefrom, .gar_dateto').datepicker({
            dateFormat: "M-dd-yy",
            yearRange: "1950:3000",
            changeYear: true,
            changeMonth: true,
        });

        function submitfunc(){
            var gar_user = $('.gar_user').val().trim();
            var datefrom = $('.gar_datefrom').val();
            var dateto = $('.gar_dateto').val();
            var type = $('.type').val();

            window.history.pushState("", "", '{{ url("reports/garbage/search") }}?gar_user='+gar_user+'&datefrom='+datefrom+'&dateto='+dateto+'&type='+type);
            window.location.reload(); 
        }
        $(".search-btn").click(function() {
            submitfunc();
        });
    });
  </script>
@endpush
@endsection
