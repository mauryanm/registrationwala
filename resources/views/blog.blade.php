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
          <li class="breadcrumb-item active" aria-current="page">Blog</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<section class="bg-white pb-4">
  <div class="container">
    <div class="row">
      <div class="col-md-4" >
        @include('includes.blogCategories')
      </div>
      <div class="col-md-8 ">
        <div id="blogslider" class="carousel slide" data-ride="carousel"> 
          
          <!-- Indicators -->
          @if($data->letest)
          <ul class="carousel-indicators">
            @foreach($data->letest->take(3) as $row)
            <li data-target="#blogslider" data-slide-to="{{ $loop->iteration }}" class="{{$loop->first?'active':''}}"></li>
            @endforeach
          </ul>
          
          <!-- The slideshow -->
          <div class="carousel-inner">
            @foreach($data->letest as $row)
            <div class="carousel-item {{$loop->first?'active':''}}"> <a href="{{url( __('voyager::post.post_slug').$row->category->slug.'/'.$row->service->slug.'/'.$row->slug)}}"> <img class="d-block img-fluid" src="{{Voyager::image($row->image)}}" alt="{{$row->title}}"></a>
              <div class="carousel-caption d-none d-md-block">
                <div class="blog-content"> <a href="{{url(__('voyager::post.post_slug').$row->category->slug)}}"><span class="home-blog-tag"><i class="fa fa-star" aria-hidden="true"></i> {{$row->category->name}}</span></a>
                  <h2> <a href="{{url(__('voyager::post.post_slug').$row->category->slug.'/'.$row->service->slug.'/'.$row->slug)}}" class="text-white">{{$row->title}} </a></h2>
                  <ul class="list-inline text-white small text-left mb-0">
                    <li class="list-inline-item"><i class="fa fa-calendar" aria-hidden="true"></i> {{date('F d, Y',strtotime($row->publish_date))}}</li>
                    <li class="list-inline-item"><i class="fa fa-user-o" aria-hidden="true"></i> Registrationwala</li>
                  </ul>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          @endif
          <!-- Left and right controls --> 
          <!--              <a class="carousel-control-prev" href="#demo" data-slide="prev"> <span class="carousel-control-prev-icon"></span></a> 
<a class="carousel-control-next" href="#demo" data-slide="next"> <span class="carousel-control-next-icon"></span> </a> </div>--> 
          
          <!-- The slideshow --> 
          
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-light pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="h5 text-uppercase font-weight-bold">Latest Post </h2>
        <hr>
        <div class="row">
          <div class="col-md-8">
            <div >
              <div class="col-md-12"> </div>
              <div class="row">
                @foreach($data->letest->skip(3) as $row)

                <div class="col-md-6">
                  <div class="card blog-card shadow mb-3"> <a href="{{url( __('voyager::post.post_slug').$row->category->slug.'/'.$row->service->slug.'/'.$row->slug)}}"> <img class="card-img-top" src="{{Voyager::image($row->thumbnail('small'))}}" alt="{{$row->title}}">
                    <div class="card-body">
                      <h6 class="ellipsis">{{$row->title}}</h6>
                      <span class="badge custom-badge"><i class="fa fa-star" aria-hidden="true"></i> Latest News</span> </div>
                    <div class="card-footer">
                      <ul class="list-inline text-muted small mb-0">
                        <li class="list-inline-item"><i class="fa fa-calendar" aria-hidden="true"></i> {{date('F d, Y',strtotime($row->publish_date))}}</li>
                        <li class="list-inline-item pull-right"><i class="fa fa-user-o" aria-hidden="true"></i> Registrationwala</li>
                      </ul>
                    </div>
                    </a> </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
          <div class="col-md-4">
            @include('includes.blogSidebar')
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@foreach($categoryPost as $cp)
<section class="bg-{{ ($loop->iteration%2==0?'light':'white') }} pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="h5 text-uppercase font-weight-bold">{{$cp->name}}</h2>
        <hr>
        <div class="row">
          @foreach($cp->catposts as $post)
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5"><a href="{{url( __('voyager::post.post_slug').$post->category->slug.'/'.$post->service->slug.'/'.$post->slug)}}"><img src="{{Voyager::image($post->thumbnail('small'))}}" class="img-fluid" alt="{{$post->title}}"></a></div>
              <div class="col-md-7">
                <h6 class="ellipsis"><a href="{{url( __('voyager::post.post_slug').$post->category->slug.'/'.$post->service->slug.'/'.$post->slug)}}">{{$post->title}}</a></h6>
                <a href="{{url( __('voyager::post.post_slug').$post->category->slug.'/'.$post->service->slug)}}"> <span class="badge custom-badge"><i class="fa fa-star" aria-hidden="true"></i> {{$post->service->title}} </span></a>
                <p class="mb-0 ellipsis1" >{{$post->excerpt}}</p>
                <ul class="list-inline text-muted small mb-0 mt-1">
                  <li class="list-inline-item"><i class="fa fa-calendar" aria-hidden="true"></i>  {{date('F d, Y',strtotime($post->publish_date))}}</li>
                  <li class="list-inline-item pull-right"><i class="fa fa-user-o" aria-hidden="true"></i> Registrationwala</li>
                </ul>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach
@endsection

@section('script')

@endsection