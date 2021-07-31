@extends('templates.web')
@section('title', "Become an Associate")
@section('description', "Become an Associate")
@section('keywords', "Become an Associate")
@section('content')
@include('templates.header')
@include('dashboard.includes.error')
<div class="associate-section ">
  <div class=" ">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-7 service-img text-center ">
          <div class="h4 text-uppercase largefont  text-bold textbg">Let's grow with our Associate Program</div>
        </div>
        <div class="col-md-4 offset-md-1">
            <div class="mt-5 mb-5 pt-4 pb-4  bg-white">
              <div class="card-body bg-white ">
                <p class="text-center font-weight-bold h5 mb-3">Start Your Associate Journey</p>  
                  <form autocomplete="off" action="{{ route('dashboard.register') }}" class="form validateform" method="post" id="serviceform1">
                    @csrf
                    <input type="hidden" name="type" value="associate">
                    <div class="form-group">
                      <input class="form-control" value="{{old('name')}}" name="name" type="text" placeholder="Name" required="">
                    </div>
                    
                       <div class="form-group">
                      <input class="form-control"  value="{{old('email')}}" name="email" type="email" placeholder="Email ID" required="">
                    </div>
                    
                        <div class="form-group">
                      <input class="form-control" value="{{old('phone')}}" name="phone" type="text" placeholder="Phone Number" required="">
                    </div>
                    <div class="form-group">
                      <select class="form-control" name="profession" required="">
                          <option value="">Select Profession</option>
                          <option value="CA" {{old('profession')=='CA'?'selected':''}}>CA</option>
                          <option value="CS" {{old('profession')=='CS'?'selected':''}}>CS</option>
                          <option value="Lawyer" {{old('profession')=='Lawyer'?'selected':''}}>Lawyers</option>
                          <option value="Others" {{old('profession')=='Others'?'selected':''}}>Others</option>
                          </select>
                    </div>         
                
                    <div class="form-group row">
                      <div class="col-md-12">
                        <button class="btn btn-dark  btn-block" id="submit-btn1" type="submit">Become our Associate</button>
                      </div>
                    </div>
                  </form>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Header form section End-->
<div class="bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb radius-0 bg-transparent pt-3  pb-3 m-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Become Our Associate</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--Content section -->
<section class="associatebg-page">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <h2 class="h2 mb-5 text-center">Why Associate with us</h2>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6">
    <div class="embed-responsive embed-responsive-4by3">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IHzLrbxPAxc" allowfullscreen></iframe>
    </div>
    </div>
    <div class="col-md-6">  
        
        <img src="images/5step.png" class="img-fluid">

    </div>
    </div>
    </div>
</section>
<div class="section  pt-2  pb-2 counter-wrapper">
  <div class=" container">
    <div class="row text-center no-gutters">
      <div class="col">
        <div class="counter">
          <div class="counter-icon"> <img src="images/icon/certificate.svg" alt="customer" class="img-fluid"> </div>
          <div class="timer icon plus  count-title count-number text-bold" data-to="400" data-speed="1500">400 </div>
          <p class="count-text"> More Services</p>
        </div>
      </div>
      <div class="col">
        <div class="counter">
          <div class="counter-icon"> <img src="images/icon/customer-review.svg" alt="certificate" class="img-fluid"> </div>
          <div class="timer icon plus count-title count-number text-bold" data-to="50" data-speed="1500">50</div>
          <p class="count-text">Years of Experience</p>
        </div>
      </div>
      <div class="col">
        <div class="counter">
          <div class="counter-icon"> <img src="images/icon/teamwork.svg" alt="india" class="img-fluid"> </div>
          <div class="timer   icon plus   count-title count-number text-bold" data-to="1000" data-speed="1500">1000</div>
          <p class="count-text "> Onboard Associates</p>
        </div>
      </div>
      <div class="col">
        <div class="counter">
          <div class="counter-icon"> <img src="images/icon/crm.svg" alt="success" class="img-fluid"> </div>
          <div class="timer icon product count-title count-number text-bold" data-to="10" data-speed="1500">10</div>
          <p class="count-text "> Increase in Clients</p>
        </div>
      </div>
      <div class="col-md-2">
        <div class="counter">
          <div class="counter-icon"> <img src="images/icon/revenue.svg" alt="team" class="img-fluid"> </div>
          <div class="timer icon percent count-title count-number text-bold" data-to="150" data-speed="1500">150</div>
          <p class="count-text ">Increase in Revenue</p>
        </div>
      </div>
      
    </div>
  </div>
</div>



<section class="pt-5 pb-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="h3 text-center mb-4"> How to Join Us</h2>
        <ol class="join-bar">
    <li class="progress-bar__steps not-current">
        <span class="progress-bar__steps--numbers"></span>
        <span class="progress-bar__steps--text">Enter your details</span>
    </li>
        <li class="progress-bar__steps not-current">
        <span class="progress-bar__steps--numbers"></span>
        <span class="progress-bar__steps--text">Agree to terms</span>
    </li>
        <li class="progress-bar__steps not-current">
        <span class="progress-bar__steps--numbers"></span>
        <span class="progress-bar__steps--text">Submit the form</span>
    </li>
        <li class="progress-bar__steps not-current">
        <span class="progress-bar__steps--numbers"></span>
        <span class="progress-bar__steps--text">Sign Associate Agreement</span>
    </li>
    <li class="progress-bar__steps not-current">
        <span class="progress-bar__steps--numbers"></span>
        <span class="progress-bar__steps--text">Become an Associate</span>
    </li>
    </ol>
        
    <style>.join-bar {
      list-style: none;
      overflow: hidden;
      margin: 0px;
      padding: 0px;
      font-weight: 600;
      display: flex;
      counter-reset: li;
    }
    .progress-bar__steps {
      background: #ddd;
      color: #283e4a;
      width: 20%;
      position: relative;
      cursor: default;
      list-style-image: none;
      list-style-type: none;
      padding: 20px 5px;
      text-align: left;   font-size: 13px;

    }
    @media screen and (min-width: 800px) {
      .progress-bar__steps {
        padding: 20px 0 20px 20px; 
      }
    }
    @media screen and (min-width: 800px) {
      .progress-bar__steps:first-child {
        padding: 20px 0 20px 0px;
      }
    }
    @media screen and (min-width: 800px) {
      .progress-bar__steps:after {
        border-bottom: 50px solid transparent;
        border-top: 50px solid transparent;
        content: " ";
        display: block;
        height: 0;
        left: 100%;
        margin-top: -50px;
        position: absolute;
        top: 50%;
        width: 0;
        border-left: 30px solid #ddd;
        z-index: 2;
      }
    }
    @media screen and (min-width: 800px) {
      .progress-bar__steps:before {
        border-bottom: 50px solid transparent;
        border-top: 50px solid transparent;
        content: " ";
        display: block;
        height: 0;
        left: 100%;
        margin-top: -50px;
        position: absolute;
        top: 50%;
        width: 0;
        border-left: 30px solid #fff;
        z-index: 1;
        margin-left: 5px;
      }
    }
    .progress-bar .current {
      background: #647d5e;
      color: #fff;
    }
    .progress-bar .current:after {
      border-left: 30px solid #647d5e;
    }

    @media screen and (min-width: 800px) {
      .progress-bar__steps--numbers:before {
        content: counter(li) " ";
        counter-increment: li;
        margin-right:4px;
            margin-left: 18px;

        background: transparent;
        border: 1px solid #666;
        border-radius: 50%;
        display: inline-block;
        height: 20px;
        line-height: 20px;
        text-align: center;
        width: 20px;
      }
    }
    .current .progress-bar__steps--numbers:before {
      background: white;
      color: #647d5e;
    }</style>
        
      </div>
    </div>
    </div>
    
</section>

<div class="become-associate-content  pt-3">
  <div class="container">
    <div class="row mt-1">
      <div class="col-md-12">
        <div class="bg-white p-5">
    <style>
  
  .become-associate-content .carousel-indicators .active{ background-color:#000;}
    .become-associate-content .carousel-indicators li { background-color:#ccc;}

  </style>
    <h2 class="h3 text-center">Testimonials</h2>
@php
$testmonials = \App\PeopleSay::where('status',1)->get();
@endphp
@if($testmonials->count()>0)
    <div id="demo11" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        @foreach($testmonials as $endicator)
        <li data-target="#demo11" data-slide-to="{{($loop->iteration-1)}}" class="{{($loop->first?'active':'')}}"></li>
        @endforeach
      </ul>

      <!-- The slideshow -->
      <div class="carousel-inner">
        @foreach($testmonials as $testimonial)
        <div class="carousel-item {{($loop->first?'active':'')}}">
          <div class="card card-shadow border-0 mb-4">
              <div class="card-body">
                <p class=" mb-3 text-justify">{{ $testimonial->description}}</p>
            <div class="d-block d-md-flex align-items-center">
              <span class="thumb-img"><img src="{{ Voyager::image($testimonial->image)}}" alt="{{ $testimonial->name}}" class="rounded-circle tesimonial-user-img" /></span>
              <div class="ml-3">
                <h6 class="mb-0 customer">{{ $testimonial->name}}</h6>
                
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
  </div>

    </div>
    @endif
        </div>
      </div>
    </div>
  </div>
</div>
@include('includes.ourClients')
@endsection

@section('script')
<script type="text/javascript">
  // $(document).ready(function(){
  //   $("#serviceform1").validate({
  //     submitHandler: function(form) {
  //       storeformdata(form,'#submit-btn1')
  //     }
  //    });
  // })
</script>
@endsection