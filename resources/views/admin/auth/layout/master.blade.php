<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin | @yield('title')</title>

    <link href="{{ asset('dashboard/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('dashboard/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box loginscreen animated fadeInDown">
         @yield('content')
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('dashboard/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/popper.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/bootstrap.js') }}"></script>
    <script>
        $(function() {
            setTimeout(() => {

                $(".success-message").slideUp();

                $(".error-message").slideUp();

            }, 3000);
        })
    </script>

</body>

