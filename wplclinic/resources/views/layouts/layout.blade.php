<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/@coreui/icons/css/coreui-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    </head>
    <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
        @yield('content')
        <script src="{{ asset('assets/vendors/jquery/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/popper.js/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/pace-progress/js/pace.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/@coreui/coreui/js/coreui.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js') }}"></script>
    </body>
</html>
