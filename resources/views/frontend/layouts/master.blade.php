<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/dilx/default/digital.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 May 2021 10:09:20 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('frontend/template/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/template/assets/css/meanmenu.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/template/assets/css/boxicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/template/assets/fonts/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/template/assets/css/magnific-popup.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/template/assets/css/odometer.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/template/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/template/assets/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/template/assets/css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/template/assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/template/assets/css/responsive.css') }}">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('frontend/template/assets/img/favicon.png') }}">
</head>

<body>

    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>
    </div>

     @yield('main-content')

    <div class="go-top">
        <i class='bx bx-up-arrow'></i>
        <i class='bx bx-up-arrow'></i>
    </div>


    <script data-cfasync="false"
        src="https://templates.hibootstrap.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('frontend/template/assets/js/jquery-3.5.1.min.js')  }}"></script>
    <script src="{{ asset('frontend/template/assets/js/popper.min.js')  }}"></script>
    <script src="{{ asset('frontend/template/assets/js/bootstrap.min.js')  }}"></script>

    <script src="{{ asset('frontend/template/assets/js/form-validator.min.js')  }}"></script>

    <script src="{{ asset('frontend/template/assets/js/contact-form-script.js')  }}"></script>

    <script src="{{ asset('frontend/template/assets/js/jquery.ajaxchimp.min.js')  }}"></script>

    <script src="{{ asset('frontend/template/assets/js/jquery.meanmenu.js')  }}"></script>

    <script src="{{ asset('frontend/template/assets/js/jquery.magnific-popup.min.js')  }}"></script>

    <script src="{{ asset('frontend/template/assets/js/odometer.min.js')  }}"></script>
    <script src="{{ asset('frontend/template/assets/js/jquery.appear.js')  }}"></script>

    <script src="{{ asset('frontend/template/assets/js/owl.carousel.min.js')  }}"></script>

    <script src="{{ asset('frontend/template/assets/js/thumb-slide.js')  }}"></script>

    <script src="{{ asset('frontend/template/assets/js/wow.min.js')  }}"></script>

    <script src="{{ asset('frontend/template/assets/js/custom.js')  }}"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/dilx/default/digital.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 May 2021 10:11:00 GMT -->

</html>
