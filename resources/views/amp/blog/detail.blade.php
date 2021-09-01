@extends('amp.amp')
@section('content')
<main id="content" role="main">
<section class="mt3 ">
      <amp-img
         src="{{Voyager::image($data->image)}}"
         width="1280"
         height="853"
         layout="responsive"
         alt="{{$data->title}}"
         class=""
         ></amp-img>
</section>
<section class="p2 ">
   <ul class="list-reset m0">
      <li  class="inline-block"><a href="{{url('amp')}}">Home</a></li>
      <li class="inline-block">/</li>
      <li class="inline-block "> <a href="{{url('amp/'. __('voyager::post.post_slug'))}}">{{__('voyager::post.post_title')}}</a></li>
      <li class="inline-block">/</li>
      <li class="inline-block "> <a href="{{url('amp/'. __('voyager::post.post_slug').$data->category->slug)}}">{{$data->category->name}}</a></li>
      <li class="inline-block">/</li>
      <li class="inline-block "> <a href="{{url('amp/'. __('voyager::post.post_slug').$data->category->slug.'/'.$data->service->slug)}}">{{$data->service->title}}</a></li>
      <li class="inline-block">/</li>
      <li class="inline-block ">{{$data->title}}</li>
   </ul>
   <a href="{{url('amp/'. __('voyager::post.post_slug').$data->category->slug.'/'.$data->service->slug)}}" class=""> <span class="tag">{{$data->service->title}}</span></a>
   <h2 class="mb1 h4 text-decoration-none bold text-justify"> {{$data->title}}</h2>
   <!-- Start byline -->
   <address class="ampstart-byline clearfix mb1  h5">
      <time class="ampstart-byline-pubdate block bold my1"
         datetime="2016-12-13"> {{date('F d, Y',strtotime($data->publish_date))}}</time>
      <div>Registrationwala</div>
   </address>
   {!! $data->body !!}
   <ul class="list-reset flex  m0 mb0 mt3  h4">
      <li class="view">
         <span class="views mr1">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
               <path d="M15 12c0 1.654-1.346 3-3 3s-3-1.346-3-3 1.346-3 3-3 3 1.346 3 3zm9-.449s-4.252 8.449-11.985 8.449c-7.18 0-12.015-8.449-12.015-8.449s4.446-7.551 12.015-7.551c7.694 0 11.985 7.551 11.985 7.551zm-7 .449c0-2.757-2.243-5-5-5s-5 2.243-5 5 2.243 5 5 5 5-2.243 5-5z"/>
            </svg>
            {{$data->hits}} views
         </span>
      </li>
      <li class="mr1">
         Share This Post 
      </li>
      <li>
         <amp-social-share
            type="facebook"
            width="30"
            height="30"
            data-param-app_id="536176547433653"
            data-param-text="{{$data->title}}"
            data-param-url="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->service->slug.'/'.$data->slug)}}"
            data-param-media="[{{Voyager::image($data->image)}}]"
            aria-label="Share on facebook"
            ></amp-social-share>
      </li>
      <li>
         <amp-social-share
            type="twitter"
            width="30"
            height="30"
            data-param-media="{{Voyager::image($data->image)}}"
            data-param-text="{{$data->title}}"
            data-param-url="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->service->slug.'/'.$data->slug)}}"
            aria-label="Share on Twitter"
            ></amp-social-share>
      </li>
      <li>
         <amp-social-share
            type="linkedin"
            width="30"
            height="30"
            data-param-text="{{$data->title}}"
            data-param-media="{{Voyager::image($data->image)}}"
            data-param-url="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->service->slug.'/'.$data->slug)}}"
            aria-label="Share on LinkedIn"
            ></amp-social-share>
      </li>
   </ul>
   </article>
</section>
   @include('amp.blog.mainCategory')
   @include('amp.blog.blogSidebar')
</main>
@endsection