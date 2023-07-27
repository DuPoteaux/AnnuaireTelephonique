<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title') &mdash; {{ env('APP_NAME') }}</title>

  <!-- General CSS Files -->
  <link rel="stylesheet"
        href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{asset('fontawesome-stisla/css/all.css')}}">

  <!-- CSS Libraries -->
    @stack('style')

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css')}}">
</head>

<body class="layout-3">
  <div id="app">

    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      @include('components.header')

      <!-- Main Content -->
      <div class="main-content">
        @yield('main')
      </div>

      @include('components.footer')

      @include('partials.modal')

    </div>
  </div>

  <!-- General JS Scripts -->
  <!-- General JS Scripts -->
    <script src="{{ asset('jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('popper.js/dist/umd/popper.js') }}"></script>
    <script src="{{ asset('tooltip.js/dist/umd/tooltip.js') }}"></script>
    <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('jquery.nicescroll/dist/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>

  <!-- JS Libraies -->
  @stack('script')

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
