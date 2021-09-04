@extends('amp.amp')
@section('title', $document->meta_title)
@section('description', $document->meta_description)
@section('keywords', $document->meta_keywords)
@section('content')
<main id="content" role="main">
   <article>
      <header class="bgimg">
      </header>
   </article>
   <ul class="list-reset p2">
      <li  class="inline-block"><a href="{{url('amp')}}">Home</a></li>
      <li class="inline-block">/</li>
      <li class="inline-block "> 
         <a href="{{url('amp/legal-docs')}}">Legal Document</a>
      </li>
      <li class="inline-block">/</li>
      <li class="inline-block "> 
         {{$document->title}}
      </li>
   </ul>
   <div class="dotted-line"></div>
   
   <section class=" mt3 p2 ">
      @if($document->docdetail)
      <div class="center">
         {!! $document->body !!}
         <amp-img src="{{Voyager::image($document->image)}}" width="200" height="300" alt="{{$document->title}}"></amp-img>
      </div>
      <div class="center mt2">
         <a href="{{url('legal-docs/'.$document->slug.'/edit')}}" class="bluebtn mb3 ampstart-btn    col-6">
            <svg width="24" height="24" fill="#fff" id="Layer_1" style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
               <path d="M19.607,18.746c0,0.881-0.716,1.624-1.597,1.624H5.231c-0.881,0-1.597-0.743-1.597-1.624V5.967  c0-0.881,0.716-1.571,1.597-1.571h7.454V3.332H5.231c-1.468,0-2.662,1.168-2.662,2.636v12.778c0,1.468,1.194,2.688,2.662,2.688  h12.778c1.468,0,2.662-1.221,2.662-2.688v-7.428h-1.065V18.746z"/>
               <path d="M20.807,3.17c-0.804-0.805-2.207-0.805-3.012,0l-7.143,7.143c-0.068,0.068-0.117,0.154-0.14,0.247L9.76,13.571  c-0.045,0.181,0.008,0.373,0.14,0.506c0.101,0.101,0.237,0.156,0.376,0.156c0.043,0,0.086-0.005,0.129-0.016l3.012-0.753  c0.094-0.023,0.179-0.072,0.247-0.14l7.143-7.143c0.402-0.402,0.624-0.937,0.624-1.506S21.21,3.572,20.807,3.17z M13.016,12.467  l-2.008,0.502l0.502-2.008l5.909-5.909l1.506,1.506L13.016,12.467z M20.054,5.428l-0.376,0.376l-1.506-1.506l0.376-0.376  c0.402-0.402,1.104-0.402,1.506,0c0.201,0.201,0.312,0.468,0.312,0.753C20.366,4.96,20.255,5.227,20.054,5.428z"/>
            </svg>
            Edit
         </a>
      </div>
      @endif
      @if(json_decode($document->documents) !== null)
      @foreach(collect(json_decode($document->documents))->sortBy('original_name') as $file)
      <div class="dotted-line"></div>
      <div class="flex  justify-center center mt2 mb2">
         <div class="flex-auto"> 
            <a href="{{url('/download/'.encrypt($file->download_link))}}"> 
               <amp-img src="https://www.registrationwala.com/storage/images/document-management.png" width="100" height="100" layout="fixed"></amp-img>
               <p>{{ str_replace('.pdf','',$file->original_name) }}</p>
            </a>
         </div>
         <div class="flex-auto">
            <a href="{{url('/download/'.encrypt($file->download_link))}}"> 
               <amp-img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl={{urlencode(url('/download/'.encrypt($file->download_link)))}}&choe=UTF-8" width="100" height="100" layout="fixed"></amp-img>
               <p>Download</p>
            </a>
         </div>
      </div>
      @endforeach
      @endif
  
   </section>
   


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