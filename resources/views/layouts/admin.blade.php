<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendors/themefy_icon/themify-icons.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendors/niceselect/css/nice-select.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendors/font_awesome/css/all.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendors/datepicker/date-picker.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendors/scroll/scrollable.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/metisMenu.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/colors/default.css') }}" id="colorSkinCSS">
  <script src="{{ asset('js/jquery1-3.4.1.min.js') }}"></script>
  <script src="{{ asset('js/parsley.min.js') }}"></script>
  @livewireStyles
</head>

<body class="crm_body_bg">
  <!-- main content part here -->

  <!-- sidebar  -->
  @livewire('components.admin-sidebar')
  <!--/ sidebar  -->

  <section class="main_content dashboard_part large_header_bg">

    <!-- navbar  -->
    @livewire('components.admin-navbar')
    <!--/ navbar  -->

    {{ $slot }}

    <!-- footer -->
    @livewire('components.admin-footer')
    <!--/ footer  -->
  </section>
  <!-- main content part end -->

  <div id="back-top" style="display: none;">
    <a title="Go to Top" href="#">
      <i class="ti-angle-up"></i>
    </a>
  </div>

  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/metisMenu.js') }}"></script>
  <script src="{{ asset('vendors/apex_chart/apex-chart2.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  <script>
    options = {
      chart: {
        height: 339,
        type: "line",
        stacked: !1,
        toolbar: {
          show: !1
        }
      },
      stroke: {
        width: [0, 2, 4],
        curve: "smooth"
      },
      plotOptions: {
        bar: {
          columnWidth: "30%"
        }
      },
      colors: ["#9767FD", "#dfe2e6", "#f1b44c", "#f1b44c"],
      series: [{
          name: "Total",
          type: "column",
          data: [0, 0, 0, 0, 145.2, 0, 7291.46, 0, 0, 0, 0, 0]
        },
        {
          name: "Pending",
          type: "column",
          data: [0, 0, 0, 0, 0, 0, 7291.46, 0, 0, 0, 0, 0]
        },
        {
          name: "Delivered",
          type: "column",
          data: [0, 0, 0, 0, 145.2, 0, 0, 0, 0, 0, 0, 0]
        },
        {
          name: "Canceled",
          type: "column",
          data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        },
      ],
      fill: {
        opacity: [0.85, 0.25, 1],
        gradient: {
          inverseColors: !1,
          shade: "light",
          type: "vertical",
          opacityFrom: 0.85,
          opacityTo: 0.55,
          stops: [0, 100, 100, 100]
        }
      },
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      markers: {
        size: 0
      },
      xaxis: {
        type: "text"
      },
      yaxis: {
        title: {
          text: "Amount"
        }
      },
      tooltip: {
        shared: !0,
        intersect: !1,
        y: {
          formatter: function(e) {
            return void 0 !== e ? e.toFixed(0) + " $" : e;
          },
        },
      },
      grid: {
        borderColor: "#f1f1f1"
      },
    };
    (chart = new ApexCharts(document.querySelector("#management_bar"), options)).render();
  </script>
  @livewireScripts
</body>

</html>
