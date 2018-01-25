
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <title>SWMS</title>

        <!-- The main CSS file -->
        <link href="{{ asset('assets/plugins/clock/css/style.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('assets/images/swms-logo.png')}}" rel="icon" type="image">
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <style type="text/css">
            .logo{
                position: absolute;
                margin:10px;
                top: 0px;
                left: 0px;
                vertical-align: center;
                text-align: center

            }
            .logo img{
                width: 100px;
                height: 100px;
            }
            .logo span {
                font-weight: bold;
                color: #497296;
                letter-spacing: 1px;
                font-family: verdana;
            }
            input.loginput {
                padding: 10px;
                margin-bottom: 20px;
                margin-top: -50px;
                border: 1px solid #999;
                box-shadow: 0px;
            }
            .show-logs{
                top:0px;
                left:50%;
                right:0px;
                background: rgba(255,255,255,.6);
                width: 50%;
                height: auto;
                position: absolute;
                margin: 0px;
                box-shadow: 5px 2px 10px 2px;
            }
            .show-logs > div{
                margin: 15px;
            }
            .alert {
              padding: 15px;
              margin-bottom: 20px;
              border: 1px solid transparent;
              border-radius: 4px;
              font-size: 12px;
            }
            .alert h4 {
              margin-top: 0;
              color: inherit;
            }
            .alert .alert-link {
              font-weight: bold;
            }
            .alert > p,
            .alert > ul {
              margin-bottom: 0;
            }
            .alert > p + p {
              margin-top: 5px;
            }
            .alert-dismissable,
            .alert-dismissible {
              padding-right: 35px;
            }
            .alert-dismissable .close,
            .alert-dismissible .close {
              position: relative;
              top: -2px;
              right: -21px;
              color: inherit;
            }
            .alert-success {
              color: #3c763d;
              background-color: #dff0d8;
              border-color: #d6e9c6;
            }
            .alert-success hr {
              border-top-color: #c9e2b3;
            }
            .alert-success .alert-link {
              color: #2b542c;
            }
            .alert-info {
              color: #31708f;
              background-color: #d9edf7;
              border-color: #bce8f1;
            }
            .alert-info hr {
              border-top-color: #a6e1ec;
            }
            .alert-info .alert-link {
              color: #245269;
            }
            .alert-warning {
              color: #8a6d3b;
              background-color: #fcf8e3;
              border-color: #faebcc;
            }
            .alert-warning hr {
              border-top-color: #f7e1b5;
            }
            .alert-warning .alert-link {
              color: #66512c;
            }
            .alert-danger {
              color: #a94442;
              background-color: #f2dede;
              border-color: #ebccd1;
            }
            .alert-danger hr {
              border-top-color: #e4b9c0;
            }
            .alert-danger .alert-link {
              color: #843534;
            }
            .employee-detail{
                font-size: 12px;
            }
            .employee-detail span{
                font-weight: bold;
            }
            table.dtr{
                font-size: 10px;
                width: 100%;
            }
            table.dtr th,td{
                padding: 3px;
            }
            table.dtr th{
                text-align: left;
            }
            .btn {
              display: inline-block;
              padding: 6px 12px;
              margin-bottom: 0;
              font-size: 14px;
              font-weight: normal;
              line-height: 1.42857143;
              text-align: center;
              white-space: nowrap;
              vertical-align: middle;
              -ms-touch-action: manipulation;
                  touch-action: manipulation;
              cursor: pointer;
              -webkit-user-select: none;
                 -moz-user-select: none;
                  -ms-user-select: none;
                      user-select: none;
              background-image: none;
              border: 1px solid transparent;
              border-radius: 4px;
            }
                        .btn-default {
              color: #333;
              background-color: #fff;
              border-color: #ccc;
            }
            .btn-default:focus,
            .btn-default.focus {
              color: #333;
              background-color: #e6e6e6;
              border-color: #8c8c8c;
            }
            .btn-default:hover {
              color: #333;
              background-color: #e6e6e6;
              border-color: #adadad;
            }
            .btn-default:active,
            .btn-default.active,
            .open > .dropdown-toggle.btn-default {
              color: #333;
              background-color: #e6e6e6;
              border-color: #adadad;
            }
            .btn-default:active:hover,
            .btn-default.active:hover,
            .open > .dropdown-toggle.btn-default:hover,
            .btn-default:active:focus,
            .btn-default.active:focus,
            .open > .dropdown-toggle.btn-default:focus,
            .btn-default:active.focus,
            .btn-default.active.focus,
            .open > .dropdown-toggle.btn-default.focus {
              color: #333;
              background-color: #d4d4d4;
              border-color: #8c8c8c;
            }
            .btn-default:active,
            .btn-default.active,
            .open > .dropdown-toggle.btn-default {
              background-image: none;
            }
            .btn-default.disabled:hover,
            .btn-default[disabled]:hover,
            fieldset[disabled] .btn-default:hover,
            .btn-default.disabled:focus,
            .btn-default[disabled]:focus,
            fieldset[disabled] .btn-default:focus,
            .btn-default.disabled.focus,
            .btn-default[disabled].focus,
            fieldset[disabled] .btn-default.focus {
              background-color: #fff;
              border-color: #ccc;
            }
            .btn-default .badge {
              color: #fff;
              background-color: #333;
            }
            .btn-primary {
              color: #fff;
              background-color: #337ab7;
              border-color: #2e6da4;
            }
            .btn-primary:focus,
            .btn-primary.focus {
              color: #fff;
              background-color: #286090;
              border-color: #122b40;
            }
            .btn-primary:hover {
              color: #fff;
              background-color: #286090;
              border-color: #204d74;
            }
            .btn-primary:active,
            .btn-primary.active,
            .open > .dropdown-toggle.btn-primary {
              color: #fff;
              background-color: #286090;
              border-color: #204d74;
            }
            .btn-primary:active:hover,
            .btn-primary.active:hover,
            .open > .dropdown-toggle.btn-primary:hover,
            .btn-primary:active:focus,
            .btn-primary.active:focus,
            .open > .dropdown-toggle.btn-primary:focus,
            .btn-primary:active.focus,
            .btn-primary.active.focus,
            .open > .dropdown-toggle.btn-primary.focus {
              color: #fff;
              background-color: #204d74;
              border-color: #122b40;
            }
            .btn-primary:active,
            .btn-primary.active,
            .open > .dropdown-toggle.btn-primary {
              background-image: none;
            }
            .btn-primary.disabled:hover,
            .btn-primary[disabled]:hover,
            fieldset[disabled] .btn-primary:hover,
            .btn-primary.disabled:focus,
            .btn-primary[disabled]:focus,
            fieldset[disabled] .btn-primary:focus,
            .btn-primary.disabled.focus,
            .btn-primary[disabled].focus,
            fieldset[disabled] .btn-primary.focus {
              background-color: #337ab7;
              border-color: #2e6da4;
            }
            .btn-primary .badge {
              color: #337ab7;
              background-color: #fff;
            }
            .btn-success {
              color: #fff;
              background-color: #5cb85c;
              border-color: #4cae4c;
            }
            .btn-success:focus,
            .btn-success.focus {
              color: #fff;
              background-color: #449d44;
              border-color: #255625;
            }
            .btn-success:hover {
              color: #fff;
              background-color: #449d44;
              border-color: #398439;
            }
            .btn-success:active,
            .btn-success.active,
            .open > .dropdown-toggle.btn-success {
              color: #fff;
              background-color: #449d44;
              border-color: #398439;
            }
            .btn-success:active:hover,
            .btn-success.active:hover,
            .open > .dropdown-toggle.btn-success:hover,
            .btn-success:active:focus,
            .btn-success.active:focus,
            .open > .dropdown-toggle.btn-success:focus,
            .btn-success:active.focus,
            .btn-success.active.focus,
            .open > .dropdown-toggle.btn-success.focus {
              color: #fff;
              background-color: #398439;
              border-color: #255625;
            }
            .btn-success:active,
            .btn-success.active,
            .open > .dropdown-toggle.btn-success {
              background-image: none;
            }
            .btn-success.disabled:hover,
            .btn-success[disabled]:hover,
            fieldset[disabled] .btn-success:hover,
            .btn-success.disabled:focus,
            .btn-success[disabled]:focus,
            fieldset[disabled] .btn-success:focus,
            .btn-success.disabled.focus,
            .btn-success[disabled].focus,
            fieldset[disabled] .btn-success.focus {
              background-color: #5cb85c;
              border-color: #4cae4c;
            }
            .btn-success .badge {
              color: #5cb85c;
              background-color: #fff;
            }
            .btn-info {
              color: #fff;
              background-color: #5bc0de;
              border-color: #46b8da;
            }
            .btn-info:focus,
            .btn-info.focus {
              color: #fff;
              background-color: #31b0d5;
              border-color: #1b6d85;
            }
            .btn-info:hover {
              color: #fff;
              background-color: #31b0d5;
              border-color: #269abc;
            }
            .btn-info:active,
            .btn-info.active,
            .open > .dropdown-toggle.btn-info {
              color: #fff;
              background-color: #31b0d5;
              border-color: #269abc;
            }
            .btn-info:active:hover,
            .btn-info.active:hover,
            .open > .dropdown-toggle.btn-info:hover,
            .btn-info:active:focus,
            .btn-info.active:focus,
            .open > .dropdown-toggle.btn-info:focus,
            .btn-info:active.focus,
            .btn-info.active.focus,
            .open > .dropdown-toggle.btn-info.focus {
              color: #fff;
              background-color: #269abc;
              border-color: #1b6d85;
            }
            .btn-info:active,
            .btn-info.active,
            .open > .dropdown-toggle.btn-info {
              background-image: none;
            }
            .btn-info.disabled:hover,
            .btn-info[disabled]:hover,
            fieldset[disabled] .btn-info:hover,
            .btn-info.disabled:focus,
            .btn-info[disabled]:focus,
            fieldset[disabled] .btn-info:focus,
            .btn-info.disabled.focus,
            .btn-info[disabled].focus,
            fieldset[disabled] .btn-info.focus {
              background-color: #5bc0de;
              border-color: #46b8da;
            }
            .btn-info .badge {
              color: #5bc0de;
              background-color: #fff;
            }
            .btn-warning {
              color: #fff;
              background-color: #f0ad4e;
              border-color: #eea236;
            }
            .btn-warning:focus,
            .btn-warning.focus {
              color: #fff;
              background-color: #ec971f;
              border-color: #985f0d;
            }
            .btn-warning:hover {
              color: #fff;
              background-color: #ec971f;
              border-color: #d58512;
            }
            .btn-warning:active,
            .btn-warning.active,
            .open > .dropdown-toggle.btn-warning {
              color: #fff;
              background-color: #ec971f;
              border-color: #d58512;
            }
            .btn-warning:active:hover,
            .btn-warning.active:hover,
            .open > .dropdown-toggle.btn-warning:hover,
            .btn-warning:active:focus,
            .btn-warning.active:focus,
            .open > .dropdown-toggle.btn-warning:focus,
            .btn-warning:active.focus,
            .btn-warning.active.focus,
            .open > .dropdown-toggle.btn-warning.focus {
              color: #fff;
              background-color: #d58512;
              border-color: #985f0d;
            }
            .btn-warning:active,
            .btn-warning.active,
            .open > .dropdown-toggle.btn-warning {
              background-image: none;
            }
            .btn-warning.disabled:hover,
            .btn-warning[disabled]:hover,
            fieldset[disabled] .btn-warning:hover,
            .btn-warning.disabled:focus,
            .btn-warning[disabled]:focus,
            fieldset[disabled] .btn-warning:focus,
            .btn-warning.disabled.focus,
            .btn-warning[disabled].focus,
            fieldset[disabled] .btn-warning.focus {
              background-color: #f0ad4e;
              border-color: #eea236;
            }
            .btn-warning .badge {
              color: #f0ad4e;
              background-color: #fff;
            }
            .btn-danger {
              color: #fff;
              background-color: #d9534f;
              border-color: #d43f3a;
            }
            .btn-danger:focus,
            .btn-danger.focus {
              color: #fff;
              background-color: #c9302c;
              border-color: #761c19;
            }
            .btn-danger:hover {
              color: #fff;
              background-color: #c9302c;
              border-color: #ac2925;
            }
            .btn-danger:active,
            .btn-danger.active,
            .open > .dropdown-toggle.btn-danger {
              color: #fff;
              background-color: #c9302c;
              border-color: #ac2925;
            }
            .btn-danger:active:hover,
            .btn-danger.active:hover,
            .open > .dropdown-toggle.btn-danger:hover,
            .btn-danger:active:focus,
            .btn-danger.active:focus,
            .open > .dropdown-toggle.btn-danger:focus,
            .btn-danger:active.focus,
            .btn-danger.active.focus,
            .open > .dropdown-toggle.btn-danger.focus {
              color: #fff;
              background-color: #ac2925;
              border-color: #761c19;
            }
            .btn-danger:active,
            .btn-danger.active,
            .open > .dropdown-toggle.btn-danger {
              background-image: none;
            }
            .btn-danger.disabled:hover,
            .btn-danger[disabled]:hover,
            fieldset[disabled] .btn-danger:hover,
            .btn-danger.disabled:focus,
            .btn-danger[disabled]:focus,
            fieldset[disabled] .btn-danger:focus,
            .btn-danger.disabled.focus,
            .btn-danger[disabled].focus,
            fieldset[disabled] .btn-danger.focus {
              background-color: #d9534f;
              border-color: #d43f3a;
            }
            .btn-danger .badge {
              color: #d9534f;
              background-color: #fff;
            }
            .btn-link {
              font-weight: normal;
              color: #337ab7;
              border-radius: 0;
            }
            .btn-link,
            .btn-link:active,
            .btn-link.active,
            .btn-link[disabled],
            fieldset[disabled] .btn-link {
              background-color: transparent;
              -webkit-box-shadow: none;
                      box-shadow: none;
            }
            .btn-link,
            .btn-link:hover,
            .btn-link:focus,
            .btn-link:active {
              border-color: transparent;
            }
            .btn-link:hover,
            .btn-link:focus {
              color: #23527c;
              text-decoration: underline;
              background-color: transparent;
            }
            .btn-link[disabled]:hover,
            fieldset[disabled] .btn-link:hover,
            .btn-link[disabled]:focus,
            fieldset[disabled] .btn-link:focus {
              color: #777;
              text-decoration: none;
            }
            .btn-lg,
            .btn-group-lg > .btn {
              padding: 10px 16px;
              font-size: 18px;
              line-height: 1.3333333;
              border-radius: 6px;
            }
            .btn-sm,
            .btn-group-sm > .btn {
              padding: 5px 10px;
              font-size: 12px;
              line-height: 1.5;
              border-radius: 3px;
            }
            .btn-xs,
            .btn-group-xs > .btn {
              padding: 1px 5px;
              font-size: 12px;
              line-height: 1.5;
              border-radius: 3px;
            }
            .btn-block {
              display: block;
              width: 100%;
            }
            .btn-block + .btn-block {
              margin-top: 5px;
            }
            input[type="submit"].btn-block,
            input[type="reset"].btn-block,
            input[type="button"].btn-block {
              width: 100%;
            }
        </style>
    </head>

    <body>
        <div class="logo">
           <img src="{{asset('assets/images/swms-logo.png')}}"> <br/>
           <span>SWMS</span>
           <br/>
           <br/>
           <a href="{{ route('login') }}" target="_blank"  class="account" style="color: #497296;font-size: 11px;">Click here to login using account</a>
        </div>
        <div id="clock" class="light">
            <div class="display">
                <div class="weekdays"></div>
                <div class="ampm"></div>
                <div class="alarm"></div>
                <div class="digits"></div>
            </div>
        </div>

        <div class="button-holder">
             <input type="password" class="loginput" placeholder="Barcode ID" autocomplete="off" autofocus=""><br/>
            <a class="button">Switch Theme</a>
        </div>
       

        <div class="show-logs" style="display:none">
            
        </div>
        <!-- JavaScript Includes -->
        <script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/clock/js/moment.js') }}"></script>
        <script src="{{ asset('assets/plugins/clock/js/script.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                // $(document).click(function(e){
                //     e.preventDefault();
                //     $('input.loginput').focus();
                //    return false;
                // });

                $('input.loginput').keyup(function(e){
                    e.preventDefault();
                    var getval = $(this).val();
                    var _token = "{{csrf_token()}}";
                    var url = '{{route("managelogs")}}';
                    if(e.which == 13){
                        $(this).val('');
                        $.post(url,{_token:_token,id:getval},function(data){
                            $('.show-logs').html(data);
                            $('.show-logs').fadeIn('slow');
                        });
                    }

                });
            });
        </script>
    </body>
</html>
