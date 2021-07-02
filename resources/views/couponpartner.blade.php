@extends('templates.web')
@section('title', "Registrationwala - Company Registration,Trademark Registration")
@section('description', "Registrationwala - Company Registration,Trademark Registration")
@section('keywords', "")
@section('content')
@include('templates.header')

<!--Header form section-->
<div class="service-section overlay pb-5">
  <div class="mt-5 mb-5">
  </div>
</div>


<div class=" bg-light p-2 mt-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb radius-0 bg-transparent p-0  m-0">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Our Coupon Partners</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="bg-light pb-5  border-bottom">
  <div class="container">
    <div class="row">     
      <div class="col-md-12">
        <div class="p-5">
          <h1 class="h3 zindex  text-bold text-center  mb-1  ">Our Coupon Partners</h1>
           <p class="text-center">Registrationwala Coupons and Deals</p>
        </div>
      </div>
    </div>
    <div class="row"> 
    @foreach($data as $row)       
      <div class="col-sm-3 col-md-3 text-center">
        <div class="border mb-3 mb-lg-5 mb-md-4 mb-sm-4 shadoweffect bg-white">
          <a href="{{$row->url}}" target="_blank"> <img src="{{Voyager::image($row->image)}}" class="img-fluid">
          <p class="text-semibold "><small class="text-muted mb-2"> View details  <i class="fa fa-angle-double-right" aria-hidden="true"></i> </small></p>
          </a>
        </div>
      </div>
    @endforeach 
    </div>
  </div>
</section>
@endsection

@section('script')

@endsection