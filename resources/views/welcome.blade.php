@extends('templates.web')
@section('title', setting('site.title'))
@section('content')
@include('templates.header')

<section class="hero-banner pt-0 pb-0 d-flex h-100 align-items-center">
  <div class="container-fluid ">
    <div class="row">
      <div class="col-md-12"> <img src="{{ asset('/assets/images/hero-top.png') }}" class="img-fluid d-none d-lg-block" alt="top-hero"> </div>
    </div>
    <div class="row no-gutters">
      <div class="col-md-3"> <img src="{{ asset('/assets/images/hero-left.png') }}" class="img-fluid  d-none d-lg-block" alt="Hero left"> </div>
      <div class="col-md-6">
        <h1 class="text-center h2 mb-0 mt-2 ">One Portal , Complete Legal Solution!</h1>
        <div class="pt-2 pl-5 pr-5 pb-2 pt-0">
          <div class="row no-gutters">
            <div class="col-md-12">
              <div class="input-group">
                <input type="text" class="form-control radius0" id="search">
                <div class="input-group-append">
                  <button class="btn btn-secondary" id="servicesearchbtn" type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </div>
              </div>
              <ul class="navbar-nav pl-3" id="servicelist"></ul>
              <style>
                #servicelist{position: absolute;background: #fff; width: 100%; z-index: 1;}
              </style>
              <p class="mb-0 mt-1"> <span class="text-muted mb-1">Popular searches:</span> <a href="{{url('ffmc-license')}}"><span class="badge badge-info mb-1">FFMC License</span></a> <a href="{{url('dot-ip-1-registration')}}"><span class="badge badge-info mb-1">IP 1 License </span></a> <a href="{{url('isp-license')}}"><span class="badge badge-info mb-1">ISP License </span></a> <a href="{{url('vno-license')}}"><span class="badge badge-info mb-1">VNO License</span></a> <a href="{{url('rni-registration')}}"><span class="badge badge-info mb-1">RNI Registration</span></a> </p>
            </div>
          </div>
          <div class="row no-gutters mt-2 ">
            <div class="col-md-8 offset-md-3"> <a class="cbtn btn-3  mb-1" target="_blank" href="https://www.youtube.com/c/registrationwala"> <i class="fa fa-play" aria-hidden="true"></i> Watch Video</a> <a class="cbtn btn-4 mb-1" href="{{ url('/contact-us') }}"><i class="fa fa-phone" aria-hidden="true"></i> Contact us</a> </div>
          </div>
        </div>
      </div>
      <div class="col-md-3"> <img src="{{ asset('/assets/images/hero-right.png') }}" class="img-fluid  d-none d-lg-block" alt="Hero right"> </div>
    </div>
    <div class="row">
      <div class="col-md-12"> <img src="{{ asset('/assets/images/hero-bottom.png') }}" class="img-fluid  d-none d-lg-block" alt="Hero bottom"> </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="row">
    <div class="col-md-4 text-center"> <img src="{{ asset('/assets/images/icon/CA.png') }}" class="img-fluid" alt="CA"> <strong> Chartered Account </strong> </div>
    <div class="col-md-4 text-center"> <img src="{{ asset('/assets/images/icon/cs.png') }}" class="img-fluid" alt="cs"> <strong> Company Secretary </strong> </div>
    <div class="col-md-4 text-center"> <img src="{{ asset('/assets/images/icon/advacate.png') }}" class="img-fluid" alt="advacate"> <strong> Lawyer</strong> </div>
  </div>
</div>
<div class="section  pt-2  pb-2 counter-wrapper">
  <div class=" container-fluid">
    <div class="row text-center no-gutters">
      <div class="col-md-2">
        <div class="counter">
          <div class="counter-icon"> <img src="{{ asset('/assets/images/icon/customer-review.svg') }}"  alt="customer" class="img-fluid"> </div>
          <div class="timer icon plus  count-title count-number text-bold" data-to="25000" data-speed="1500"><i class="fa fa-plus" aria-hidden="true"></i></div>
          <p class="count-text"> Satisfied Clients</p>
        </div>
      </div>
      <div class="col-md-2">
        <div class="counter">
          <div class="counter-icon"> <img src="{{ asset('/assets/images/icon/certificate.svg') }}" alt="certificate" class="img-fluid"> </div>
          <div class="timer icon plus count-title count-number text-bold" data-to="500" data-speed="1500"></div>
          <p class="count-text">Registration | License | Compliance</p>
        </div>
      </div>
      <div class="col-md-2">
        <div class="counter">
          <div class="counter-icon"> <img src="{{ asset('/assets/images/icon/india.svg') }}" alt="india" class="img-fluid"> </div>
          <div class="timer  count-title count-number text-bold" data-to="10" data-speed="1500"></div>
          <p class="count-text "> Branches across India</p>
        </div>
      </div>
      <div class="col-md-2">
        <div class="counter">
          <div class="counter-icon"> <img src="{{ asset('/assets/images/icon/success.svg') }}" alt="success" class="img-fluid"> </div>
          <div class="timer icon plus count-title count-number text-bold" data-to="50" data-speed="1500"></div>
          <p class="count-text "> Years Combined Experience</p>
        </div>
      </div>
      <div class="col-md-2">
        <div class="counter">
          <div class="counter-icon"> <img src="{{ asset('/assets/images/icon/team.svg') }}" alt="team" class="img-fluid"> </div>
          <div class="timer icon plus count-title count-number text-bold" data-to="35" data-speed="1500"></div>
          <p class="count-text "> Team Members</p>
        </div>
      </div>
      <div class="col">
        <div class="counter">
          <div class="counter-icon"> <img src="{{ asset('/assets/images/icon/consulting.svg') }}"  alt="consulting" class="img-fluid"> </div>
          <div class="timer icon  count-title count-number text-bold" data-to="10" data-speed="1500"></div>
          <p class="count-text ">Among Top 10 Consulting firms</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Service section -->
