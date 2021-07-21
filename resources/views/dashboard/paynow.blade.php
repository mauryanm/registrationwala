@extends('templates.dashboard')
@section('title', "Service Request | ".\Auth::user()->name )
@section('description', "Service Request")
@section('keywords', "Service Request")
@section('content')
@include('dashboard.includes.header')
<div class="container-fluid bg-light">
  <div class="container">
    <ol class="breadcrumb bg-transparent mb-0">
      <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">User profile</a></li>
      <li class="breadcrumb-item "> <a href="{{ url('/dashboard/service-request') }}">My Request</a> </li>
      <li class="breadcrumb-item active"> Pay Now</li>
    </ol>
  </div>
</div>
<section class="pt-5 pb-5 dashboadbg">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 text-right"> </div>
    </div>
    <div class="row">
      @include('dashboard.includes.sidebar')
      <div class="col-12 col-md-8 d-flex">
        <div class="tabs-section-nav user_sidebarbox p-3 pt-0 w-100 align-items-stretch">
          <h5 >Pay Now</h5>
          <hr class="mb-0">  
          <div class="bg-light p-4 pb-5">
            <!-- <div class="row">
              <div class="col-12 col-md-6 offset-md-3 text-center mt-4">
                <div class="form-group">
                  <label class=""><strong>Enter Amount you wish to pay</strong></label>
                  <input type="text" class="form-control" value="">
                </div>
              </div>
              <div class="col-12 col-md-6 offset-md-3 text-center">
                <button type="submit" class="btn btn-secondary w-50  btn-sm">Pay Now</button>
              </div>
            </div> -->
            <div class="heading">Comming Soon....</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  @include('dashboard.includes.footer')
 @endsection