<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>MediCare:-We care for your Health and Time</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <meta name="apple-mobile-web-app-title" content="MediCare">
    <meta name="application-name" content="MediCare">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('favicon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">


    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{asset("css/slick.css")}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset("css/slick-theme.css")}}"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{asset("css/nouislider.min.css")}}"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset("css/font-awesome.min.css")}}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset("css/style.css")}}"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- HEADER -->
<header>
    <!-- TOP HEADER -->
    @include('frontend.header')
    <!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->

<!-- NAVIGATION -->
    @include('frontend.nav')
<!-- /NAVIGATION -->

<!-- SECTION -->
@yield('content')
<!-- /SECTION -->

<!-- NEWSLETTER -->
    @include('frontend.newsletter')
<!-- /NEWSLETTER -->

<!-- FOOTER -->
@include('frontend.footer')
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="{{asset("js/jquery.min.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<script src="{{asset("js/slick.min.js")}}"></script>
<script src="{{asset("js/nouislider.min.js")}}"></script>
<script src="{{asset("js/jquery.zoom.min.js")}}"></script>
<script src="{{asset("js/main.js")}}"></script>

</body>
</html>
