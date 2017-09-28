
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

            }
            .logo img{
                width: 100px;
                height: 100px;
            }
            .logo span {
                font-weight: bold;
                color: #497296;
                letter-spacing: 2px;
            }
        </style>
    </head>

    <body>
        <div class="logo">
           <img src="{{asset('assets/images/swms-logo.png')}}"> 
           <span>SOLID WASTE MANAGEMENT SYSTEM</span>
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
            <a class="button">Switch Theme</a>
        </div>

        <footer>
            <a class="tz" href="{{ route('login') }}" style="color: #86caee">Click here to login using account</a>
        </footer>
        
        <!-- JavaScript Includes -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="{{ asset('assets/plugins/clock/js/moment.js') }}"></script>
        <script src="{{ asset('assets/plugins/clock/js/script.js') }}"></script>

    </body>
</html>
