@extends('templates.web')
@section('title', setting('site.title'))
@section('content')
@include('templates.header')

<section class="hero-banner pt-0 pb-0 d-flex h-100 align-items-center">
  <div class="container-fluid ">
    <div class="row">
      <div class="col-md-12"> <img src="images/hero-top.png" class="img-fluid d-none d-lg-block" alt="top-hero"> </div>
    </div>
    <div class="row no-gutters">
      <div class="col-md-3"> <img src="images/hero-left.png" class="img-fluid  d-none d-lg-block" alt="Hero left"> </div>
      <div class="col-md-6">
        <h1 class="text-center h2 mb-0 mt-2 ">One Portal , Complete Legal Solution</h1>
        <div class="pt-2 pl-5 pr-5 pb-2 pt-0">
          <div class="row no-gutters">
            <div class="col-md-12">
              <div class="input-group">
                <input type="text" class="form-control radius0" id="search">
                <div class="input-group-append">
                  <button class="btn btn-secondary" type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </div>
              </div>
              <p class="mb-0 mt-1"> <span class="text-muted mb-1">Popular searches:</span> <a href="#"><span class="badge badge-info mb-1">FFMC License</span></a> <a href=""><span class="badge badge-info mb-1">IP 1 License </span></a> <a href=""><span class="badge badge-info mb-1">ISP License </span></a> <a href=""><span class="badge badge-info mb-1">VNO License</span></a> <a href=""><span class="badge badge-info mb-1">RNI Registration</span></a> </p>
            </div>
          </div>
          <div class="row no-gutters mt-2 ">
            <div class="col-md-8 offset-md-3"> <a class="cbtn btn-3  mb-1" href=""> <i class="fa fa-play" aria-hidden="true"></i> Watch Video</a> <a class="cbtn btn-4 mb-1" href=""><i class="fa fa-phone" aria-hidden="true"></i> Contact us</a> </div>
          </div>
        </div>
      </div>
      <div class="col-md-3"> <img src="images/hero-right.png" class="img-fluid  d-none d-lg-block" alt="Hero right"> </div>
    </div>
    <div class="row">
      <div class="col-md-12"> <img src="images/hero-bottom.png" class="img-fluid  d-none d-lg-block" alt="Hero bottom"> </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="row">
    <div class="col-md-4 text-center"> <img src="images/icon/CA.png" class="img-fluid" alt="CA"> <strong> Chartered Account </strong> </div>
    <div class="col-md-4 text-center"> <img src="images/icon/cs.png" class="img-fluid" alt="cs"> <strong> Company Secretary </strong> </div>
    <div class="col-md-4 text-center"> <img src="images/icon/advacate.png" class="img-fluid" alt="advacate"> <strong> Lawyer</strong> </div>
  </div>
</div>
<div class="section  pt-2  pb-2 counter-wrapper">
  <div class=" container-fluid">
    <div class="row text-center no-gutters">
      <div class="col-md-2">
        <div class="counter">
          <div class="counter-icon"> <img src="images/icon/customer-review.svg"  alt="customer" class="img-fluid"> </div>
          <div class="timer icon plus  count-title count-number text-bold" data-to="25000" data-speed="1500"><i class="fa fa-plus" aria-hidden="true"></i></div>
          <p class="count-text"> Satisfied Clients</p>
        </div>
      </div>
      <div class="col-md-2">
        <div class="counter">
          <div class="counter-icon"> <img src="images/icon/certificate.svg" alt="certificate" class="img-fluid"> </div>
          <div class="timer icon plus count-title count-number text-bold" data-to="500" data-speed="1500"></div>
          <p class="count-text">Registration | License | Compliance</p>
        </div>
      </div>
      <div class="col-md-2">
        <div class="counter">
          <div class="counter-icon"> <img src="images/icon/india.svg" alt="india" class="img-fluid"> </div>
          <div class="timer  count-title count-number text-bold" data-to="10" data-speed="1500"></div>
          <p class="count-text "> Branches across India</p>
        </div>
      </div>
      <div class="col-md-2">
        <div class="counter">
          <div class="counter-icon"> <img src="images/icon/success.svg" alt="success" class="img-fluid"> </div>
          <div class="timer icon plus count-title count-number text-bold" data-to="50" data-speed="1500"></div>
          <p class="count-text "> Years Combined Experience</p>
        </div>
      </div>
      <div class="col-md-2">
        <div class="counter">
          <div class="counter-icon"> <img src="images/icon/team.svg" alt="team" class="img-fluid"> </div>
          <div class="timer icon plus count-title count-number text-bold" data-to="35" data-speed="1500"></div>
          <p class="count-text "> Team Members</p>
        </div>
      </div>
      <div class="col">
        <div class="counter">
          <div class="counter-icon"> <img src="images/icon/consulting.svg"  alt="consulting" class="img-fluid"> </div>
          <div class="timer icon  count-title count-number text-bold" data-to="10" data-speed="1500"></div>
          <p class="count-text ">Among Top 10 Consulting firms</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Service section -->
