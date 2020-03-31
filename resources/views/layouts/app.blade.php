<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="https://i.ya-webdesign.com/images/cartoon-building-png-2.png" type="image/x-icon">

    <title>Agentprops</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
  
    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
  
    <!-- Favicons -->
    <link href="{{ asset('imperial/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('imperial/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="{{  asset('imperial/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('imperial/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('imperial/assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('imperial/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="{{ asset('imperial/assets/css/style.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
        <main>
            @yield('content')
        </main>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('imperial/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('imperial/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('imperial/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('imperial/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ asset('imperial/assets/vendor/wow/wow.min.js')}}"></script>
    <script src="{{ asset('imperial/assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
    <script src="{{ asset('imperial/assets/vendor/superfish/superfish.min.js')}}"></script>
    <script src="{{ asset('imperial/assets/vendor/hoverIntent/hoverIntent.js')}}"></script>
    <script src="{{ asset('imperial/assets/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{ asset('imperial/assets/vendor/morphext/morphext.min.js')}}"></script>

    <!-- Template Main JS File -->
  <script src="{{ asset('imperial/assets/js/main.js')}}"></script>
</body>
</html>
