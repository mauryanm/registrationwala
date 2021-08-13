<!DOCTYPE html>
<html lang="en">
 <head>
  <base target="_parent">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title',setting('site.title'))</title>
  <meta name="description" content="@yield('description')">
  <meta name="keywords" content="@yield('keywords')">
  <meta name="author" content="@yield('author')">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
  @yield('og')
  <link rel="icon" href="{{ asset('/assets/images/icon/favicon.png') }}" type="image/gif" >  
  <link rel="manifest" href="/manifest.json">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="msapplication-starturl" content="/">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#e5e5e5">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
  <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('/assets/css/font-awesome.min.css') }}" crossorigin="anonymous" />
  <link rel='stylesheet' href="{{ asset('/assets/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/css/user-dashboard.css') }}">
{!! setting('site.header_script') !!}
 </head>
 <body>
  @yield('content')

<script src="{{ asset('/assets/js/owl.carousel.min.js') }}"></script> 
<script src="{{ asset('/assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('/assets/js/sweetalert.js') }}"></script>
<script src="{{ asset('/assets/js/additional-methods.min.js') }}"></script>
{{-- <script src="{{ asset('/assets/js/custom.js') }}"></script> --}}
@yield('script')
{!! setting('site.footer_script') !!}
 </body>
</html>