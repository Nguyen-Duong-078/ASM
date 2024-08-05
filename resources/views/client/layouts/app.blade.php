<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Báo tuổi trẻ - @yield('title') </title>

    <!-- plugins -->
    <link rel="stylesheet" href="{{ asset('themes') }}/client/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('themes') }}/client/plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('themes') }}/client/plugins/slick/slick.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('themes') }}/client/css/style.css" media="screen">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('themes') }}/client/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="{{ asset('themes') }}/client/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <meta property="og:title" content="Reader | Hugo Personal Blog Template" />
    <meta property="og:description" content="This is meta description" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:updated_time" content="2020-03-15T15:40:24+06:00" />
</head>

<body>
    @include('client.layouts.header')

    @yield('content')

    @include('client.layouts.footer')


    <!-- JS Plugins -->
    <script src="{{ asset('themes') }}/client/plugins/jQuery/jquery.min.js"></script>
    <script src="{{ asset('themes') }}/client/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset('themes') }}/client/plugins/slick/slick.min.js"></script>
    <script src="{{ asset('themes') }}/client/plugins/instafeed/instafeed.min.js"></script>

    <!-- Main Script -->
    <script src="{{ asset('themes') }}/client/js/script.js"></script>
    <!-- Include SweetAlert2 CSS and JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</body>

</html>