<section class="section servicebg">
  <div class="container">
    <div class="row">
      <div class="col-md-12  text-center">
        <h2 class="main-heading h3">Our Services</h2>
      </div>
    </div>
    <div class="row justify-content-center align-items-center mt-3">
      <div class="col-md-3">
        <h2 class="h4 mb-4">Start Your Business in the Telecom Industry</h2>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">IP 1 Registration</a></h4>
        <div class="divider-1"> <span></span></div>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">Ul VNO Licensing </a></h4>
        <div class="divider-1"> <span></span></div>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">UL ISP Registration</a></h4>
        <div class="divider-1"> <span></span></div>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">ETA approval</a></h4>
        <div class="divider-1"> <span></span></div>
      </div>
      <div class="col-md-6">
        <div class="service-text-ovelay"> <img src="images/serices-section.png" class="img-fluid" alt="serices"> 
          <!--<h2> Start your Business<br> in the Telecom Industry</h2>--> 
        </div>
      </div>
      <div class="col-md-3">
        <h2 class="h4 mb-4">Manufacture products under  BIS certification</h2>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">BIS certification for toys</a></h4>
        <div class="divider-1"> <span></span></div>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">BIS certification for Electronics</a></h4>
        <div class="divider-1"> <span></span></div>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">BIS Certification CGHS</a></h4>
        <div class="divider-1"> <span></span></div>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">BIS product certification</a></h4>
        <div class="divider-1"> <span></span></div>
      </div>
    </div>
  </div>
</section>
<section class="section servicebg1">
  <div class="container">
    <div class="row justify-content-center align-items-center mt-3">
      <div class="col-md-3">
        <h2 class="h4 mb-4">Start your insurance business by getting licensed by IRDA </h2>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">Insurance Web Aggregator</a></h4>
        <div class="divider-1"> <span></span></div>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">Insurance marketing license</a></h4>
        <div class="divider-1"> <span></span></div>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">Insurance Broker License</a></h4>
        <div class="divider-1"> <span></span></div>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">Insurance Company Setup</a></h4>
        <div class="divider-1"> <span></span></div>
      </div>
      <div class="col-md-3">
        <h2 class="h4 mb-4">Business licenses for your customized businesses </h2>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">Payment Gateway License</a></h4>
        <div class="divider-1"> <span></span></div>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">FFMC License</a></h4>
        <div class="divider-1"> <span></span></div>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">RNI Registration</a></h4>
        <div class="divider-1"> <span></span></div>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">ERP certification</a></h4>
        <div class="divider-1"> <span></span></div>
      </div>
      <div class="col-md-6">
        <div class="service-text-ovelay"> <img src="images/serices-section1.png" alt="serices" class="img-fluid"> 
          <!-- <h2> Get licensed by IRDA</h2>--> 
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section servicebg">
  <div class="container">
    <div class="row justify-content-center align-items-center mt-3">
      <div class="col-md-3">
        <h2 class="h4 mb-4">Setup Your Business Entity</h2>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">Company Registration</a></h4>
        <div class="divider-1"> <span></span></div>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">Private Limited Company </a></h4>
        <div class="divider-1"> <span></span></div>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">One Person Company</a></h4>
        <div class="divider-1"> <span></span></div>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">Sole Proprietorship </a></h4>
        <div class="divider-1"> <span></span></div>
      </div>
      <div class="col-md-6">
        <div class="service-text-ovelay"> <img src="images/serices-section3.png" alt="serices" class="img-fluid"> 
          <!--<h2> Start your Business<br> in the Telecom Industry</h2>--> 
        </div>
      </div>
      <div class="col-md-3">
        <h2 class="h4 mb-4">Care for Regulatory Compliances</h2>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">GST Return Filing</a></h4>
        <div class="divider-1"> <span></span></div>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">Annual Return Filing</a></h4>
        <div class="divider-1"> <span></span></div>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">TDS Return Filing </a></h4>
        <div class="divider-1"> <span></span></div>
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="#">Audit Of The Business </a></h4>
        <div class="divider-1"> <span></span></div>
      </div>
    </div>
  </div>
