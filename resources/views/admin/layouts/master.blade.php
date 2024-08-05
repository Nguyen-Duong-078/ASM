<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
    data-theme="theme-bordered" data-assets-path="{{ asset('themes') }}/admin/"
    data-template="vertical-menu-template-bordered">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>New | @yield('title')</title>

    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords"
        content="dashboard, material, material design, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">

    <!-- Favicon -->
    <link id="favicon" rel="icon" href="{{ asset('themes') }}/admin/img/icons/logoipsum-296.svg">
    <!--Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;ampdisplay=swap"
        rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('themes') }}/admin/vendor/fonts/materialdesignicons.css" />
    <link rel="stylesheet" href="{{ asset('themes') }}/admin/vendor/fonts/flag-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="{{ asset('themes') }}/admin/vendor/libs/node-waves/node-waves.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('themes') }}/admin/vendor/css/rtl/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('themes') }}/admin/vendor/css/rtl/theme-bordered.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('themes') }}/admin/css/demo.css" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('themes') }}/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('themes') }}/admin/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="{{ asset('themes') }}/admin/vendor/libs/apex-charts/apex-charts.css" />

    @yield('style-libs')

    <!-- Helpers -->
    <script src="{{ asset('themes') }}/admin/vendor/js/helpers.js"></script>
    <script src="{{ asset('themes') }}/admin/js/config.js"></script>

</head>

<body>
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">

            @include('admin.layouts.partials.header')

            <div class="layout-page">

                @include('admin.layouts.partials.navBar')

                <div class="content-wrapper">

                    <!-- Content wrapper -->
                    @yield('content')
                    <!--/ Content wrapper -->

                    @include('admin.layouts.partials.footer')

                    <div class="content-backdrop fade">
                    </div>
                </div>
            </div>

        </div>

        <div class="layout-overlay layout-menu-toggle"></div>
        <div class="drag-target"></div>
    </div>

    <!-- core js -->
    <script src="{{ asset('themes') }}/admin/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('themes') }}/admin/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('themes') }}/admin/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('themes') }}/admin/vendor/libs/node-waves/node-waves.js"></script>
    <script src="{{ asset('themes') }}/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('themes') }}/admin/vendor/libs/hammer/hammer.js"></script>
    <script src="{{ asset('themes') }}/admin/vendor/libs/i18n/i18n.js"></script>
    <script src="{{ asset('themes') }}/admin/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="{{ asset('themes') }}/admin/vendor/js/menu.js"></script>

    <!-- Vendors JS -->
    <script src="{{ asset('themes') }}/admin/vendor/libs/apex-charts/apexcharts.js"></script>

    @yield('script-vendors')

    <!-- Main JS -->
    <script src="{{ asset('themes') }}/admin/js/main.js"></script>

    @yield('script-libs')

</body>

</html>
