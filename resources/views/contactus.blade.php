@extends('templates.web')
@section('title', 'Our Videos - Registrationwala Videos')
@section('description', 'Check out our vast video collection. Through youtube videos, Registrationwala aims to educate you about business licenses.')
@section('keywords', 'Videos')
@section('content')
@include('templates.header')

<!--Header form section-->
<section class="map  mb-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13999.370863005146!2d77.128095!3d28.6943512!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7fb75b3603154eff!2sRegistrationwala%20-%20Company%20Registration!5e0!3m2!1sen!2sin!4v1613712218303!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</section>
<div class="bg-light p-2 mt-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb radius-0 bg-transparent p-0  m-0">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Contact us</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<section class="pb-5 bg-light border-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="contentbg">Contact us</div>
        <h1 class="h3 zindex  text-bold text-center largefont  mb-3">Contact us</h1>
            <p class="text-center w-75 m-auto">If you are even in need of business registration, business license, or any kind of business consultation,<br> you can reach out to Registrationwala via email, phone, or physical visit.<br> We will always be available to take care of your requirements.</p>
      </div>
    </div>       
   <div class="row">
     <div class="col-sm-12 col-md-6 col-lg-4 my-5">
       <div class="card border-0 h-100">
          <div class="card-body text-center">
            <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
            <h4 class="text-uppercase mb-5">call us</h4>
            <p>
              @if(setting('site.whatsaap'))
              <a target="_blank" href="https://api.whatsapp.com/send?phone={{str_replace(' ','',str_replace('-','',setting('site.whatsaap')))}}&amp;text=Lets%20talk%20to%20Registrationwala!">{{setting('site.whatsaap')}}</a> 
              @endif
              @if(setting('site.mobile'))
              , <a  href="tel:{{str_replace(' ','',str_replace('-','',setting('site.mobile')))}}" title="" data-toggle="tooltip" data-original-title="Call us {{setting('site.mobile')}} OR Contact with us @ support@registrationwala.com"> {{setting('site.mobile')}}</a>
            @endif
          </p>
          </div>
        </div>
     </div>
     <div class="col-sm-12 col-md-6 col-lg-4 my-5">
       <div class="card border-0 h-100">
          <div class="card-body text-center">
            <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
            <h4 class="text-uppercase mb-5">office loaction</h4>
           <address> {{setting('admin.address')}} </address>
          </div>
        </div>
     </div>
     
     <div class="col-sm-12 col-md-6 col-lg-4 my-5">
       <div class="card border-0 h-100">
          <div class="card-body text-center">
            <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
            <h4 class="text-uppercase mb-5">email</h4>
            <p>{{setting('admin.email')}}</p>
          </div>
        </div>
     </div>
   </div>
       </div>
    </section>


<section class="pb-5 bg-white border-bottom formbg">
<div class="container pb-5">

<div class="row">
      <div class="col-md-12 text-center">
        <div class="contentbg">Write to us</div>
        <h2 class="h3 zindex  text-bold text-center largefont  mb-3">Write to us</h2>
            <p class="text-center w-75 m-auto">If you have queries you want us to answer, any business you want to start, any license you want or <br> require any other business consultations,  
            feel free to write to us.</p>
      </div>
    </div>


        <div class="row justify-content-center mt-5">
            <div class="media-container-column col-lg-10">
                 
              <form  class="bg-white p-5 validateform" id="contactusform">
                @csrf
              <input type="hidden" name="source" value="contact us">
              <input type="hidden" name="page" value="contact us">
              <input type="hidden" name="page_id" value="0">
              <input type="hidden" name="from" value="contact">
                  <div class="row row-sm-offset">
                      <div class="col-md-4 multi-horizontal" >
                          <div class="form-group">
                              <input type="text" class="form-control  bg-light radius0" name="name"  placeholder="Name" required="">
                          </div>
                      </div>
                      <div class="col-md-4 multi-horizontal" data-for="email">
                          <div class="form-group">
                              <input type="email" class="form-control bg-light radius0" name="email" placeholder="Email" required="" >
                          </div>
                      </div>
                      <div class="col-md-4 multi-horizontal" data-for="phone">
                          <div class="form-group">
                              <input type="tel" class="form-control bg-light radius0" name="phone" placeholder="Phone" required="">
                          </div>
                      </div>
                  </div>
                  <div class="form-group" data-for="message">
                      <textarea type="text" class="form-control bg-light radius0" name="description" rows="7"  placeholder="How We Can Help?"></textarea>
                  </div>
                   <div class="text-right">
                  <span class="input-group-btn">
                      <button id="submit-btn" type="submit" class="btn btn btn-dark  w-50 btn-form display-4">Submit Your Query</button>
                  </span>
                  </div>
              </form>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $("#contactusform").validate({
      submitHandler: function(form) {
        storeformdata(form,'#submit-btn')
      }
     });
  })
  
</script>
@endsection