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
          <li class="breadcrumb-item"><a href="{{url( __('voyager::post.post_slug'))}}">Blog</a></li>
          <li class="breadcrumb-item active" aria-current="page"> {{$categoryPost->name}}</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<section class="bg-white pt-3 pb-5 border-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="h5 text-uppercase font-weight-bold">{{$categoryPost->name}}</h2>
        <hr class="mt-1">
        <div class="row">
          <div class="col-md-8">
            @foreach($categoryPost->services as $sp)
            <h3 class="h6 text-uppercase font-weight-bold"> {{$sp->title}} </h3>
            @foreach($sp->posts as $post)
            <div class="bg-light mb-3">
              <div class="row no-gutters">
                <div class="col-md-5"><a href="{{url( __('voyager::post.post_slug').$categoryPost->slug.'/'.$sp->slug.'/'.$post->slug)}}"><img src="{{Voyager::image($post->thumbnail('medium'))}}" class="img-fluid border" alt="{{$post->title}}"></a></div>
                <div class="col-md-7">
                  <div class="p-3">
                    <h6 class="ellipsis"><a href="{{url( __('voyager::post.post_slug').$categoryPost->slug.'/'.$sp->slug.'/'.$post->slug)}}">{{$post->title}}</a></h6>
                    <a href="{{url( __('voyager::post.post_slug').$categoryPost->slug.'/'.$sp->slug)}}"> <span class="badge custom-badge"><i class="fa fa-star" aria-hidden="true"></i>  {{$sp->title}} </span></a>
                    <p class="mb-0 mt-1 ellipsis2 text-justify" >{{$post->excerpt}}</p>

                    <ul class="list-inline text-muted small mb-0 mt-1">
                      <li class="list-inline-item"><i class="fa fa-calendar" aria-hidden="true"></i> {{date('F d, Y',strtotime($post->publish_date))}}</li>
                      <li class="list-inline-item pull-right"><i class="fa fa-user-o" aria-hidden="true"></i> Registrationwala</li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
            @endforeach

            <div class="row">
              <div class="col-md-4 offset-md-8 text-right"><a href="{{url( __('voyager::post.post_slug').$categoryPost->slug.'/'.$sp->slug)}}" class="cbtn btn-4  mb-3 text-white"><i class="fa fa-chevron-right" aria-hidden="true"></i> View All</a></div>
            </div>
            @if(!$loop->last)
            <hr>
            @endif
            @endforeach

          </div>
          <div class="col-md-4">
            @include('includes.blogCategories')
            @include('includes.blogSidebar')
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('script')

@endsection