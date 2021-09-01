@extends('amp.amp')
@section('content')
<main id="content" role="main">

<section class="p2">
  <ul class="list-reset m0">
  <li  class="inline-block"><a href="{{url('amp')}}" >Home</a></li>
  <li class="inline-block">/</li>
 <li class="inline-block "> <a href="{{url('amp/'. __('voyager::post.post_slug'))}}">{{__('voyager::post.post_title')}}</a></li> 
   <li class="inline-block">/</li>
 <li class="inline-block ">{{$categoryPost->name}}</li> 
  </ul>
  </section>
  <div class="dotted-line"></div>
  <section class=" p2 ">
     <h4 class=" h3 justify-center center bold mb2">{{$categoryPost->name}}</h4>
     @foreach($categoryPost->postservices as $sp)
     <h5 class="h4 bold text-center mb2">{{$sp->title}}</h5>
     @foreach($sp->posts as $post)
   <div class="dotted-line mt3"></div>
   <article > <a href="{{url('amp/'. __('voyager::post.post_slug').$categoryPost->slug.'/'.$sp->slug)}}" class=""> <span class="tag">{{$sp->title}}</span></a>
      <h2 class="mb1 h4"> <a href="{{url('amp/'. __('voyager::post.post_slug').$categoryPost->slug.'/'.$sp->slug.'/'.$post->slug)}}" class="text-decoration-none">{{$post->title}}</a></h2>
      <!-- Start byline -->
      <address class="ampstart-byline clearfix mb1  h5">
      <time class="ampstart-byline-pubdate block bold my1"
              datetime="2016-12-13"> {{date('F d, Y',strtotime($post->publish_date))}}</time>
      <div>Registrationwala</div>
      </address>
      <!-- End byline --> 
      <a href="{{url('amp/'. __('voyager::post.post_slug').$categoryPost->slug.'/'.$sp->slug.'/'.$post->slug)}}">
      <amp-img
            src="{{Voyager::image($post->thumbnail('medium'))}}"
            width="1280"
            height="853"
            layout="responsive"
            alt="{{$post->title}}"
            class=""
          ></amp-img>
      </a>

   </article>
   @endforeach
   <a href="{{url('amp/'. __('voyager::post.post_slug').$categoryPost->slug.'/'.$sp->slug)}}" class="bluebtn mb3 ampstart-btn block text-center mt2"> View all </a>
   @endforeach
  </section>
   @include('amp.blog.mainCategory')
   @include('amp.blog.blogSidebar')
</main>
@endsection