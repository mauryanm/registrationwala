<!DOCTYPE html>
<html lang="en">
 <head>
  <base target="_parent">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="@yield('description')">
  <meta name="keywords" content="@yield('keywords')">
  <meta name="author" content="@yield('author')">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="robots" content="noindex">
  @yield('og')
  <title>@yield('title',setting('site.title'))</title>
  <link rel="icon" href="{{ asset('/images/icon/favicon.png') }}" type="image/gif" >  
  <link rel="manifest" href="/manifest.json">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="msapplication-starturl" content="/">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#e5e5e5">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
  <script src="{{ asset('/js/jquery.min.js') }}"></script>
  <script src="{{ asset('/js/popper.min.js') }}"></script>
  <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}" crossorigin="anonymous" />
  <link rel='stylesheet' href="{{ asset('/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/user-dashboard.css') }}">
{!! setting('site.header_script') !!}
 </head>
 <body>
  @yield('content')

<script src="{{ asset('/js/owl.carousel.min.js') }}"></script> 
<script src="{{ asset('/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('/js/sweetalert.js') }}"></script>
<script src="{{ asset('/js/additional-methods.min.js') }}"></script>
{{-- <script src="{{ asset('/js/custom.js') }}"></script> --}}
@yield('script')
{!! setting('site.footer_script') !!}
 </body>
</html>