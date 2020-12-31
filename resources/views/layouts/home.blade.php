<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('assets')}}/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="{{asset('assets')}}/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{asset('assets')}}/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
    <script src="{{asset('assets')}}/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="{{asset('assets')}}/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    @yield('css')
    @yield('headerjs')
</head>
<body>
@include('home._header')

@include('home._slider')


@section('content')
@show

@include('home._footer')
@yield('footerjs')
</body>
</html>
