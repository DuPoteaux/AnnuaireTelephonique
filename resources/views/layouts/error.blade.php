<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"
        name="viewport">
    <title>@yield('title') &mdash; {{ env('APP_NAME') }}</title>

    <!-- General CSS Files -->
    <link rel="stylesheet"
        href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('fontawesome-stisla/css/all.min.css') }}" />

    @stack('style')

    <!-- Template CSS -->
    <link rel="stylesheet"
        href="{{ asset('css/style.css') }}">
    <link rel="stylesheet"
        href="{{ asset('css/components.css') }}">

    <!-- Start GA -->
    <script async
        src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <!-- Content -->
                @yield('main')
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('popper.js/dist/umd/popper.js') }}"></script>
    <script src="{{ asset('tooltip.js/dist/umd/tooltip.js') }}"></script>
    <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('jquery.nicescroll/dist/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>

    @stack('scripts')

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</html>
