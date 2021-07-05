@extends('templates.web')
@section('title', $data->seo_title)
@section('description', $data->meta_description)
@section('keywords', $data->meta_keywords)
@section('bodyData', 'data-spy=scrol data-target=#side')
@section('content')
@include('templates.header')

<!--Header form section-->
<div class="service-section overlay">
  <div class="">
    <div class="container">
      <div class="row no-gutters align-items-center">
        <div class="col-md-8 offset-md-2">
          <h2 class="text-center h3 mb-2 mt-2 text-white ">Online Trademark/Company Search</h2>
          <p class="text-center text-white">Search for more than 15 Lacs companies, 40 Lacs Trademarks in all classes registered in India.</p>
          <div class="row no-gutters">
            <div class="col-md-4">
              <select class="form-control select-radius"  name="type">
                <option value="">SELECT</option>
                <option value="company">Company</option>
                <option value="director">Director</option>
                <option value="address">Address</option>
                <option value="trademark">Trademark</option>
              </select>
            </div>
            <div class="col-md-8">
              <div class="input-group">
                <input type="text" class="form-control radius0" placeholder="Company Name, CIN">
                <div class="input-group-append">
                  <button class="btn btn-secondary" type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </div>
              </div>
            </div>
          </div>
          <p class="text-white text-center mt-2"><small>Note:-  Information is in beta phase. It is not to be used for legal purposes. If there are any discrepancies</small></p>
          <p class="mb-0 mt-3 text-center"> <a href=""><span class="badge badge-info mb-1">New Companies</span></a> <a href=""><span class="badge badge-info mb-1">Directors </span></a> <a href=""><span class="badge badge-info mb-1">Financials </span></a> <a href=""><span class="badge badge-info mb-1">Registration</span> <span class="badge badge-info mb-1">Incoming
            Notifications</span> <span class="badge badge-info mb-1">Complete India
            Data</span> </a> </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb radius-0 bg-transparent pt-3  pb-3 m-0">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{$data->title}}</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<section class="bg-light section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-center">
          <h1 class="h2 text-center main-heading">{{$data->title}}</h1>
          <p class="text-bold">{{$data->sub_heading}}</p>
        </div>
        <div class="row mt-2">
          {!! $data->body !!}
        </div>
        <div class="row mt-5">
        @foreach($data->only(['step1', 'step2', 'step3', 'step4', 'step5', 'step6']) as $step)
          @if($step)
          <div class="col-md-4">
            <div class="start-business {{ $loop->iteration%2==0?'act shadow-lg':'act1' }}">
              @if($loop->iteration%2==0)<div class="wrap"> <span class="ribbon6"> Most popular</span> </div>@endif
              <div class="start-business-header"> <span class="price-value">  INR {{number_format(($step))}}/- </span>
                <h3 class="heading"> {{ $data["section_{$loop->iteration}_heading"] }}</h3>
              </div>
              <div class="pricing-content">
                {!! $data["section_{$loop->iteration}_body"] !!}
                <a href="#" class="read">Select</a> </div>
            </div>
          </div>
          @endif
        @endforeach

        </div>
      </div>
    </div>
  </div>
</section>



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

@if($otherservices)
@include('includes.otherServices')
@endif
@include('includes.ourClients')
@if($data->posts->count()>0)
<section class="section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="font-weight-bold mb-1 h3">What's Latest in  {{$data->title}} </h2>
        <div class="divider-1"> <span></span></div>
      </div>
    </div>
    <div class="row">
      @foreach($data->posts as $lsb)
      <div class="col-12 col-sm-8 col-md-6 col-lg-4">
        <div class="card bloghome h-100">
          <div class="card-img tag-overlay"> <a href="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->slug.'/'.$lsb->slug)}}"> <img class="card-img" src="{{Voyager::image($lsb->image)}}" alt="{{$lsb->title}}"></a> <a href="{{url( __('voyager::post.post_slug').$data->category->slug)}}" class="btn btn-dark btn-sm">{{$data->category->name}}</a> </div>
          <div class="card-body pt-2">
            <h4 class="card-title"> <a href="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->slug.'/'.$lsb->slug)}}">{{$lsb->heading}}</a></h4>
            <small class="text-muted cat"> <i class="fa fa-calendar "></i> {{date('F d, Y',strtotime($lsb->publish_date))}} <span class="pull-right"> <i class="fa fa-user-o "></i> Registrationwala</span> </small>
            <a href="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->slug.'/'.$lsb->slug)}}" class="btn btn-sm btn-outline-dark  center-block w-50 mt-2">Read more</a> </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif
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