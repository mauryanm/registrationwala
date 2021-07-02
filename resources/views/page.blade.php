@extends('templates.web')
@section('title', $data->title)
@section('description', $data->meta_description)
@section('keywords', $data->meta_keywords)
@section('content')
@include('templates.header')

<!--Header form section-->
@if(Request::route()->getName()=='about-us')
{!! $data->body !!}
@else
<div class="innerpages-bg">
  <div class="container">
    <div class="row align-items-center h-100">
   
   <div class="col-md-6">
        <h1 class="h3 zindex  text-bold  largefont  mb-3">{{$data->excerpt}}</h1>
  </div>
     <div class="col-md-6">
   <img src="{{Voyager::image($data->image)}}" class="img-fluid">
  </div>
</div>
  </div>

  </div>

<div class="bg-white p-2 mt-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb radius-0 bg-transparent p-0  m-0">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{$data->excerpt}}</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="pb-5 pt-4 bg-light border-bottom">
  <div class="container mb-5"> 
    <div class="row">
      <div class="col-md-12 text-center">
       
      </div>
    </div>
  {!! $data->body !!}
  </div>
</section>
@endif
@endsection

@section('script')

@endsection