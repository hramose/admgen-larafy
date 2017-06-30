<!DOCTYPE html>
<html lang="en">

    <!--================================================================================
            Item Name: Materialize - Material Design Admin Template
            Version: 3.1
            Author: GeeksLabs
            Author URL: http://www.themeforest.net/user/geekslabs
    ================================================================================ -->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
        <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
        <title>{!! config('config.application_name') ? : config('constants.default_title') !!}</title>

        <!-- Favicons-->
        <link rel="icon" href="{{asset('materialize/images/favicon/favicon-32x32.png') }}" sizes="32x32">
        <!-- Favicons-->
        <link rel="apple-touch-icon-precomposed" href="{{ asset('materialize/images/favicon/apple-touch-icon-152x152.png')}}">
        <!-- For iPhone -->
        <meta name="msapplication-TileColor" content="#00bcd4">
        <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
        <!-- For Windows Phone -->


        <!-- CORE CSS-->

        <link href="{{asset('materialize/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="{{asset('materialize/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
        <!-- Custome CSS-->
        <link href="{{asset('materialize/css/custom/custom.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="{{asset('materialize/css/layouts/page-center.css')}}" type="text/css" rel="stylesheet" media="screen,projection">

        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link href="{{asset('materialize/js/plugins/prism/prism.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="{{asset('materialize/js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
        {!! Html::style('assets/vendor/toastr/toastr.min.css') !!}

    </head>

    <body class="cyan">
        <!-- Start Page Loading -->
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <!-- End Page Loading -->



        <div id="login-page" class="row">
            <div class="col s12 z-depth-4 card-panel">

                @yield('content')
            </div>
        </div>



        <!-- ================================================
          Scripts
          ================================================ -->

        <!-- jQuery Library -->
        <script type="text/javascript" src="{{asset('materialize/js/plugins/jquery-1.11.2.min.js')}}"></script>
        <!--materialize js-->
        <script type="text/javascript" src="{{asset('materialize/js/materialize.js')}}"></script>
        <!--prism-->
        <script type="text/javascript" src="{{asset('materialize/js/plugins/prism/prism.js')}}"></script>
        <!--scrollbar-->
        <script type="text/javascript" src="{{asset('materialize/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

        <!--plugins.js - Some Specific JS codes for Plugin Settings-->
        <script type="text/javascript" src="{{asset('materialize/js/plugins.js')}}"></script>
        <!--custom-script.js - Add your own theme custom JS-->
        <script type="text/javascript" src="{{asset('materialize/js/custom-script.js')}}"></script>


        {!! Html::script('assets/vendor/toastr/toastr.min.js') !!}
        @include('common.toastr_notification')
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>



    </body>

</html>
