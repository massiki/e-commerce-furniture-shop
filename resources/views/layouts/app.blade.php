<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta name="robots" content="noindex, follow" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo/logo-fikri.ico') }}">

  <!-- CSS
    ============================================ -->
  <!-- Icon Font CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/pe-icon-7-stroke.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/font-awesome.min.css') }}" />

  <!-- Plugins CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/odometer.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/select2.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/ion.rangeSlider.min.css') }}" />

  <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
  @livewireStyles
</head>

<body>

  @livewire('components.user-navbar')

  {{ $slot }}

  <!-- Footer Section Start -->
  @livewire('components.user-footer')
  <!-- Footer Section End -->

  <!--Back To Start-->
  <button id="backBtn" class="back-to-top"><i class="pe-7s-angle-up"></i></button>
  <!--Back To End-->

  <!-- JS
    ============================================ -->

  <!-- Modernizer & jQuery JS -->
  <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>

  <!-- Bootstrap JS -->
  <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>

  <!-- Plugins JS -->
  <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/ajax-contact.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/odometer.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/ion.rangeSlider.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/jquery.zoom.min.js') }}"></script>

  <!-- Main JS -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  @livewireScripts
</body>

</html>
