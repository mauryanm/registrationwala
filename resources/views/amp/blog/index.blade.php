@extends('amp.amp')
@section('content')
<main id="content" role="main">
   <article class="p2">
      <amp-carousel class="carousel1" layout="responsive" height="520" width="500" type="slides">
         @foreach($data->letest->take(3) as $row)
         <div class="slide">
            <a href="{{url('amp/'. __('voyager::post.post_slug').$row->category->slug.'/'.$row->service->slug.'/'.$row->slug)}}">
               <amp-img src="{{Voyager::image($row->image)}}" layout="responsive" width="500" height="300" alt="{{$row->title}}"></amp-img>
            </a>
            <amp-fit-text layout="responsive" width="500" height="220">
               <a href="{{url('amp/'.__('voyager::post.post_slug').$row->category->slug)}}" class=""> <span class="tag"> {{$row->category->name}}</span></a>
               <h2 class="mb1 h4 mt0"> <a href="{{url('amp/'. __('voyager::post.post_slug').$row->category->slug.'/'.$row->service->slug.'/'.$row->slug)}}" class="text-decoration-none"> {{$row->title}}</a>
               </h2>
               <address class="ampstart-byline clearfix mb1  h5">
                  <time class="ampstart-byline-pubdate block bold my1"
                     datetime="2016-12-13"> {{date('F d, Y',strtotime($row->publish_date))}}</time>
                  <div>Registrationwala</div>
               </address>
            </amp-fit-text>
         </div>
         @endforeach
      </amp-carousel>
   </article>
   <section class="p2">
      <ul class="list-reset ">
         <li  class="inline-block"><a href="#">Home</a></li>
         <li class="inline-block">/</li>
         <li class="inline-block "> FFMC License</li>
      </ul>
   </section>
   @include('amp.blog.mainCategory')
   <div class="dotted-line mt2 mb2"></div>
   <section class=" mt3 p2 ">
      <h4 class=" h3 justify-center center bold mb2"> Latest Post </h4>
      @foreach($data->letest->skip(3) as $row)
      <div class="dotted-line mt3"></div>
      <article >
         <a href="{{url('amp/'. __('voyager::post.post_slug').$row->category->slug.'/'.$row->service->slug)}}" class=""> <span class="tag">{{$row->service->title}}</span></a>
         <h2 class="mb1 h4"> <a href="{{url('amp/'. __('voyager::post.post_slug').$row->category->slug.'/'.$row->service->slug.'/'.$row->slug)}}" class="text-decoration-none"> {{$row->title}}</a></h2>
         <!-- Start byline -->
         <address class="ampstart-byline clearfix mb1  h5">
            <time class="ampstart-byline-pubdate block bold my1"
               datetime="2016-12-13"> {{date('F d, Y',strtotime($row->publish_date))}}</time>
            <div>Registrationwala</div>
         </address>
         <!-- End byline --> 
         <a href="{{url('amp/'. __('voyager::post.post_slug').$row->category->slug.'/'.$row->service->slug.'/'.$row->slug)}}">
            <amp-img
               src="{{Voyager::image($row->thumbnail('medium'))}}"
               width="1280"
               height="853"
               layout="responsive"
               alt="{{$row->title}}"
               class=""
               ></amp-img>
         </a>
         <div class="text-center">
            <a href="{{url('amp/'. __('voyager::post.post_slug').$row->category->slug.'/'.$row->service->slug.'/'.$row->slug)}}" class="ampstart-btn right-align radius10 ">Read more</a> 
         </div>
      </article>
      @endforeach
   </section>
   @foreach($categoryPost as $cp)
   <section class="mt3 p2 ">
      <h4 class=" h3 justify-center center bold mb2">{{$cp->name}}</h4>
      @foreach($cp->catposts as $post)
      <div class="dotted-line mt3"></div>
      <article >
         <a href="{{url('amp/'. __('voyager::post.post_slug').$post->category->slug.'/'.$post->service->slug)}}" class=""> <span class="tag">{{$post->service->title}}</span></a>
         <h2 class="mb1 h4"> <a href="{{url('amp/'. __('voyager::post.post_slug').$post->category->slug.'/'.$post->service->slug.'/'.$post->slug)}}" class="text-decoration-none"> {{$post->title}}</a></h2>
         <!-- Start byline -->
         <address class="ampstart-byline clearfix mb1  h5">
            <time class="ampstart-byline-pubdate block bold my1"
               datetime="2016-12-13"> {{date('F d, Y',strtotime($post->publish_date))}}</time>
            <div>Registrationwala</div>
         </address>
         <!-- End byline --> 
         <a href="{{url('amp/'. __('voyager::post.post_slug').$post->category->slug.'/'.$post->service->slug.'/'.$post->slug)}}">
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
      <a href="{{url('amp/'. __('voyager::post.post_slug').$post->category->slug.'/'.$post->service->slug)}}" class="bluebtn mb3 ampstart-btn block text-center mt2"> View all </a>
      <div class="dotted-line mt3 mb3"></div>
   </section>
   @endforeach
   @include('amp.blog.blogSidebar')
</main>
@endsection