</section>
<section class="section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ">
        <h2 class="font-weight-bold mb-1 h3">Our Clients</h2>
        <div class="divider-1"> <span></span></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="carousel-wrap clients">
          <div id="owl" class="owl-carousel ">
            <div class="item"><img src="images/clients/dulux.jpg" alt="Client"></div>
            <div class="item"><img src="images/clients/car.jpg" alt="Client"></div>
            <div class="item"><img src="images/clients/alankit.jpg" alt="Client"></div>
            <div class="item"><img src="images/clients/vedantu.jpg" alt="Client"></div>
            <div class="item"><img src="images/clients/ferns.jpg" alt="Client"></div>
            <div class="item"><img src="images/clients/tsys.jpg" alt="Client"></div>
            <div class="item"><img src="images/clients/rand.jpg" alt="Client"></div>
            <div class="item"><img src="images/clients/scholatic.jpg" alt="Client"></div>
            <div class="item"><img src="images/clients/avaya.jpg" alt="Client"></div>
            <div class="item"><img src="images/clients/dealshare.jpg" alt="Client"></div>
            <div class="item"><img src="images/clients/airbnb.jpg" alt="Client"></div>
            <div class="item"><img src="images/clients/agi-milltec.jpg" alt="Client"></div>
          </div>
        </div>
        <div class="carousel-wrap clients mt-3">
          <div id="owl1" class="owl-carousel ">
            <div class="item"><img src="images/clients/indorama.jpg" alt="Client"></div>
            <div class="item"><img src="images/clients/gebbs.jpg" alt="Client"></div>
            <div class="item"><img src="images/clients/smarter-biz.jpg" alt="Client"></div>
            <div class="item"><img src="images/clients/writer.jpg" alt="Client"></div>
            <div class="item"><img src="images/clients/buzzworks.jpg" alt="Client"></div>
            <div class="item"><img src="images/clients/prepladder.jpg" alt="Client"></div>
            <div class="item"><img src="images/clients/harmonic.jpg" alt="Client"></div>
            <div class="item"><img src="images/clients/sbl.jpg" alt="Client"></div>
            <div class="item"><img src="images/clients/agami-tech.jpg" alt="Client"></div>
            <div class="item"><img src="images/clients/u.jpg" alt="Client"></div>
            <div class="item"><img src="images/clients/forcepoint.jpg" alt="Client"></div>
            <div class="item"><img src="images/clients/adaan.jpg" alt="Client"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Service section End-->
