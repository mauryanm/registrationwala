@extends('templates.web')
@section('title', $data->seo_title)
@section('description', $data->meta_description)
@section('keywords', $data->meta_keywords)
@section('content')
@include('templates.header')
<div class="bg-light p-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb radius-0 bg-transparent p-0  m-0">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url( __('voyager::post.post_slug'))}}">{{__('voyager::post.post_title')}}</a></li>
          <li class="breadcrumb-item"><a href="{{url( __('voyager::post.post_slug').$data->category->slug)}}"> {{$data->category->name}}</a></li>
          <li class="breadcrumb-item"><a href="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->service->slug)}}">{{$data->service->title}}</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{$data->title}}</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<section class="bg-white pb-4">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ">
        <h1 class="font-weight-bold h3 mt-3 mb-2 font-weight-bold">{{$data->title}}</h1>
        <ul class="list-inline  small text-left mb-3">
          <li class="list-inline-item"><i class="fa fa-calendar" aria-hidden="true"></i> {{date('F d, Y',strtotime($data->created_at))}}</li>
          <li class="list-inline-item"><i class="fa fa-user-o" aria-hidden="true"></i> Registrationwala</li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 ">
        <div id="blog-slider"> 
          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active"> <img class="d-block  border img-fluid" src="{{Voyager::image($data->image)}}" alt="{{$data->title}}">
                <div class="blog-content"> <a href="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->service->slug)}}"><span class="home-blog-tag"><i class="fa fa-star" aria-hidden="true"></i> {{$data->service->title}}</span> </a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4" >
      @include('includes.blogCategories')
      </div>
    </div>
  </div>
</section>

<section class="bg-light pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      
      {!! $data->body !!} 
   
   <hr>
   <div class="row">
   <div class="col-md-6"><span class="badge badge-info"><i class="fa fa-eye" aria-hidden="true"></i> <strong>120 Views</strong></span></div>
      <div class="col-md-6"><ul class="list-inline text-center text-md-right mb-0">
            
            <li class="list-inline-item mr-2"><strong>Share This Post</strong></li>
            <li class="list-inline-item"><a href="http://www.facebook.com/sharer.php?u={{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->service->slug.'/'.$data->slug)}}&p[title]={{$data->title}}" onclick="window.open(this.href, 'windowName', 'width=600, height=400, left=24, top=24, scrollbars, resizable'); return false;" rel="nofollow" target="_blank"><i class="fa wp-icon fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa wp-icon fa-youtube "></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa wp-icon fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa wp-icon fa-linkedin"></i></a></li>
          </ul>
        </div>
   </div>      
  </div>
</div>
</div>
</section>
<div class="section bg-white border-bottom ">
<div class="container">
<div id="disqus_thread"></div>
@endsection

@section('script')
<script type="text/javascript">
  (function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://registrationwala.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection