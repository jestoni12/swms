<div class="modal fade" id="fertilizer_print" role="dialog">
    <div class="modal-dialog modal-sm" style="float:right;margin-right: 5px;width: 25%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><b>Fertilizer Print</b></h4>
            </div>
            <div class="modal-body form-horizontal">
                <form class="form-horizontal" autocomplete="off"  name="fertilizer_print_form" id="fertilizer_print_form" role="form"  method="POST" action="{{action('ReportController@fertilizer_report')}}" target="_blank">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-md-4 control-label">Date From :</label>
                        <div class="col-md-8">
                             <input type="text" class="form-control datefrom" placeholder="Date From" autofocus="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Date To :</label>
                        <div class="col-md-8">
                             <input type="text" class="form-control dateto" placeholder="Date To">
                        </div>
                    </div>
               </form>
            </div>
            <div class="modal-footer">
                <button id="fertilizer_print_btn" class="btn btn-sm fertilizer_print_btn" type="submit" form="fertilizer_print_form" style="margin-top:-7px; float: right; background-color:#a6a6a6;font-weight:200;color:#0d0d0d;height:28px;border:1px solid #8c8c8c;" value="fertilizer_print_btn"><img src="\assets\images\print1.png">&nbsp;Print</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.datefrom').datepicker({
            dateFormat: "M-dd-yy",
            yearRange: "1950:2050",
            changeYear: true,
            changeMonth: true,
        });

        $('.dateto').datepicker({
            dateFormat: "M-dd-yy",
            yearRange: "1950:2050",
            changeYear: true,
            changeMonth: true,
        });

        // $('.datefrom').datepicker({
        //     changeYear: true,
        //     yearRange: "1950:2050",
        //     showButtonPanel: true,
        //     dateFormat: 'yy'
        // }).focus(function() {
        //     var thisCalendar = $(this);
        //     $('.ui-datepicker-calendar').detach();
        //     $('.ui-datepicker-month').remove();
        //     $('.ui-datepicker-close').click(function() {
        //         var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
        //         thisCalendar.datepicker('setDate', new Date(year, 1));
        //     });
        // });
    });
</script>