<section class="section pt-3 pb-3 cfobg">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="row align-items-center no-gutters">
          <div class="col-md-5 text-center"><img src="images/associate.png" alt="associate"></div>
          <div class="col-md-6 text-left">
            <h2 class="h3">Virtual CFO Services </h2>
            <p class="subhead mb-3"> Focus on your business, leaving the accounting matter to us. </p>
            <p>With our Virtual CFO services, you can relax and let us handle your accounting regulations matters. Focus on your work, while our experts take your finances up to the accounting standards. </p>
            <a class="cbtn btn-4  text-white "> <i class="fa fa-phone" aria-hidden="true"></i> Book a free Consultation</a> </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section pt-0 pb-0 associatebg " >
  <div class="container pt-0 pb-0"> 
    <!-- row  -->
    <div class="row justify-content-center align-items-center ">
      <div class="col-md-5 text-center"> <img src="images/associate.jpg" class="img-fluid" alt="associate"> </div>
      <div class="col-md-7 text-white">
        <h2 class=" main-heading-2">Become An Associate?</h2>
        <p class="subhead mb-1">Join us on a mutually beneficial journey where you grow along with us </p>
        <p>Join Registrationwala’s no agreement, no franchisee, and all profit – Associate program. If you are a lawyer, Chartered Accountant, Company Secretary, Business Consultant, you can join us on this transparent platform – where every lead shared will hold value, and every lead cared for will be equal. </p>
        <div> <a class="cbtn btn-4 mb-3"> <i class="fa fa-phone" aria-hidden="true"></i> Registration</a> </div>
      </div>
    </div>
    <!-- row  --> 
  </div>
</section>

@if($letestBlog)
<section class="section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="main-heading h3">Enhance your knowledge </h2>
        <p class="subhead mb-5">Enhance your knowledge about business licenses through these digestible articles</p>
      </div>
    </div>
    <div class="row mb-4">

      <div class="col-12 col-sm-8 col-md-6 col-lg-4">
        <div class="card bloghome h-100 justify-content-center align-items-center">
          
          <img src="images/telecom.png" alt="telecom" /> 
          <div class="h2"> <strong>Telecom</strong></div> 
             <a class="cbtn btn-4 text-white  w-50 text-center mb-2">View All</a>
        </div>
      </div>
      <div class="col-12 col-sm-8 col-md-6 col-lg-4">
        <div class="card bloghome h-100">
          <div class="card-img tag-overlay"> <a href=""><img class="card-img" src="images/pmwani.jpg" alt="pmwani"></a> <a href="#" class="btn btn-dark btn-sm">Telecom</a> </div>
          <div class="card-body pt-2">
            <h4 class="card-title"> <a href="#">What is PM WANI Scheme & what you need to know about it? </a></h4>
            <small class="text-muted cat"> <i class="fa fa-calendar "></i> December 23, 2020 <span class="pull-right"> <i class="fa fa-user-o "></i> Registrationwala</span> </small>
<!--            <p class="card-text">When it comes to the concept of digital India, it’s the presence of Wi-Fi connection and the access that comes...</p>
-->            <a href="#" class="btn btn-sm btn-outline-dark  center-block w-50 mt-2">Read more</a> </div>
        </div>
      </div>
      <div class="col-12 col-sm-8 col-md-6 col-lg-4">
        <div class="card bloghome h-100">
          <div class="card-img tag-overlay"> <a href=""><img class="card-img" src="images/pmwani.jpg" alt="pmwani"></a> <a href="#" class="btn btn-dark btn-sm">Telecom</a> </div>
          <div class="card-body pt-2">
            <h4 class="card-title"> <a href="#">What is PM WANI Scheme & what you need to know about it? </a></h4>
            <small class="text-muted cat"> <i class="fa fa-calendar "></i> December 23, 2020 <span class="pull-right"> <i class="fa fa-user-o "></i> Registrationwala</span> </small>
<!--            <p class="card-text">When it comes to the concept of digital India, it’s the presence of Wi-Fi connection and the access that comes...</p>
-->            <a href="#" class="btn btn-sm btn-outline-dark  center-block w-50 mt-2">Read more</a> </div>
        </div>
      </div>
    </div>
    <hr />
    
     <div class="row mb-4 ">
      
      <div class="col-12 col-sm-8 col-md-6 col-lg-4">
        <div class="card bloghome h-100">
          <div class="card-img tag-overlay"> <a href=""><img class="card-img" src="images/bis.jpg" alt="bis"></a> <a href="#" class="btn btn-dark btn-sm">BIS Certification
</a> </div>
          <div class="card-body pt-2">
            <h4 class="card-title"> <a href="#">What is BIS for toys and why you should care about it? </a></h4>
            <small class="text-muted cat"> <i class="fa fa-calendar "></i> December 23, 2020 <span class="pull-right"> <i class="fa fa-user-o "></i> Registrationwala</span> </small>
