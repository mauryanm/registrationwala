@extends('templates.dashboard')
@section('title', "Service Request | ".\Auth::user()->name )
@section('description', "Service Request")
@section('keywords', "Service Request")
@section('content')
@include('dashboard.includes.header')
<div class="container-fluid bg-light border-top">
    <div class="container">
      <ol class="breadcrumb bg-transparent mb-0">
        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">User profile</a></li>
        <li class="breadcrumb-item  active">My Request</li>
      </ol>
    </div>
  </div>
  <section class="pt-5 pb-5 dashboadbg">
    <div class="container">
      <div class="row">
        @include('dashboard.includes.sidebar')
        <div class="col-12 col-md-8 d-flex">
          <div class="tabs-section-nav user_sidebarbox p-3 pt-0 w-100 align-items-stretch">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-12">
                <h5 class="pb-2">My Request for: Company Registration	</h5>
                <table class="w-100 table-bordered table table-striped request-table">
                 <thead>
                    <tr>
                      <th scope="col" class="text-bold">Service Name</th>
                      <th scope="col" class="text-bold">Service Manager</th>
                      <th scope="col" class="text-bold">Service Manager's Contact no </th>
                      <th scope="col" class="text-bold">Status </th>
                    </tr>
              </thead>
                  <tbody>
                      @foreach ($services as $lead)
                    <tr>
                      <td>{{ $lead->service->title }} </td>
                      <td>Dushyant Sharma</td>
                      <td>+91-9810602899</td>
                      <td>Inprogress </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('dashboard.includes.footer')
 @endsection