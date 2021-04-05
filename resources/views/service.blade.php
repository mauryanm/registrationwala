@extends('templates.web')
@section('title', $data->seo_title)
@section('description', $data->meta_description)
@section('keywords', $data->meta_keywords)
@section('bodyData', 'data-spy=scrol" data-target=#side')
@section('content')
@include('templates.header')

<!--Header form section-->
<div class="service-section overlay">
  <div class="border-bottom ">
    <div class="container">
      <div class="row no-gutters align-items-center">
        <div class="col-md-7 service-img text-center text-md-left">
          <div class="h4 text-uppercase text-white text-bold ">{{$data->heading}}</div>
          <p class="text-white text-justify">{{$data->sub_heading}}</p>
          <div> 
            @if($data->video)
            <a class="cbtn btn-3  mb-1" href="https://www.youtube.com/watch?v={{$data->video}}"  target="_blank" > <i class="fa fa-play" aria-hidden="true"></i> Watch Video</a>
            @endif
             <a class="cbtn btn-4 mb-1" href=""><i class="fa fa-phone" aria-hidden="true"></i> Schedule Free Consultation</a> </div>
             @if($data->price)
          <div class="price-ribbon mt-3"> <span class="text"><strong class="bold">Price Starts </strong>  RS @ {{number_format(($data->price))}} /-</span> </div>
            @endif
        </div>
        <div class="col-md-4 offset-md-1">
        <div class="card-body bg-white radius10">
            <p class="text-center font-weight-bold h5">Want to know More  ?</p>
            <form autocomplete="off" class="form validateform" method="post" id="serviceform1">
              @csrf
              <input type="hidden" name="source" value="service">
              <input type="hidden" name="page" value="{{$data->title}}">
              <input type="hidden" name="page_id" value="{{$data->id}}">
              <input type="hidden" name="from" value="header">
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Name" required="" name="name">
              </div>
              <div class="form-group">
                <input class="form-control" type="email" placeholder="Email" required="" name="email">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Phone" required="" name="phone">
              </div>
              <div class="form-group">
                <textarea class="form-control"  placeholder="How we can help?" name="description"></textarea>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <button class="btn btn-dark  btn-block" id="submit-btn1" type="submit">Request Call back</button>
                </div>
              </div>
            </form>
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
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Full Fledge Money Changer License</li>
        </ol>
      </div>
    </div>
  </div>
</div>
@if($data->process)
<section class="bg-light pt-4 pb-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-center">
          <h2 class="h4 text-center mb-5"> {{$data->process}}</h2>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="row bs-wizard" style="border-bottom:0;">
              @foreach($data->only(['step1', 'step2', 'step3', 'step4', 'step5', 'step6']) as $step)
              @if($step)
              <div class="col bs-wizard-step complete sweep-to-right">
                <div class="text-center bs-wizard-stepnum">Step {{$loop->iteration}}</div>
                <div class="progress">
                  <div class="progress-bar"></div>
                </div>
                <a href="JavaScript:void(0)" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center text-semibold">{{$step}}</div>
              </div>
              @endif
              @endforeach
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
@endif

<!--Content section -->
<div class="service-content  pt-3">
  <div class="container-fluid">
    <div class="row mt-1">
      <aside class="col-md-3">
        <div class="mt-0 bg-white  mb-3 pt-4 sticky-top textmedium-bold" id="side">
          <ul class="nav flex-md-column flex-row justify-content-between" id="sidenav">
            @if($data->section_1_heading)
            <li class="nav-item"><a href="#sec1" class="nav-link active">{{$data->section_1_heading}}</a></li>
            @endif
            @if($data->section_2_heading)
            <li class="nav-item"><a href="#sec2" class="nav-link">{{$data->section_2_heading}}</a></li>
            @endif
            @if($data->section_3_heading)
            <li class="nav-item"><a href="#sec3" class="nav-link">{{$data->section_3_heading}}</a></li>
            @endif
            @if($data->section_4_heading)
            <li class="nav-item"><a href="#sec4" class="nav-link">{{$data->section_4_heading}}</a></li>
            @endif
            @if($data->section_5_heading)
            <li class="nav-item"><a href="#sec5" class="nav-link">{{$data->section_5_heading}}</a></li>
            @endif
            
          </ul>
        </div>
      </aside>
      <div class="col-md-6">
        <div class="bg-white p-5">
          {!! $data->body !!}
          @if($data->section_1_heading)
          <div class="anchor" id="sec1"></div>
          {!! $data->section_1_body !!}
          @endif

          @if($data->section_2_heading)
          <div class="anchor" id="sec2"></div>
          {!! $data->section_2_body !!}
          @endif

          @if($data->section_3_heading)
          <div class="anchor" id="sec3"></div>
          {!! $data->section_3_body !!}
          @endif

          @if($data->section_4_heading)
          <div class="anchor" id="sec4"></div>
          {!! $data->section_4_body !!}
          @endif

          @if($data->section_5_heading)
          <div class="anchor" id="sec5"></div>
          {!! $data->section_5_body !!}
          @endif
          
        </div>
      </div>
      <aside class="col-md-3">
        <div class="mb-3 sticky-top bg-white p-3" >
            <div class="card-body bg-white radius10">
            <p class="text-center font-weight-bold h5">Want to know More  ?</p>
            <form autocomplete="off" class="form validateform" method="post" id="serviceform2">
              @csrf
              <input type="hidden" name="source" value="service">
              <input type="hidden" name="page" value="{{$data->title}}">
              <input type="hidden" name="page_id" value="{{$data->id}}">
              <input type="hidden" name="from" value="body">
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Name" required="" name="name">
              </div>
              <div class="form-group">
                <input class="form-control" type="email" placeholder="Email" required="" name="email">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Phone" required="" name="phone">
              </div>
              <div class="form-group">
                <textarea class="form-control"  placeholder="How we can help?" name="description"></textarea>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <button class="btn btn-dark  btn-block" id="submit-btn2" type="submit">Request Call back</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </aside>
    </div>
  </div>
</div>
<!--Content section  End --> 

<section class="section bg-white">
  <div class="container">
    <h2 class="font-weight-bold mb-1 h3">Why Choose us </h2>
    <div class="divider-1"> <span></span></div>
    <div class="row no-gutters">
      @foreach($wcu as $row)
      <div class="col-md-3">
        <div class="card-wchoose animated fadeInUp"> <img src="/storage/{{$row->icon}}" class="img-card" alt="customer">
          <div class="card-wchoose-footer">
            <h2 class="text-center">{{number_format($row->statistics)}} +</h2>
            <p>{{$row->name}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $("#serviceform1").validate({
      submitHandler: function(form) {
        storeformdata(form,'#submit-btn1')
      }
     });
    $("#serviceform2").validate({
      submitHandler: function(form) {
        storeformdata(form,'#submit-btn2')
      }
     });
  })
  
</script>
@endsection