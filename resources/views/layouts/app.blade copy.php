<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/adminLTE/fontawesome-free/css/all.min.css') }}">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('plugins/adminLTE/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/adminLTE/icheck-bootstrap/icheck-bootstrap.min.css') }}">

    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/adminLTE/jqvmap/jqvmap.min.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminLTE/adminlte.min.css') }}">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/adminLTE/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/adminLTE/daterangepicker/daterangepicker.css') }}">

    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/adminLTE/summernote/summernote-bs4.min.css') }}">

</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('img/adminLTE/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
        </div>

        @include('layouts.navigation')

        @include('layouts.sidebar')

        @include('layouts.content')

        @incl



    </div>


    <!-- jQuery -->
    <script src="{{ asset('plugins/adminLTE/jquery/jquery.min.js') }}"></script>

    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/adminLTE/jquery-ui/jquery-ui.min.js') }}"></script>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/adminLTE/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- ChartJS -->
    <script src="{{ asset('plugins/adminLTE/chart.js/Chart.min.js') }}"></script>

    <!-- Sparkline -->
    <script src="{{ asset('plugins/adminLTE/sparklines/sparkline.js') }}"></script>

    <!-- JQVMap -->
    <script src="{{ asset('plugins/adminLTE/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('plugins/adminLTE/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

    <!-- jQuery Knob Chart -->
    <script src="{{ asset('plugins/adminLTE/jquery-knob/jquery.knob.min.js') }}"></script>

    <!-- daterangepicker -->
    <script src="{{ asset('plugins/adminLTE/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/adminLTE/daterangepicker/daterangepicker.js') }}"></script>

    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/adminLTE/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Summernote -->
    <script src="{{ asset('plugins/adminLTE/summernote/summernote-bs4.min.js') }}"></script>

    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/adminLTE/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminLTE/adminlte.min.js') }}"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('js/adminLTE/pages/dashboard.js') }}"></script>

</body>

</html>
