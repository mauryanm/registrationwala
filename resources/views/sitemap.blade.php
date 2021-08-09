@extends('templates.web')
@section('title', 'Sitemap - Registrationwala')
@section('description', 'Sitemap')
@section('keywords', 'sitemap')
@section('content')
@include('templates.header')


<div class="bg-light p-2 mt-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb radius-0 bg-transparent p-0  m-0">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Sitemap</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<section class="pb-5 bg-light border-bottom">
  <div class="container sitemap_warper">       
  {{menu('Frontend')}}
  </div>
</section>



@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $("#contactusform").validate({
      submitHandler: function(form) {
        storeformdata(form,'#submit-btn')
      }
     });
  })
  
</script>
@endsection