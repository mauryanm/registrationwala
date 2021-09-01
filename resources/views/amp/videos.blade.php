@extends('amp.amp')
@section('title', 'Our Videos - Registrationwala Videos')
@section('description', 'Check out our vast video collection. Through youtube videos, Registrationwala aims to educate you about business licenses.')
@section('keywords', 'Videos')
@section('content')
<main id="content" role="main">
   <article>
      <header class="bgimg-video">
         <div class="ampstart-card max-width-4 pt2 pb4 ">
            <h4 class="block  text-center bold text-white h3 bold">Our video gallery</h4>
            <p class=" text-center text-white mb2">Checkout Our Videos to learn about Different Business Licenses</p>
         </div>
      </header>
   </article>
   <section class="p2">
      <ul class="list-reset m0">
         <li  class="inline-block"><a href="#">Home</a></li>
         <li class="inline-block">/</li>
         <li class="inline-block "> Videos</li>
      </ul>
   </section>
   <section class="p2">
    @foreach($data['items'] as $item)
      @if(isset($item['id']['videoId']))
      <amp-youtube data-videoid="{{$item['id']['videoId']}}"  layout="responsive" width="480" height="270"></amp-youtube>
      <p class="text-center bold">{{$item['snippet']['title']}}</p>
      <div class="dotted-line mt2 mb2"></div>
      @endif
    @endforeach
      
   </section>
   <!-- <section class="text-center">
      <div class="pagination text-center">
         <a href="#">«</a>
         <a href="#">1</a>
         <a href="#" class="active">2</a>
         <a href="#">3</a>
         <a href="#">4</a>
         <a href="#">5</a>
         <a href="#">6</a>
         <a href="#">»</a>
      </div>
   </section> -->
   <div class="dotted-line mt2 mb2"></div>
   <div class="ampstart-card  pt2">
      <form id="subscribeform" action-xhr="/lead-form" target="_top" method="post" class="p0 m0 px3 mb4" on=submit-success:subscribeform.clear>
      @csrf
      <input type="hidden" name="source" value="subscribe">
      <input type="hidden" name="name" value="subscriber">
      <input type="hidden" name="page" value="{{url()->current()}}">
      <input type="hidden" name="type" value="amp">
       <fieldset class="border-none p0 m0">
          <h2 class="block mb4 h4 bold">Subscribe
             to our newsletter
          </h2>
          <!-- Start Input -->
          <div class="ampstart-input inline-block relative m0 p0 mb3">
             <input type="email" value="" name="email"
                id="emailid"
                class="block border-none p0 m0"
                placeholder="Email"
                required="" 
                />
             <label
                for="emailid"
                class="absolute top-0 right-0 bottom-0 left-0"
                aria-hidden="true"
                >Email</label
                >
          </div>
          <!-- End Input--> 
          <!-- Start Submit -->
          <input
             type="submit"
             name="submit"
             value="SUBMIT"
             id="submit"
             class="ampstart-btn mb3 ampstart-btn-secondary"
             />
          <!-- End Submit -->
       </fieldset>
       <div class="pb-2" submit-success>
        <template type="amp-mustache">
          Thank you for subscribing Registrationwala.
        </template>
      </div>
      <div class="pb-2" submit-error>
        <template type="amp-mustache">
          Error! Some thing went wrong please try again.
        </template>
      </div>
    </form>
   </div>
</main>
@endsection