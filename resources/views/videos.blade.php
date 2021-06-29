@extends('templates.web')
@section('title', 'Our Videos - Registrationwala Videos')
@section('description', 'Check out our vast video collection. Through youtube videos, Registrationwala aims to educate you about business licenses.')
@section('keywords', 'Videos')
@section('content')
@include('templates.header')

<!--Header form section-->
<section class="bg-white mb-0"> <img src="images/VIDEO-PAGE-banner.jpg" class="img-fluid"> </section>
<div class="bg-light p-2 mt-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb radius-0 bg-transparent p-0  m-0">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Videos</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="pb-5 pt-2 bg-white">
  <div class="container">
<div class="row">
      <div class="col-md-12 text-center">
        <div class="contentbg">Our video gallery</div>
        <h1 class="h3 zindex  text-bold text-center mb-1">Our video gallery</h1>
        <h6 class="text-center mb-5"> Checkout Our Videos to learn about Different Business Licenses</h6>
      </div>
    </div>
</div>
<div class="bg-light pt-5 pb-5">
  <div class="container">
  
  
  <div class="row">
      <div class="col-md-6">
        <div class="mb-5">
           <label class="font-weight-bold">Search Videos</label>

              <div class="input-group">
                <input type="text" class="form-control radius0" placeholder="Search">
                <div class="input-group-append">
                  <button class="btn btn-secondary" type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </div>
              </div>
              <p class="mb-0 mt-1"> <span class="text-muted mb-1">Popular searches:</span> <a href="#"><span class="badge badge-info mb-1">FFMC License</span></a> <a href=""><span class="badge badge-info mb-1">IP 1 License </span></a> <a href=""><span class="badge badge-info mb-1">ISP License </span></a> <a href=""><span class="badge badge-info mb-1">VNO License</span></a>  </p>
          
        </div>
      </div>
      
      
            <div class="col-md-3">

      
      <div class="form-group">
  <label class="font-weight-bold">Category</label>
  <select class="form-control" >
    <option value="All">All </option>
    <option value="AYUSH License ">AYUSH License </option>
    <option value="BIS Certificate ">BIS Certificate  </option>
    <option value="EPR Registration ">EPR Registration </option>
    <option value=" BEE Certification"> BEE Certification </option>
  </select>
</div>
      
      </div>
      <div class="col-md-3">

      
      <div class="form-group">
  <label class="font-weight-bold">Archives</label>
  <select class="form-control" id="sel1">
    <option>2021</option>
    <option>2020</option>
    <option>2019</option>
    <option>2018</option>
  </select>
</div>
      
      </div>
      
    </div>

  
  
    <div class="row">
      @foreach($data['items'] as $item)
      <div class="col-md-4">
      <div class="embed-responsive radius20 border embed-responsive-16by9"><iframe allowfullscreen="" class="embed-responsive-item" src="https://www.youtube.com/embed/{{$item['id']->videoId}}"></iframe></div>
      <div class="p-2 ">
      <h2 class="h6 ">{{$item['snippet']['title']}}</h2>
      <p class="text-justify">{{$item['snippet']['description']}}</p>
      </div>
    </div>
    @endforeach
    <div class="col-md-4">
      <div class="embed-responsive radius20 border embed-responsive-16by9"><iframe allowfullscreen="" class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe></div>
      <div class="p-2 ">
     <h2 class="h6 ">How to get AYUSH License | How to apply for AYUSH License?</h2>
      <p class="text-justify">In this video, you'll know how to get AYUSH License. Know the answers to every question from how to apply for AYUSH License to the documents you need.</p>
      </div>
    </div>

          <div class="col-md-4">
      <div class="embed-responsive radius20 border embed-responsive-16by9"><iframe allowfullscreen="" class="embed-responsive-item" src="https://www.youtube.com/embed/OmzH_BbuZiU"></iframe></div>
      <div class="p-2 ">
      <h2 class="h6 ">TEC Certification kya hai | TEC certificate Kaise le | TEC Certification | TEC Certificate</h2>
      <p class="text-justify">TEC certification kya hai. In this world where business licenses are as different as there are types of businesses, TEC certification is one that stands out to the ...</p>
      </div>
    </div>
    </div>
   </div>   
  </div>
  <div class="bg-white pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
      <div class="embed-responsive radius20 border embed-responsive-16by9"><iframe allowfullscreen="" class="embed-responsive-item" src="https://www.youtube.com/embed/vGTlA_YbOJk"></iframe></div>
      <div class="p-2 ">
      <h2 class="h6 ">Get E Waste management Certificate | EPR Registration process</h2>
      <p class="text-justify">What is EPR? It all depends on whether or not you're willing to accept the Extended Producer responsibility of managing the electronic waste materials.</p>
      </div>
    </div>
          <div class="col-md-4">
      <div class="embed-responsive radius20 border embed-responsive-16by9"><iframe allowfullscreen="" class="embed-responsive-item" src="https://www.youtube.com/embed/opcHuZ8RZG4"></iframe></div>
      <div class="p-2 ">
      <h2 class="h6 ">PM WANI scheme | Internet for all Initiative</h2>
      <p class="text-justify">Prime Minister Modi has launched the PM WANI scheme, to turn all the shops in India into Wi Fi hotspots.A Government initiative to achieve the goal of internet ...</p>
      </div>
    </div>
          <div class="col-md-4">
      <div class="embed-responsive radius20 border embed-responsive-16by9"><iframe allowfullscreen="" class="embed-responsive-item" src="https://www.youtube.com/embed/jkxB8gv9ahM"></iframe></div>
      <div class="p-2 ">
      <h2 class="h6 ">Publish your Own Newspaper | Get RNI Registration Online| RNI Certificate</h2>
      <p class="text-justify">Want to publish your own newspaper? It's time to Publish your Own Newspaper | Get RNI Registration Online| RNI Certificate get RNI Registration and RNI ...

