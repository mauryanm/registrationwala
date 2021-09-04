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
          <li class="breadcrumb-item"><a href="{{url( __('voyager::post.post_slug').$catData->category->slug)}}"> {{$catData->category->name}}</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{$catData->title}}</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<section class="bg-white pt-3 pb-5 border-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="h5 text-uppercase font-weight-bold">{{$catData->title}}</h2>
        <hr class="mt-1">
        <div class="row">
          <div class="col-md-8">
            @foreach($posts as $post)
            <div class="bg-light mb-3">
              <div class="row no-gutters">
                <div class="col-md-5"><a href="{{url( __('voyager::post.post_slug').$catData->category->slug.'/'.$catData->slug.'/'.$post->slug)}}"><img src="{{Voyager::image($post->thumbnail('medium'))}}" class="img-fluid border" alt="{{$post->title}}"></a></div>
                <div class="col-md-7">
                  <div class="p-3">
                    <h6 class="ellipsis"><a href="{{url( __('voyager::post.post_slug').$catData->category->slug.'/'.$catData->slug.'/'.$post->slug)}}">{{$post->title}}</a></h6>
                    <a href="#"> <span class="badge custom-badge"><i class="fa fa-star" aria-hidden="true"></i> {{$catData->title}}</span></a>
                    <div class="mb-0 ellipsis1" >{!! limithtml($post->body,200) !!}</div>
                    <ul class="list-inline text-muted small mb-0 mt-1">
                      <li class="list-inline-item"><i class="fa fa-calendar" aria-hidden="true"></i> {{date('F d, Y',strtotime($post->publish_date))}}</li>
                      <li class="list-inline-item pull-right"><i class="fa fa-user-o" aria-hidden="true"></i> Registrationwala</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            <div class="d-flex justify-content-center mt-5">
              {{ $posts->links('pagination::bootstrap-4') }}
            </div>
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