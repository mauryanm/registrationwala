@extends('amp.amp')
@section('title', "Create Free Online Legal Documents or Forms in India - Registrationwala.com")
@section('description', "Free legal documents download online. You can download agreements, forms, letter, templates or certificate formats in Doc or in PDF form.")
@section('keywords', "legal documents, free legal documents, examples of legal documents, list of legal documents, legal documents free downloads, legal documents format in doc, legal documents format in pdf, legal forms, free legal forms, legal forms online, legal documents online, legal document templates, legal documents online, legal docs, legal forms free, online legal documents, online legal forms, free legal forms online, legal documents for free, legal forms free download, free legal documents online")
@section('content')
<main id="content" role="main">
   <article>
      <header class="bgimg">
         <div class="ampstart-card max-width-4 pt2 pb4  bgimg-color-service">
            <h4 class="block  text-center bold text-white">Legal Documents</h4>
            <p class=" text-center text-white mb2">Get Your Legal Documentation Sorted in Minutes</p>
         </div>
      </header>
   </article>
   <ul class="list-reset ">
      <li  class="inline-block"><a href="{{url('amp')}}">Home</a></li>
      <li class="inline-block">/</li>
      <li class="inline-block "> 
         Legal Document
      </li>
   </ul>
   <amp-accordion class="accordion" animate>
      @foreach($doccat as $dwc)
      <section {{$loop->first?'expanded':''}}>
         <h4 class="menu h4 bold p2 ">{{$dwc->title}}</h4>
         <div class="light-border p2">
            <ul class="list-reset ">
               @forelse($dwc->docs as $doc)
               <li  ><a href="{{url('/amp/legal-docs/'.$doc->slug)}}" class="light-border p1 block ">{{$doc->title}}</a></li>
               @endforeach
            </ul>
         </div>
      </section>
      @endforeach
   </amp-accordion>
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