</p>
      </div>
    </div>
    </div>
   </div>   
  </div>
  <div class="bg-light pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
      <div class="embed-responsive radius20 border embed-responsive-16by9"><iframe allowfullscreen="" class="embed-responsive-item" src="https://www.youtube.com/embed/eyi6YXcuQ9k"></iframe></div>

      <div class="p-2 ">
      <h2 class="h6 ">Get ISP License application form in india | ISP License Documents</h2>
      <p class="text-justify">Contact us on 9810602899 ▻What is ISP License? ISP License is Internet Service Provider License. DOT is license ko deti hai un companies ko jo internet ...</p>
      </div>
    </div>
          <div class="col-md-4">
      <div class="embed-responsive radius20 border embed-responsive-16by9"><iframe allowfullscreen="" class="embed-responsive-item" src="https://www.youtube.com/embed/bKlYYx7jefE"></iframe></div>
      <div class="p-2 ">
      <h2 class="h6 ">Get BEE Certification in India | Get 5 Star Rating for Electronic Appliances</h2>
      <p class="text-justify">India, being the fastest growing economies in the world, has also grown the desire of the population to indulge in more. More electrical appliances, more comfort ...</p>

      </div>
    </div>
          <div class="col-md-4">
      <div class="embed-responsive radius20 border embed-responsive-16by9"><iframe allowfullscreen="" class="embed-responsive-item" src="https://www.youtube.com/embed/9j2gK2psWyk"></iframe></div>
      <div class="p-2 ">
      <h2 class="h6 ">New Other Service Provider (OSP) Guidelines | Registrationwala</h2>
      <p class="text-justify">Today we will discuss the latest OSP guidelines that were announced on fifth of November 2020 regarding Other Service Providers. Contact us on 9810602899 ...

</p>
      </div>
    </div>
    </div>
   </div>   
  </div>
  <div class="bg-white pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
      <div class="embed-responsive radius20 border embed-responsive-16by9"><iframe allowfullscreen="" class="embed-responsive-item" src="https://www.youtube.com/embed/0tG6YsRMlm8"></iframe></div>
      <div class="p-2 ">
      <h2 class="h6 ">CDSCO Registration | Import of Cosmetics | CDSCO EC Registration</h2>
      <p class="text-justify">Contact us on 9810602899 Eligibility for the CDSCO Registration 1. A manufacturer who has a registered office in India 2. Any authorized agent of that ...</p>
      </div>
    </div>
          <div class="col-md-4">
      <div class="embed-responsive radius20 border embed-responsive-16by9"><iframe allowfullscreen="" class="embed-responsive-item" src="https://www.youtube.com/embed/JAA5GTBecvc"></iframe></div>
      <div class="p-2 ">
      <h2 class="h6 ">All Business Licenses Under One Roof | Registrationwala</h2>
      <p class="text-justify">Business Licenses are the key to start specialized enterprises. However, the process to get those licenses is extremely difficult. From collecting the documents to ...</p>
      </div>
    </div>
          <div class="col-md-4">
      <div class="embed-responsive radius20 border embed-responsive-16by9"><iframe allowfullscreen="" class="embed-responsive-item" src="https://www.youtube.com/embed/7bNaOlGqAE0"></iframe></div>

      <div class="p-2 ">
      <h2 class="h6 ">ETA Certificate | WPC Equipment Type Approval | ETA License</h2>
      <p class="text-justify">Hello Guys, I am Dushyant of Registrationwala, and today, we are going to talk about something very interesting. It's certificate that allows you to export, import, ...</p>
      </div>
    </div>
    </div>
   </div>   
  </div>



   
    <ul class="pagination justify-content-center mt-5">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item "><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
    

</section>

@endsection

@section('script')

@endsection