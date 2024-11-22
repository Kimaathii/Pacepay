<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from itcroctheme.com/fincatch/fincatch-html/index-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 11:11:19 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Fincatch HTML5 Template">
    <meta name="description" content="Fincatch HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Fincatch - Banking, Finance And Fintech HTML Template</title>

    <!-- Apple Favicon -->
    <link rel="apple-touch-icon" href="{{asset('assets/img/logo/favicon.svg')}}">

    <!-- All Device Favicon -->
    <link rel="icon" href="{{asset('assets/img/logo/icon.svg')}}">

    <!-- Icon -->
    <link rel="stylesheet" href="{{asset('assets/all-icons/myicon.css')}}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- Animate Css -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/animate.min.css')}}">

    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper-bundle.min.css')}}">

    <!-- Venobox Css -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/venobox.min.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- Responsive -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

</head>

<body>

    <div id="main-wrapper">
        {{-- header included --}}
        @include('layouts.partials.header')

         {{-- yeild home extension --}}
         @yield('content')

         {{-- footer included --}}
         @include('layouts.partials.footer')

    </div>

    <!-- jQuery -->
    <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- Anime JS -->
    <script src="{{asset('assets/js/plugins/anime.min.js')}}"></script>

    <!-- Swiper JS -->
    <script src="{{asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>

    <!-- Venobox JS -->
    <script src="{{asset('assets/js/plugins/venobox.min.js')}}"></script>

    <!-- WOW JS -->
    <script src="{{asset('assets/js/plugins/wow.min.js')}}"></script>

    <!-- Index -->
    <script src="{{asset('assets/js/index.js')}}"></script>
</body>


<!-- Mirrored from itcroctheme.com/fincatch/fincatch-html/index-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 11:11:34 GMT -->
</html>