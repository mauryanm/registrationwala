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
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}" crossorigin="anonymous" />

 </head>
 <body class="" @yield('bodyData')>
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
        <div class="col-md-3 col-sm-6"> 
          <!--Column1-->
          <div class="footer-pad">
            <h4> Start a Business</h4>
            <ul class="list-unstyled">
              <li><a href="#">Company Registration</a></li>
              <li><a href="#">Pvt Ltd Company Registration</a></li>
              <li><a href="#">One Person Company</a></li>
              <li><a href="#">Limited Liability Partnership</a></li>
              <li><a href="#">Nidhi Company Registration</a></li>
              <li><a href="#">Public Limited Company</a></li>
              <li><a href="#">Sole Proprietorship</a></li>
              <li><a href="#">Producer Company Registration</a></li>
              <li><a href="#">Partnership Firm Registration</a></li>
              <li><a href="#">Startup Registration in India </a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6"> 
          <!--Column1-->
          <div class="footer-pad">
            <h4> Lisc & Registrations </h4>
            <ul class="list-unstyled">
              <li><a href="#">Dealer Certification</a></li>
              <li><a href="#">Importer License</a></li>
              <li><a href="#">Packer License</a></li>
              <li><a href="#">Model Approval Certificate</a></li>
              <li><a href="#">Legal Metrology Certificate</a></li>
              <li><a href="#">FFMC License
</a></li>
              <li><a href="#">Ayush Certificate</a></li>
              <li><a href="#">FEMA consultants</a></li>
              <li><a href="#">BIS for Toys
</a></li>
              <li><a href="#">Payment Gateway License
</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6"> 
          <!--Column1-->
          <div class="footer-pad">
            <h4> Other Link</h4>
            <ul class="list-unstyled">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Refund Policy</a></li>
              <li><a href="#">Cancellation Policy</a></li>
              <li><a href="#">Terms & Conditions</a></li>
              <li><a href="#">Our Coupon Partners</a></li>
              <li><a href="#">E-Books</a></li>
              <li><a href="#">Videos</a></li>
              <li><a href="#">Sitemap</a></li>
              <li><a href="#">Contact us </a></li>
            </ul>
          </div>
        </div>
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

            <li> <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:support@registrationwala.com"> support@registrationwala.com</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 ">
          <div class="line"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6  text-center text-md-left">
          <p > Member <img src="/images/delhilogo.png" alt="Member"> <img src="/images/cii-logo.png" alt="cii"></p>
        </div>
        <div class="col-md-6 text-center text-md-right ">
          <p > Payment Method <img src="/images/payment.png" class="img-fluid" alt="Payment"> </p>
        </div>
      </div>
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
              $('html').css('cursor', 'default');
              $(btn).prop('disabled', false);

              alert("it didn't work");
            }
        });
        return false;
      
  }
  </script>
<script src="{{ asset('/js/owl.carousel.min.js') }}"></script> 
<script src="{{ asset('/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('/js/sweetalert.js') }}"></script>
<script src="{{ asset('/js/additional-methods.min.js') }}"></script>
<script src="{{ asset('/js/custom.js') }}"></script>
<a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true">Top</a>
<style>#toTopBtn {
    position: fixed;
    bottom: 26px;
    right: 39px;
    z-index: 9999;
    padding:10px; width:50px; height:50px; text-align:center; line-height:30px;
    background-color: #343a40; color:#FFF; border-radius:50%;
}

.js .cd-top--fade-out {
    opacity: .5
}

.js .cd-top--is-visible {
    visibility: visible;
    opacity: 1
}

.js .cd-top {
    visibility: hidden;
    opacity: 0;
    transition: opacity .3s, visibility .3s, background-color .3s
}

.cd-top {
    position: fixed;
    bottom: 20px;
    bottom: var(--cd-back-to-top-margin);
    right: 20px;
    right: var(--cd-back-to-top-margin);
    display: inline-block;
    height: 40px;
    height: var(--cd-back-to-top-size);
    width: 40px;
    width: var(--cd-back-to-top-size);
    box-shadow: 0 0 10px rgba(0, 0, 0, .05) !important;
    background: url{../images/icon/up-arrow.svg ) no-repeat center 50%;
    background-color: hsla(5, 76%, 62%, .8);
    background-color: hsla(var(--cd-color-3-h), var(--cd-color-3-s), var(--cd-color-3-l), 0.8)
}</style>


  @yield('script')
 </body>
</html>