@if($hmsr)
<section class="section servicebg pb-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12  text-center">
        <h2 class="main-heading h3">Our Services</h2>
      </div>
    </div>
    
  </div>
</section>
@foreach($hmsr as $service)
<section class="section {{(($loop->iteration%2==0)?'servicebg1':'servicebg')}}">
  <div class="container">
    <div class="row justify-content-center align-items-center mt-3">
      <div class="col-md-3 order-2">
        <h2 class="h4 mb-4">{{$service->heading}}</h2>
        @foreach($service->servicesl as $ser)
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="{{url($ser->slug)}}">{{$ser->title}}</a></h4>
        <div class="divider-1"> <span></span></div>
        @endforeach
      </div>
      <div class="col-md-6 @if($service->side=='LEFT')order-1 @endif @if($service->side=='CENTER')order-3 @endif @if($service->side=='RIGHT')order-5 @endif">
        <div class="service-text-ovelay"> <img src="{{Voyager::image($service->image)}}" alt="{{$service->heading}}" class="img-fluid"> 
        </div>
      </div>
      <div class="col-md-3 order-4">
        <h2 class="h4 mb-4">{{$service->heading2}}</h2>
        @foreach($service->servicesr as $ser)
        <h4 class="main-heading-5 hvr-sweep-to-right"><a href="{{url($ser->slug)}}">{{$ser->title}}</a></h4>
        <div class="divider-1"> <span></span></div>
        @endforeach
      </div>
    </div>
  </div>
</section>
@endforeach
@endif
@include('includes.ourClients')
<!--Service section End-->
<section class="section pt-3 pb-3 cfobg">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="row align-items-center no-gutters">
          <div class="col-md-5 text-center"><img src="{{ asset('/assets/images/associate.png') }}" alt="associate"></div>
          <div class="col-md-6 text-left">
            <h2 class="h3">Virtual CFO Services </h2>
            <p class="subhead mb-3"> Focus on your business, leaving the accounting matter to us. </p>
            <p>With our Virtual CFO services, you can relax and let us handle your accounting regulations matters. Focus on your work, while our experts take your finances up to the accounting standards. </p>
            <a class="cbtn btn-4  text-white " href="{{url('contact-us')}}"> <i class="fa fa-phone" aria-hidden="true"></i> Book a free Consultation</a> </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section pt-0 pb-0 associatebg " >
  <div class="container pt-0 pb-0"> 
    <!-- row  -->
    <div class="row justify-content-center align-items-center ">
      <div class="col-md-5 text-center"> <img src="{{ asset('/assets/images/associate.jpg') }}" class="img-fluid" alt="associate"> </div>
      <div class="col-md-7 text-white">
        <h2 class=" main-heading-2">Become An Associate?</h2>
        <p class="subhead mb-1">Join us on a mutually beneficial journey where you grow along with us </p>
        <p>Join Registrationwala’s no agreement, no franchisee, and all profit – Associate program. If you are a lawyer, Chartered Accountant, Company Secretary, Business Consultant, you can join us on this transparent platform – where every lead shared will hold value, and every lead cared for will be equal. </p>
        <div> <a class="cbtn btn-4 mb-3" href="{{url('become-an-associate')}}"> <i class="fa fa-phone" aria-hidden="true"></i> Registration</a> </div>
      </div>
    </div>
    <!-- row  --> 
  </div>
</section>


