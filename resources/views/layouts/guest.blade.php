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
    <link rel="stylesheet" href="{{ asset('plugins/adminLTE/fontawesome-free/css/all.css') }}">

    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/adminLTE/icheck-bootstrap/icheck-bootstrap.min.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminLTE/adminlte.min.css') }}">

</head>

<body class="hold-transition login-page">

    {{ $slot }}

    <!-- jQuery -->
    <script src="{{ asset('plugins/adminLTE/jquery/jquery.min.map') }}"></script>

    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/adminLTE/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminLTE/adminlte.min.js') }}"></script>

</body>

</html>
