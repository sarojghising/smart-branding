<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Influencer | Dashboard</title>

    <link href="{{ asset('dashboard/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('dashboard/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <style>
        
    </style>
    @yield('styles')

</head>

<body>
    <div id="wrapper">
        @include('../influencer/includes/sidebar')

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                @include('../influencer/includes/nav')
            </div>
            <div class="wrapper wrapper-content">
                @yield('main-content')
            </div>
            @include('../influencer/includes/footer')
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('dashboard/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/popper.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/bootstrap.js') }}"></script>
    <script src="{{ asset('dashboard/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('dashboard/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Flot -->
    <script src="{{ asset('dashboard/js/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('dashboard/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/plugins/flot/jquery.flot.spline.js') }}"></script>
    <script src="{{ asset('dashboard/js/plugins/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('dashboard/js/plugins/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('dashboard/js/plugins/flot/jquery.flot.symbol.js') }}"></script>
    <script src="{{ asset('dashboard/js/plugins/flot/jquery.flot.time.js') }}"></script>

    <!-- Peity -->
    <script src="{{ asset('dashboard/js/plugins/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/demo/peity-demo.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('dashboard/js/inspinia.js') }}"></script>
    <script src="{{ asset('dashboard/js/plugins/pace/pace.min.js') }}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('dashboard/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

    <!-- Jvectormap -->
    <script src="{{ asset('dashboard/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

    <!-- EayPIE -->
    <script src="{{ asset('dashboard/js/plugins/easypiechart/jquery.easypiechart.js') }}"></script>

    <!-- Sparkline -->
    <script src="{{ asset('dashboard/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Sparkline demo data  -->
    <script src="{{ asset('dashboard/js/demo/sparkline-demo.js') }}"></script>

    {{-- Custom js --}}
    <script src="{{ asset('dashboard/custom/js/main.js') }}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}

    @yield('scripts')


</body>

</html>