<section class="section bg-light">
  <div class="container">
    @if($hmpt)
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="main-heading h3">Enhance your knowledge </h2>
        <p class="subhead mb-5">Enhance your knowledge about business licenses through these digestible articles</p>
      </div>
    </div>
    @foreach($hmpt as $post)
    <div class="row mb-4">

      <div class="col-12 col-sm-8 col-md-6 col-lg-4">
        <div class="card bloghome h-100 justify-content-center align-items-center">
          
          <img src="{{ Voyager::image($post->image) }}" alt="{{ $post->heading }}" />
          <div class="h2"> <strong>{{$post->heading}}</strong></div> 
             <a class="cbtn btn-4 text-white  w-50 text-center mb-2" href="{{url( __('voyager::post.post_slug').$post->catlslug)}}">View All</a>
        </div>
      </div>
      @foreach($post->servicesl as $data)
      <div class="col-12 col-sm-8 col-md-6 col-lg-4">
        <div class="card bloghome h-100">
          <div class="card-img tag-overlay"> <a href="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->service->slug.'/'.$data->slug)}}"><img class="card-img" src="{{Voyager::image($data->image)}}" alt="{{$data->title}}"></a> <a href="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->service->slug)}}" class="btn btn-dark btn-sm">{{$data->service->title}}</a> </div>
          <div class="card-body pt-2">
            <h4 class="card-title"> <a href="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->service->slug.'/'.$data->slug)}}">{{$data->title}} </a></h4>
            <small class="text-muted cat"> <i class="fa fa-calendar "></i> {{date('F d, Y',strtotime($data->publish_date))}} <span class="pull-right"> <i class="fa fa-user-o "></i> Registrationwala</span> </small>
            <a href="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->service->slug.'/'.$data->slug)}}" class="btn btn-sm btn-outline-dark  center-block w-50 mt-2">Read more</a> </div>
        </div>
      </div>
      @endforeach
    </div>
    <hr />
    <div class="row mb-4">

      @foreach($post->servicesr as $data)
      <div class="col-12 col-sm-8 col-md-6 col-lg-4">
        <div class="card bloghome h-100">
          <div class="card-img tag-overlay"> <a href="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->service->slug.'/'.$data->slug)}}"><img class="card-img" src="{{Voyager::image($data->image)}}" alt="{{$data->title}}"></a> <a href="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->service->slug)}}" class="btn btn-dark btn-sm">{{$data->service->title}}</a> </div>
          <div class="card-body pt-2">
            <h4 class="card-title"> <a href="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->service->slug.'/'.$data->slug)}}">{{$data->title}} </a></h4>
            <small class="text-muted cat"> <i class="fa fa-calendar "></i> {{date('F d, Y',strtotime($data->publish_date))}} <span class="pull-right"> <i class="fa fa-user-o "></i> Registrationwala</span> </small>
            <a href="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->service->slug.'/'.$data->slug)}}" class="btn btn-sm btn-outline-dark  center-block w-50 mt-2">Read more</a> </div>
        </div>
      </div>
      @endforeach
      <div class="col-12 col-sm-8 col-md-6 col-lg-4">
        <div class="card bloghome h-100 justify-content-center align-items-center">
          <img src="{{Voyager::image($post->image2)}}" alt="{{ $post->heading2 }}" />
          <div class="h2"> <strong>{{$post->heading2}}</strong></div> 
             <a class="cbtn btn-4 text-white  w-50 text-center mb-2" href="{{url( __('voyager::post.post_slug').$post->catrslug)}}">View All</a>
        </div>
      </div>
    </div>
    <hr />
    
    @endforeach
    @endif
  @if($letestBlog)  
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
            <small class="text-muted cat"> <i class="fa fa-calendar "></i> {{date('F d, Y',strtotime($blog->publish_date))}} <span class="pull-right"> <i class="fa fa-user-o "></i> Registrationwala</span> </small>
            <a href="{{url( __('voyager::post.post_slug').$blog->category->slug.'/'.$blog->service->slug.'/'.$blog->slug)}}" class="btn btn-sm btn-outline-dark  center-block w-50 mt-2">Read more</a> </div>
        </div>
      </div>
      @endforeach
      
    </div>
  </div>
  @endif
</section>

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
<script>
$(document).ready(function(){
  $("#search, #servicesearchbtn").on('keyup',function(){
    if($(this).val()==''){
      $('#servicelist').html("");
      return false;
    }
    $.ajax({
      url: "/search-service",
      dataType: 'json',
      type: 'get',
      data: {title:$(this).val()},
      success: function(data)
      {
        $('#servicelist').html("");
          $.each(data, function(key, value) {
            $('#servicelist').append(
              '<li class="nav-item border-bottom"> <a class="nav-link" href="{{url("/")}}/'+value.slug+'">'+value.title+' </a> </li>'
            );
        });
      },
      error: function(data)
      {
        $('html').css('cursor', 'default');
        console.log('Something went wrong.')
      }
  });
  })
})
</script>
@endsection