<!--            <p class="card-text">When it comes to the concept of digital India, it’s the presence of Wi-Fi connection and the access that comes...</p>
-->            <a href="#" class="btn btn-sm btn-outline-dark  center-block w-50 mt-2">Read more</a> </div>
        </div>
      </div>
      
      
      
      <div class="col-12 col-sm-8 col-md-6 col-lg-4">
        <div class="card bloghome h-100">
          <div class="card-img tag-overlay"> <a href=""><img class="card-img" src="images/bis.jpg" alt="bis"></a> <a href="#" class="btn btn-dark btn-sm">BIS Certification
</a> </div>
          <div class="card-body pt-2">
            <h4 class="card-title"> <a href="#">What is BIS for toys and why you should care about it? </a></h4>
            <small class="text-muted cat"> <i class="fa fa-calendar "></i> December 23, 2020 <span class="pull-right"> <i class="fa fa-user-o "></i> Registrationwala</span> </small>
<!--            <p class="card-text">When it comes to the concept of digital India, it’s the presence of Wi-Fi connection and the access that comes...</p>
-->            <a href="#" class="btn btn-sm btn-outline-dark  center-block w-50 mt-2">Read more</a> </div>
        </div>
      </div>
      
      <div class="col-12 col-sm-8 col-md-6 col-lg-4">
        <div class="card bloghome h-100 justify-content-center align-items-center">
          
          <img src="images/bis-logo.png" alt="bis" />
          <div class="h3"> <strong>BIS Certification</strong></div> 
             <a class="cbtn btn-4 w-50 text-white text-center mb-2">View All</a>
        </div>
      </div>
    </div>
    <hr />
    
  <div class="row">
      <div class="col-md-12">
      <h2 class="h4 text-bold"> What's latest in Registration</h2>
      </div>
      </div>
    <div class="row">
      @foreach($letestBlog as $blog)
      <div class="col-12 col-sm-8 col-md-6 col-lg-4">
        <div class="card bloghome h-100">
          <div class="card-img tag-overlay"> <a href="{{url( __('voyager::post.post_slug').$blog->category->slug.'/'.$blog->service->slug.'/'.$blog->slug)}}"><img class="card-img" src="{{Voyager::image($blog->thumbnail('medium'))}}" alt="{{$blog->title}}"></a> <a href="{{url( __('voyager::post.post_slug').$blog->category->slug.'/'.$blog->service->slug)}}" class="btn btn-dark btn-sm">{{$blog->service->title}}</a> </div>
          <div class="card-body pt-2">
            <h4 class="card-title"> <a href="{{url( __('voyager::post.post_slug').$blog->category->slug.'/'.$blog->service->slug.'/'.$blog->slug)}}">{{$blog->title}}</a></h4>
            <small class="text-muted cat"> <i class="fa fa-calendar "></i> {{date('F d, Y',strtotime($blog->created_at))}} <span class="pull-right"> <i class="fa fa-user-o "></i> Registrationwala</span> </small>
            <a href="{{url( __('voyager::post.post_slug').$blog->category->slug.'/'.$blog->service->slug.'/'.$blog->slug)}}" class="btn btn-sm btn-outline-dark  center-block w-50 mt-2">Read more</a> </div>
        </div>
      </div>
      @endforeach
      
    </div>
  </div>
</section>
@endif
@if($wps)
<section class="testimonials section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="main-heading h3">What People Say</h2>
        <p class="subhead mb-5"> From the hearts of our esteemed clients </p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div id="customers-testimonials" class="owl-carousel">
        @foreach($wps as $row) 
          <!--TESTIMONIAL {{ $loop->iteration }} -->
          <div class="item">
            <div class="shadow-effect"> <img class="img-circle" src="{{Voyager::image($row->image)}}" alt="testimonials">
              <p class="qicon">{{$row->description}}</p>
            </div>
            <div class="testimonial-name">{{$row->name}} ({{$row->city}}) </div>
          </div>
          <!--END OF TESTIMONIAL {{ $loop->iteration }} --> 
          @endforeach
          
        </div>
      </div>
    </div>
  </div>
</section>
@endif
@endsection

@section('script')

@endsection