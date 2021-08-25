@extends('amp.amp')
@section('content')
<main id="content" role="main">
 <article>
    <header class="bgimg">
       <div class="ampstart-card max-width-4 pt2 pb4  bgimg-color">
          <h3 class="block mb4 text-center bold">One Portal , Complete Legal Solution! </h3>
          <form class="text-center serach-wraper" method="GET" action="/" target="_top">
             <input type="search" placeholder="FFMC  License" name="search"  class="serachinput  p0 m0">
             <input type="submit" value="Search">
          </form>
          <div class="flex">
             <div class="m-auto" >
                <a href="https://www.youtube.com/c/registrationwala" target="_blank" class="redbtn   mb3  ">
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"  viewBox="0 0 24 24">
                      <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                   </svg>
                   <span class="text-white">Watch Video</span>
                </a>&nbsp;&nbsp;
                <a href="{{ url('/contact-us') }}" class="bluebtn   mb3  ">
                   <svg width="24" height="24" fill="#fff" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                      <path d="M2.59 1.322l2.844-1.322 4.041 7.889-2.724 1.342c-.538 1.259 2.159 6.289 3.297 6.372.09-.058 2.671-1.328 2.671-1.328l4.11 7.932s-2.764 1.354-2.854 1.396c-.598.273-1.215.399-1.842.397-5.649-.019-12.086-10.43-12.133-17.33-.016-2.407.745-4.387 2.59-5.348zm1.93 1.274l-1.023.504c-5.294 2.762 4.177 21.185 9.648 18.686l.972-.474-2.271-4.383-1.026.501c-3.163 1.547-8.262-8.219-5.055-9.938l1.007-.498-2.252-4.398zm15.48 14.404h-1v-13h1v13zm-2-2h-1v-9h1v9zm4-1h-1v-7h1v7zm-6-1h-1v-5h1v5zm-2-1h-1v-3h1v3zm10 0h-1v-3h1v3zm-12-1h-1v-1h1v1z"/>
                   </svg>
                   <span class="text-white">Contact us</span>
                </a>
             </div>
          </div>
       </div>
    </header>
 </article>
 <div class="flex justify-center  center">
    <div class="flex-auto ">
       <amp-img  src="../images/icon/CA.png" width="100" height="100" layout="fixed"></amp-img>
    </div>
    <div class="flex-auto">
       <amp-img src="../images/icon/cs.png" width="100" height="100" layout="fixed"></amp-img>
    </div>
    <div class="flex-auto">
       <amp-img src="../images/icon/advacate.png" width="100" height="100" layout="fixed"></amp-img>
    </div>
 </div>
 <div class="dotted-line"></div>
 <div class="flex  justify-center center mt2">
    <div class="flex-auto">
       <strong> 35,000 +</strong>
       <p>Satisfied Clients</p>
    </div>
    <div class="flex-auto">
       <strong> 500 +</strong>
       <p>Registration | License | Compliance</p>
    </div>
    <div class="flex-auto">
       <strong> 10 </strong>
       <p>Branches across India</p>
    </div>
 </div>
 <div class="flex  justify-center center mt2">
    <div class="flex-auto">
       <strong> 50 +</strong>
       <p>Years Combined Experience </p>
    </div>
    <div class="flex-auto">
       <strong>35 +</strong>
       <p>Team Members </p>
    </div>
    <div class="flex-auto">
       <strong> 10 </strong>
       <p>Among Top 10 Consulting firms </p>
    </div>
 </div>
 @if($hmsr)
 <section class="bglight mt3 p2 ">
    <h4 class=" h3 justify-center center bold mb2">Our Services </h4>
    @foreach($hmsr as $service)
    @if($service->servicesl)
    <h5 class="mb1 h4">{{$service->heading}}</h5>
    <ul class=" m0 mb4">
      @foreach($service->servicesl as $serr)
       <li><a href="{{url($serr->slug)}}" class="text-decoration-none ">{{$serr->title}}</a></li>
       @endforeach
    </ul>
    @endif
    <h5 class="mb1 h4">{{$service->heading2}}</h5>
    <ul class="m0 mb4">
      @foreach($service->servicesr as $serl)
       <li><a href="{{url($serl->slug)}}" class="text-decoration-none ">{{$serl->title}}</a></li>
      @endforeach
    </ul>
    @endforeach
 </section>
 @endif
 <section class=" mt3 p2 ">
    <h4 class="h3 justify-center center bold">The brands we assist </h4>
    <amp-carousel height="115" layout="fixed-height" type="carousel" role="region" aria-label="Basic usage carousel">
      @foreach(\App\Client::where('status','1')->get() as $client)
       <amp-img src="{{Voyager::image($client->image)}}" width="150" height="115" alt="{{$client->name}}"></amp-img>
       @endforeach
    </amp-carousel>
 </section>
 <div class="dotted-line"></div>
 <section class=" mt3 p2 ">
    <div class="center">
       <amp-img src="{{Voyager::image('images/virtual-cfo-services.png')}}" width="300" height="291" alt="Virtual CFO Services"></amp-img>
       <h3 class="h4 bold">Virtual CFO Services</h3>
       <h4>Focus on your business, leaving the accounting matter to us.</h4>
       <p>With our Virtual CFO services, you can relax and let us handle your accounting regulations matters. Focus on your work, while our experts take your finances up to the accounting standards.</p  
          >
    </div>
    <div class="center mt2">
       <a href="{{url('contact-us')}}" class="bluebtn mb3 ampstart-btn    col-6">
          <svg width="24" height="24" fill="#fff" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
             <path d="M2.59 1.322l2.844-1.322 4.041 7.889-2.724 1.342c-.538 1.259 2.159 6.289 3.297 6.372.09-.058 2.671-1.328 2.671-1.328l4.11 7.932s-2.764 1.354-2.854 1.396c-.598.273-1.215.399-1.842.397-5.649-.019-12.086-10.43-12.133-17.33-.016-2.407.745-4.387 2.59-5.348zm1.93 1.274l-1.023.504c-5.294 2.762 4.177 21.185 9.648 18.686l.972-.474-2.271-4.383-1.026.501c-3.163 1.547-8.262-8.219-5.055-9.938l1.007-.498-2.252-4.398zm15.48 14.404h-1v-13h1v13zm-2-2h-1v-9h1v9zm4-1h-1v-7h1v7zm-6-1h-1v-5h1v5zm-2-1h-1v-3h1v3zm10 0h-1v-3h1v3zm-12-1h-1v-1h1v1z"/>
          </svg>
          Book a free Consultation
       </a>
    </div>
 </section>
 <section class=" mt3 p2 bgdark text-white pb4 ">
    <div class="center">
       <amp-img src="{{Voyager::image('images/become-an-associate.png')}}" width="300" height="291" alt="Become An Associate" class="dottedimg"></amp-img>
       <h3 class="h4 bold">Become An Associate?</h3>
       <h4>Join us on a mutually beneficial journey where you grow along with us</h4>
       <p>Join Registrationwala’s no agreement, no franchisee, and all profit – Associate program. If you are a lawyer, Chartered Accountant, Company Secretary, Business Consultant, you can join us on this transparent platform – where every lead shared will hold value, and every lead cared for will be equal.</p>
    </div>
    <div class="center mt2">
       <a href="{{url('become-an-associate')}}" class="bluebtn mb3 ampstart-btn    col-6">
          <svg xmlns="http://www.w3.org/2000/svg" fill="#FFF" width="24" height="24" viewBox="0 0 24 24">
             <path d="M9 19h-4v-2h4v2zm2.946-4.036l3.107 3.105-4.112.931 1.005-4.036zm12.054-5.839l-7.898 7.996-3.202-3.202 7.898-7.995 3.202 3.201zm-6 8.92v3.955h-16v-20h7.362c4.156 0 2.638 6 2.638 6s2.313-.635 4.067-.133l1.952-1.976c-2.214-2.807-5.762-5.891-7.83-5.891h-10.189v24h20v-7.98l-2 2.025z"/>
          </svg>
          Registration
       </a>
    </div>
 </section>
 @if($hmpt)
 <section class=" mt3 p2 ">
    <h3 class="h4 bold text-center">Enhance your knowledge </h3>
    <h4  class="text-center mb3 ">Enhance your knowledge about business licenses through these digestible articles</h4>
    <div class="dotted-line"></div>
    @foreach($hmpt as $post)
    @foreach($post->servicesl as $data)
    <article >
       <a href="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->service->slug)}}" class=""> <span class="tag">{{$data->service->title}}</span></a>
       <h2 class="mb1 h4"> <a href="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->service->slug.'/'.$data->slug)}}" class="text-decoration-none">{{$data->title}}</a></h2>
       <!-- Start byline -->
       <address class="ampstart-byline clearfix mb1  h5">
          <time class="ampstart-byline-pubdate block bold my1"
             datetime="2016-12-13"> {{date('F d, Y',strtotime($data->publish_date))}}</time>
          <div>Registrationwala</div>
       </address>
       <!-- End byline --> 
       <a href="#">
          <amp-img
             src="{{Voyager::image($data->image)}}"
             alt="{{ $data->title }}"
             width="1280"
             height="853"
             layout="responsive"
             class=""
             ></amp-img>
       </a>
       <div class="text-center">
          <a href="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->service->slug.'/'.$data->slug)}}" class="ampstart-btn right-align radius10 ">Read more</a> 
       </div>
    </article>
    @if(!$loop->last)
    <div class="dotted-line mt3"></div>
    @endif
    @endforeach
    <div class="dotted-line mt3"></div>
    @foreach($post->servicesr as $data)
    <article >
       <a href="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->service->slug)}}" class=""> <span class="tag">{{$data->service->title}}</span></a>
       <h2 class="mb1 h4"> <a href="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->service->slug.'/'.$data->slug)}}" class="text-decoration-none">{{$data->title}}</a></h2>
       <!-- Start byline -->
       <address class="ampstart-byline clearfix mb1  h5">
          <time class="ampstart-byline-pubdate block bold my1"
             datetime="2016-12-13"> {{date('F d, Y',strtotime($data->publish_date))}}</time>
          <div>Registrationwala</div>
       </address>
       <!-- End byline --> 
       <a href="#">
          <amp-img
             src="{{Voyager::image($data->image)}}"
             alt="{{ $data->title }}"
             width="1280"
             height="853"
             layout="responsive"
             class=""
             ></amp-img>
       </a>
       <div class="text-center">
          <a href="{{url( __('voyager::post.post_slug').$data->category->slug.'/'.$data->service->slug.'/'.$data->slug)}}" class="ampstart-btn right-align radius10 ">Read more</a> 
       </div>
    </article>
    @if(!$loop->last)
    <div class="dotted-line mt3"></div>
    @endif
    @endforeach
    @endforeach
        
 </section>
 @endif
 @if($wps)
 <section class=" bglight mt3 p2 ">
    <h3 class="h4 bold text-center">What People Say</h3>
    <h4 class="text-center mb3 ">From the hearts of our esteemed clients</h4>
    <amp-carousel height="300" layout="fixed-height" type="slides" role="region" aria-label="Carousel with arbitrary  content">
      @foreach($wps as $row) 
       <div>
          <p> "{{$row->description}}" </p>
          <p class="mr-auto mt2">
             <amp-img src="{{Voyager::image($row->image)}}" width="84" height="84" alt="{{$row->name}}" class="border"></amp-img>
             <span class="block">{{$row->name}} ({{$row->city}}) </span> 
          </p>
       </div>
       @endforeach
    </amp-carousel>
 </section>
 @endif
 <div class="ampstart-card  pt2">
    <form action-xhr="{{url('lead-form')}}" target="_top" method="post" class="p0 m0 px3 mb4">
      @csrf
      <input type="hidden" name="source" value="subscribe">
      <input type="hidden" name="name" value="subscriber">
      <input type="hidden" name="page" value="https://www.registrationwala.com/amp">
       <fieldset class="border-none p0 m0">
          <h2 class="block mb4 h4 bold">Subscribe
             to our newsletter
          </h2>
          <!-- Start Input -->
          <div class="ampstart-input inline-block relative m0 p0 mb3">
             <input type="email" value="" name="emailid"
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
       <div submit-success>
    <template type="amp-mustache">
      Success! Thanks @{{name}} for trying the <code>amp-form</code> demo! Try to insert the word "error" as a name input in the form to see how <code>amp-form</code> handles errors.
    </template>
  </div>
  <div submit-error>
    <template type="amp-mustache">
      Error! Thanks @{{name}} for trying the <code>amp-form</code> demo with an error response.
    </template>
  </div>
    </form>
 </div>
</main>
@endsection