@extends('templates.web')
@section('title', 'Our Videos - Registrationwala Videos')
@section('description', 'Check out our vast video collection. Through youtube videos, Registrationwala aims to educate you about business licenses.')
@section('keywords', 'Videos')
@section('content')
@include('templates.header')

<!--Header form section-->
<section class="bg-white mb-0"> <img src="images/VIDEO-PAGE-banner.jpg" class="img-fluid"> </section>
<div class="bg-light p-2 mt-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb radius-0 bg-transparent p-0  m-0">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Videos</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="pb-5 pt-2 bg-white">
  <div class="container">
<div class="row">
      <div class="col-md-12 text-center">
        <div class="contentbg">Our video gallery</div>
        <h1 class="h3 zindex  text-bold text-center mb-1">Our video gallery</h1>
        <h6 class="text-center mb-5"> Checkout Our Videos to learn about Different Business Licenses</h6>
      </div>
    </div>
</div>
<div class="bg-light pt-5 pb-5">
  <div class="container">
  
  
  <div class="row">
      <div class="col-md-6">
        <div class="mb-5">
           <label class="font-weight-bold">Search Videos</label>

              <div class="input-group">
                <input type="text" class="form-control radius0" placeholder="Search">
                <div class="input-group-append">
                  <button class="btn btn-secondary" type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </div>
              </div>
              <p class="mb-0 mt-1"> <span class="text-muted mb-1">Popular searches:</span> <a href="#"><span class="badge badge-info mb-1">FFMC License</span></a> <a href=""><span class="badge badge-info mb-1">IP 1 License </span></a> <a href=""><span class="badge badge-info mb-1">ISP License </span></a> <a href=""><span class="badge badge-info mb-1">VNO License</span></a>  </p>
          
        </div>
      </div>
      
      
            <div class="col-md-3">

      
      <div class="form-group">
  <label class="font-weight-bold">Category</label>
  <select class="form-control" >
    <option value="All">All </option>
    <option value="AYUSH License ">AYUSH License </option>
    <option value="BIS Certificate ">BIS Certificate  </option>
    <option value="EPR Registration ">EPR Registration </option>
    <option value=" BEE Certification"> BEE Certification </option>
  </select>
</div>
      
      </div>
      <div class="col-md-3">

      
      <div class="form-group">
  <label class="font-weight-bold">Archives</label>
  <select class="form-control" id="sel1">
    <option>2021</option>
    <option>2020</option>
    <option>2019</option>
    <option>2018</option>
  </select>
</div>
      
      </div>
      
    </div>

  
  
    <div class="row">
      @foreach($data['items'] as $item)
      @if(isset($item['id']['videoId']))
      <div class="col-md-4">
      <div class="embed-responsive radius20 border embed-responsive-16by9"><iframe allowfullscreen="" class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe></div>
      <div class="p-2 ">
      <h2 class="h6 ">{{$item['snippet']['title']}}</h2>
      <p class="text-justify">{{$item['snippet']['description']}}</p>
      </div>
    </div>
    @endif
    @endforeach
    </div>
   </div>   
  </div>   
    <!-- <ul class="pagination justify-content-center mt-5">
      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
      <li class="page-item active"><a class="page-link" href="#">1</a></li>
      <li class="page-item "><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul> -->
    

</section>

@endsection

@section('script')

@endsection