<!DOCTYPE html>
<html lang="en">
 <head>
  <base target="_parent">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title',setting('site.title'))</title>
  <meta name="description" content="@yield('description',setting('site.description'))">
  <meta name="keywords" content="@yield('keywords', setting('site.keywords'))">
  <meta name="author" content="@yield('author')">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
  @yield('og')
<meta name="twitter:card" content="URL"/>
<meta name="twitter:site" content="@Registrationwla"/>
<meta name="twitter:title" content="@yield('title',setting('site.title'))"/>
<meta name="twitter:description" content="@yield('description',setting('site.description'))"/>
<meta name="twitter:image" content="{{ asset(Voyager::image(setting('site.logo')))}}"/>

<link rel="icon" href="{{ asset('/assets/images/icon/favicon.png') }}" type="image/gif" >
  <link rel="canonical" href="{{ url()->current() }}" />
  @if (!Request::is('legal-docs/*/edit'))
  <link rel="amphtml" href="{{ url('amp/'.request()->path()) }}">
  @endif
  <link rel="manifest" href="/manifest.json">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="msapplication-starturl" content="/">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#e5e5e5">
  <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
  <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('/assets/css/font-awesome.min.css') }}" crossorigin="anonymous" />
  <link rel='stylesheet' href="{{ asset('/assets/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}" crossorigin="anonymous" />
  {!! setting('site.header_script') !!}
 </head>
 <body class="" data-spy="scroll" data-target="#side" @yield("bodyData")>
  @yield('content')
</div>
<section class="subscription bg-white pt-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="subscription-wrapper">
          <div class="d-flex subscription-content justify-content-between align-items-center flex-column flex-md-row text-center text-md-left">
            <h3 class="flex-fill">Subscribe <br>
              to our newsletter</h3>
            <form action="#" id="subscribeform" class="row flex-fill">
              @csrf
              <input type="hidden" name="source" value="subscribe">
              <input type="hidden" name="name" value="subscriber">
              <input type="hidden" name="page" value="{{url()->current()}}">
              <div class="col-lg-7 my-md-2 my-2">
                <input type="email" class="form-control px-4 border-0 w-100 text-center text-md-left" id="email" placeholder="Your Email" name="email" required="">
              </div>
              <div class="col-lg-5 my-md-2 my-4">
                <button type="submit" class="btn btn-dark btn-lg border-0 w-100" id="subscribebtn">Subscribe Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="mainfooter">
  <div class="footer-middle">
    <div class="container">
      <div class="row">
        {{ menu('Footer', 'rwfooter') }}
        <div class="col-md-3">
          <h4>Follow Us</h4>
          <ul class="list-inline mt-4">
            @if(setting('site.facebook_link'))
            <li class="list-inline-item"><a href="{{setting('site.facebook_link')}}" target="_blank" class="d-none d-lg-block"><i class="fa wp-icon fa-facebook-f"></i></a></li>
            @endif
            @if(setting('site.youtube_link'))
            <li class="list-inline-item"><a href="{{setting('site.youtube_link')}}" target="_blank"  class="d-none d-lg-block"><i class="fa wp-icon fa-youtube "></i></a></li>
            @endif
            @if(setting('site.twitter_link'))
            <li  class="list-inline-item"><a href="{{setting('site.twitter_link')}}" target="_blank"  class="d-none d-lg-block"><i class="fa wp-icon fa-twitter"></i></a></li>
            @endif
            @if(setting('site.linkedin_link'))
            <li class="list-inline-item"><a href="{{setting('site.linkedin_link')}}" target="_blank"  class="d-none d-lg-block"><i class="fa wp-icon fa-linkedin"></i></a></li>
            @endif
          </ul>
          <ul class="list-unstyled mt-4">            
            @if(setting('site.whatsaap'))
            <li class="mb-2"><i class="fa  fa-whatsapp" aria-hidden="true"></i> <a href="https://api.whatsapp.com/send?phone={{str_replace(' ','',str_replace('-','',setting('site.whatsaap')))}}&amp;text=Lets%20talk%20to%20Registrationwala!"> {{setting('site.whatsaap')}}</a></li>
            @endif
            @if(setting('site.mobile'))
             <li class="mb-2"><i class="fa fa-phone-square" aria-hidden="true"></i><a href="tel:{{str_replace(' ','',str_replace('-','',setting('site.mobile')))}}"> {{setting('site.mobile')}}</a></li>
             @endif
            @if(setting('admin.email'))
            <li> <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:{{setting('admin.email')}}"> {{setting('admin.email')}}</a></li>
            @endif
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 ">
          <div class="line"></div>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-md-6  text-center text-md-left">
          <p > Member <img src="{{ asset('/assets/images/delhilogo.png') }}" alt="Member"> <img src="{{ asset('/assets/images/cii-logo.png') }}" alt="cii"></p>
        </div>
        <div class="col-md-6 text-center text-md-right ">
          <p > Payment Method <img src="{{ asset('/assets/images/payment.png') }}" class="img-fluid" alt="Payment"> </p>
        </div>
      </div> -->
    </div>
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="text-center">{{setting('site.copyright')}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="{{ asset('/assets/js/owl.carousel.min.js') }}"></script> 
<script src="{{ asset('/assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('/assets/js/sweetalert.js') }}"></script>
<script src="{{ asset('/assets/js/additional-methods.min.js') }}"></script>
<script src="{{ asset('/assets/js/custom.js') }}"></script>
<a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true">Top</a>

<script>$(document).ready(function() {
$(window).scroll(function() {
if ($(this).scrollTop() > 20) {
$('#toTopBtn').fadeIn();
} else {
$('#toTopBtn').fadeOut();
}
});

$('#toTopBtn').click(function() {
$("html, body").animate({
scrollTop: 0
}, 100);
return false;
});

$("#subscribeform").validate({
      submitHandler: function(form) {
        storeformdata(form,'#subscribebtn')
      }
     });
});
function storeformdata(form,btn){

        $('html').css('cursor', 'wait');
        $(btn).prop('disabled', true);
        $.ajax({
            url: "/lead-form",
            dataType: 'json',
            type: 'POST',
            data: $(form).serialize(),
            success: function(data)
            {
              $('html').css('cursor', 'default');
              $(btn).prop('disabled', false);
              var upara = '';
              $.each(data.msg, function( index, value ) {
                upara += value+"\n"
              });
              swal(data.title, upara, data.type).then((value) => {
                    if(data.type=='success'){
                      $(form).validate().resetForm();
                      $(form).get(0).reset();
                    }
                });
            },
            error: function(data)
            {
              console.log(data)
              $('html').css('cursor', 'default');
              $(btn).prop('disabled', false);

              alert("it didn't work");
            }
        });
        return false;
      
  }
  </script>

  @yield('script')
  {!! setting('site.footer_script') !!}
 </body>
</html>