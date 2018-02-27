<div class="modal fade" id="fertilizer_print" role="dialog">
    <div class="modal-dialog modal-sm" style="float:right;margin-right: 15px;width: 25%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><b>Fertilizer Print</b></h4>
            </div>
            <div class="modal-body form-horizontal">
                <form class="form-horizontal" autocomplete="off"  name="fertilizer_print_form" id="fertilizer_print_form" role="form"  method="POST" action="{{action('ReportController@reports_action')}}" target="_blank">
                    {{csrf_field()}}
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
                <button id="fertilizer_print_btn" class="btn btn-sm fertilizer_print_btn" type="submit" form="fertilizer_print_form" style="margin-top:-7px; float: right; background-color:#a6a6a6;font-weight:200;color:#0d0d0d;height:28px;border:1px solid #8c8c8c;" value="fertilizer_print_btn" name="fertilizer_print_btn"><img src="\assets\images\print1.png">&nbsp;Print</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="garbage_print" role="dialog">
    <div class="modal-dialog modal-sm" style="float:right;margin-right: 15px;width: 25%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><b>Garbage Print</b></h4>
            </div>
            <div class="modal-body form-horizontal">
                <form class="form-horizontal" autocomplete="off"  name="garbage_print_form" id="garbage_print_form" role="form"  method="POST" action="{{action('ReportController@reports_action')}}" target="_blank">
                    {{csrf_field()}}
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
                <button id="garbage_print_form" class="btn btn-sm garbage_print_form" type="submit" form="garbage_print_form" style="margin-top:-7px; float: right; background-color:#a6a6a6;font-weight:200;color:#0d0d0d;height:28px;border:1px solid #8c8c8c;" value="garbage_print_form" name="garbage_print_btn"><img src="\assets\images\print1.png">&nbsp;Print</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="emp_dtr_print_modal" role="dialog">
    <div class="modal-dialog modal-sm" style="float:right;margin-right: 15px;width: 25%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><b>Employee DTR Print</b></h4>
            </div>
            <div class="modal-body form-horizontal">
                <form class="form-horizontal" autocomplete="off"  name="emp_dtr_print" id="emp_dtr_print" role="form"  method="POST" action="{{action('ReportController@reports_action')}}" target="_blank">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-md-4 control-label">Date From :</label>
                        <div class="col-md-8">
                             <input type="text" class="form-control dtr_datefrom" placeholder="Date From" name="dtr_datefrom" value="" id="dtr_datefrom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Date To :</label>
                        <div class="col-md-8">
                             <input type="text" class="form-control dtr_dateto" placeholder="Date To" name="dtr_dateto" value="">
                        </div>
                    </div>
               </form>
            </div>
            <div class="modal-footer">
                <button id="emp_dtr_print" class="btn btn-sm emp_dtr_print" type="submit" form="emp_dtr_print" style="margin-top:-7px; float: right; background-color:#a6a6a6;font-weight:200;color:#0d0d0d;height:28px;border:1px solid #8c8c8c;" value="emp_dtr_print" name="emp_dtr_btn"><img src="\assets\images\print1.png">&nbsp;Print</button>
            </div>
        </div>
    </div>
</div>
@push('append_js')
  <script type="text/javascript">
    $(document).ready(function(){
      $('.fer_datefrom, .fer_dateto, .gar_datefrom, .gar_dateto, .dtr_datefrom, .dtr_dateto').datepicker();
    });
  </script>
@endpush
