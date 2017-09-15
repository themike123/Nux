<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

    @if (Auth::guest())
      <meta name="user_nux" id="user_nux" content="anonymous">
    @else
      <meta name="user_nux" id="user_nux" content="{{Auth::user()->rol}}">
    @endif

    <title>{{ config('app.name', 'Nux') }}</title>

    <!-- Styles -->
    <!--link href="{{ asset('css/app.css') }}" rel="stylesheet"-->
     <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/flexslider/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/pretty-photo/css/prettyPhoto.css') }}">
    <!-- Theme CSS -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="home-page">

    <div class="wrapper">
      @include('layouts.header')
      @include('layouts.navbar')
      <!-- Contenido -->
      <div class="content container">
        @yield('content')
      </div>
    </div>
    @include('layouts.footer')


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{asset('plugins/jquery-1.12.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/bootstrap-hover-dropdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/back-to-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/jquery-placeholder/jquery.placeholder.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/pretty-photo/js/jquery.prettyPhoto.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/flexslider/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/jflickrfeed/jflickrfeed.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

  </body>
</html>
