@extends('amp.amp')
@section('title', $data->seo_title)
@section('description', $data->meta_description)
@section('keywords', $data->meta_keywords)
@section('content')
<main id="content" role="main">
  <article>
      <header class="bgimg" style="background-image: url({{Voyager::image($data->image)}});">
      <div class="ampstart-card max-width-4 pt2 pb4  bgimg-color-service">
        <h4 class="block  text-center bold text-white">{{$data->heading}}</h4>
        <p class=" text-center text-white mb2">{{$data->sub_heading}}</p>
        <form id="subscribeform" action-xhr="/lead-form" target="_top" method="post" class="p0 m0 px3 mb4" on=submit-success:subscribeform.clear custom-validation-reporting="show-all-on-submit">
        <!-- <form method="GET" action-xhr="/lead-form" target="_top" class="p0 m0 px3 "> -->
          <fieldset class="border-none p0 m0">
            <h2 class="block mb2 h4 bold text-white text-center" >Want to know More ?</h2>
            <!-- Start Input -->
            <div class="service-input ">
               @csrf
              <input type="hidden" name="source" value="service">
              <input type="hidden" name="page" value="{{$data->title}}">
              <input type="hidden" name="page_id" value="{{$data->id}}">
              <input type="hidden" name="from" value="header">
              <input type="hidden" name="type" value="amp">
              <input class="block mb2" type="text" id="show-all-on-submit-name" name="name" placeholder="Name..." required >
  <span visible-when-invalid="valueMissing" validation-for="show-all-on-submit-name"></span>
  <span visible-when-invalid="patternMismatch" validation-for="show-all-on-submit-name">
    Please enter your first and last name separated by a space (e.g. Ajay Maurya)
  </span>
  <input type="email" class="block mb2" id="show-all-on-submit-email" name="email" placeholder="Email..." required>
  <span visible-when-invalid="valueMissing" validation-for="show-all-on-submit-email"></span>
  <span visible-when-invalid="typeMismatch" validation-for="show-all-on-submit-email"></span>
  
              <input type="number" value=""  id="show-all-on-submit-phone" class="block mb2" placeholder="phone" required/>
  <span visible-when-invalid="valueMissing" validation-for="show-all-on-submit-phone"></span>
  <span visible-when-invalid="typeMismatch" validation-for="show-all-on-submit-phone"></span>

              <textarea rows="2"  placeholder="How we can help?"></textarea>
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
        </form>
        <div class="flex">
          <div class="m-auto" >
            @if($data->video)
            <a href="https://www.youtube.com/watch?v={{$data->video}}" target="_blank" class="redbtn   mb3  ">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"  viewBox="0 0 24 24">
                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
              </svg>
              <span class="text-white">Watch Video</span>
            </a>
            @endif
            <a href="{{url('contact-us')}}" class="bluebtn   mb3  ">
              <svg width="24" height="24" fill="#fff" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                <path d="M2.59 1.322l2.844-1.322 4.041 7.889-2.724 1.342c-.538 1.259 2.159 6.289 3.297 6.372.09-.058 2.671-1.328 2.671-1.328l4.11 7.932s-2.764 1.354-2.854 1.396c-.598.273-1.215.399-1.842.397-5.649-.019-12.086-10.43-12.133-17.33-.016-2.407.745-4.387 2.59-5.348zm1.93 1.274l-1.023.504c-5.294 2.762 4.177 21.185 9.648 18.686l.972-.474-2.271-4.383-1.026.501c-3.163 1.547-8.262-8.219-5.055-9.938l1.007-.498-2.252-4.398zm15.48 14.404h-1v-13h1v13zm-2-2h-1v-9h1v9zm4-1h-1v-7h1v7zm-6-1h-1v-5h1v5zm-2-1h-1v-3h1v3zm10 0h-1v-3h1v3zm-12-1h-1v-1h1v1z"/>
              </svg>
              <span class="text-white">Contact us</span>
            </a>
          </div>
        </div>
        @if($data->price)
        <div class="text-center">
          <div class="price-ribbon mt2 text-center"> <span class="ytext"><strong class="abold">Price Starts </strong>  RS @ {{number_format(($data->price))}} /-</span> </div>
        </div>
        @endif
      </div>
      </header>
  </article>
  <ul class="list-reset ">
      <li  class="inline-block"><a href="/">Home</a></li>
      <li class="inline-block">/</li>
      <li class="inline-block"> {{$data->title}}</li>
  </ul>
  @if($data->process)
  <section class=" bglight mt3 p2 ">
      <h3 class="h4 bold text-center">{{$data->process}}</h3>
      <ul class="timeline">
         @foreach($data->only(['step1', 'step2', 'step3', 'step4', 'step5', 'step6']) as $step)
              @if($step)
         <li>
           <strong> Step {{$loop->iteration}}</strong>
           <p>{{$step}}</p>
         </li>
         @endif
         @endforeach
      </ul>
  </section>
  @endif
  <div class="dotted-line mt2 mb2"></div>
  @if($data->section_1_heading || $data->section_2_heading || $data->section_3_heading || $data->section_4_heading || $data->section_5_heading)
  <amp-accordion class="accordion" animate>
      @if($data->section_1_heading)
      <section expanded>
         <h4 class="menu h4 bold p2 ">{{$data->section_1_heading}}</h4>
         <div class="light-border p2">
           {!! $data->section_1_body !!}
         </div>
      </section>
      @endif
      @if($data->section_2_heading)
      <section>
         <h4 class="menu h4 bold p2 ">{{$data->section_2_heading}}</h4>
         <div class="light-border p2">
           {!! $data->section_2_body !!}
         </div>
      </section>
      @endif
      @if($data->section_3_heading)
      <section>
         <h4 class="menu h4 bold p2 ">{{$data->section_3_heading}}</h4>
         <div class="light-border p2">
           {!! $data->section_3_body !!}
         </div>
      </section>
      @endif
      @if($data->section_4_heading)
      <section>
         <h4 class="menu h4 bold p2 ">{{$data->section_4_heading}}</h4>
         <div class="light-border p2">
           {!! $data->section_4_body !!}
         </div>
      </section>
      @endif
      @if($data->section_5_heading)
      <section>
         <h4 class="menu h4 bold p2 ">{{$data->section_5_heading}}</h4>
         <div class="light-border p2">
           {!! $data->section_5_body !!}
         </div>
      </section>
      @endif
  </amp-accordion>
  @else
   <div class="content">
      <div class="bg-white p-5">
         {!! $data->body !!}
      </div>
   </div>
   @endif
   @if($wcu)
  <section class=" mt3 p2 ">
    <h4 class=" h3 justify-center center bold mb3">Why Choose us</h4>
    <div class="flex  justify-center center mt2">
      @foreach($wcu as $row)
      <div class="flex-auto">
        <strong> {{number_format($row->statistics)}} +</strong>
        <p>{{$row->name}}</p>
      </div>
      @endforeach
    </div>
  </section>
  @endif
  @if($otherservices)
  <section class=" bglight mt3 p2 ">
     <h4 class=" h3 justify-center center bold mb3"> Other Services</h4>
      <amp-carousel class="carousel1" layout="responsive" height="400" width="500" type="slides">
         @foreach($otherservices as $serve)
        <div class="slide text-center">
          <amp-img src="{{$serve->page_image?(Voyager::image($serve->page_image)):'/assets/images/bis.jpg'}}" layout="responsive" width="500" height="300" alt="{{$serve->title}}"></amp-img>
          <amp-fit-text layout="responsive" width="500" height="120">        
            <span class="block bold h4 ">{{$serve->title}}</span> 
               <a href="/{{$serve->slug}}" class="text-center h4">Read more</a>  
                </amp-fit-text> 
        </div>
        @endforeach
      </amp-carousel>
  </section>
  <div class="dotted-line mt2 mb2"></div>
    @endif
  <section class=" mt3 p2 ">
    <h4 class="h3 justify-center center bold">The brands we assist </h4>
    <amp-carousel height="115" layout="fixed-height" type="carousel" role="region" aria-label="Basic usage carousel">
      @foreach(\App\Client::where('status','1')->get() as $client)
      <amp-img src="{{Voyager::image($client->image)}}" alt="{{$client->name}}" width="150" height="115"></amp-img>
      @endforeach
    </amp-carousel>
  </section>
  <div class="dotted-line "></div>
  <section class=" mt3 p2 ">
    <h4 class=" h3 justify-center center bold mb2"> What's Latest in {{$data->title}} </h4>
    @foreach($data->posts as $lsb)
    <div class="dotted-line mt3"></div>
    <article >
      <a href="{{url( __('voyager::post.post_slug').$data->category->slug)}}" class=""> <span class="tag">{{$data->category->name}}</span></a>
      <h2 class="mb1 h4"> <a href="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->blog_slug.'/'.$lsb->slug)}}" class="text-decoration-none">{{$lsb->title}}</a></h2>
      <!-- Start byline -->
      <address class="ampstart-byline clearfix mb1  h5">
        <time class="ampstart-byline-pubdate block bold my1"
          datetime="{{$lsb->publish_date}}"> {{date('F d, Y',strtotime($lsb->publish_date))}}</time>
        <div>Registrationwala</div>
      </address>
      <!-- End byline --> 
      <a href="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->blog_slug.'/'.$lsb->slug)}}">
        <amp-img
          src="{{Voyager::image($lsb->image)}}"
          width="1280"
          height="853"
          layout="responsive"
          alt="{{$lsb->title}}"
          class=""
          ></amp-img>
      </a>
      <div class="text-center">
        <a href="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->blog_slug.'/'.$lsb->slug)}}" class="ampstart-btn right-align radius10 ">Read more</a> 
      </div>
    </article>
    @endforeach
  </section>
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