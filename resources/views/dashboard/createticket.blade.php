@extends('templates.dashboard')
@section('title', "Create Ticket | ".\Auth::user()->name )
@section('description', "Create Ticket")
@section('keywords', "Create Ticket")
@section('content')
@include('dashboard.includes.header')
@include('dashboard.includes.error')
<div class="container-fluid bg-light">
    <div class="container">
       <ol class="breadcrumb bg-transparent mb-0">
          <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">User profile</a></li>
          <li class="breadcrumb-item "> <a href="{{ url('/dashboard/service-request') }}">My Request</a> </li>
          <li class="breadcrumb-item active"> Raise Ticket</li>
       </ol>
    </div>
 </div>
 <section class="pt-5 pb-5 dashboadbg">
    <div class="container">
       <div class="row">
        @include('dashboard.includes.sidebar')
          <div class="col-12 col-md-8 d-flex">
             <div class="tabs-section-nav user_sidebarbox p-3 pt-0 w-100 align-items-stretch">
                <form method="post" action="{{ route('dashboard.create-ticket.store') }}">
                    @csrf
                    <h5 >Raise  Ticket</h5>
                    <hr>
                    <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <label >Subject</label>
                            <input type="text" class="form-control" name="subject" required>              
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <label >Enter your Query</label>
                            <textarea class="form-control " rows="4" name="query" required></textarea>
                        </div>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-sm-6 offset-sm-6">
                        <button type="submit" class="btn  w-50 btn-secondary btn-sm pull-right">Submit</button>
                    </div>
                    </div>
                </form>
                @if($tickets)
                <h5>Generated Ticket</h5>
                <div class="tablescroll" style="max-height: 182px; overflow-y:auto;">
                    <table class="table table-sm table-striped table-hover table-condensed">
                        <thead>
                            <tr><th>Ticket Number</th><th>Subject</th><th>Query</th></tr>
                        </thead>
                        <tbody>
                        @foreach ($tickets as $tkt)
                        <tr><td>RWT{{ sprintf("%'05d", $tkt->id) }}</td><td>{{ $tkt->subject }}</td><td>{!! $tkt->query !!}</td></tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
             </div>
          </div>
       </div>
    </div>
 </section>

  @include('dashboard.includes.footer')
 @endsection