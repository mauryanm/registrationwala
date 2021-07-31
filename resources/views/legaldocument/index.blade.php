@extends('templates.web')
@section('title', "Create Free Online Legal Documents or Forms in India - Registrationwala.com")
@section('description', "Free legal documents download online. You can download agreements, forms, letter, templates or certificate formats in Doc or in PDF form.")
@section('keywords', "legal documents, free legal documents, examples of legal documents, list of legal documents, legal documents free downloads, legal documents format in doc, legal documents format in pdf, legal forms, free legal forms, legal forms online, legal documents online, legal document templates, legal documents online, legal docs, legal forms free, online legal documents, online legal forms, free legal forms online, legal documents for free, legal forms free download, free legal documents online")
@section('content')
@include('templates.header')

<div class="service-section overlay pb-5">
   <div class="mt-5 mb-5">
      <div class="container">
         <div class="row no-gutters align-items-center">
            <div class="col-md-8 offset-md-2">
               <h2 class="text-center h1 mb-2 mt-2 text-white">
                  Create Your Legal Documents
               </h2>
               <p class="text-center text-white h5">  Registartionwala.com is India's trusted, <br>Do-it-Yourself platform for making legal documents online.
               </p>
               <div class="row no-gutters">
                  <div class="col-md-12">
                     <div class="input-group">
                        <select class="form-control radius0">
                           <option>
                              Serach your documents
                           </option>
                           <option>
                              Delay of possession legal notice
                           </option>
                           <option>
                              Security deposit refund legal notice
                           </option>
                           <option>
                              Legal Notice For Dues Recovery
                           </option>
                           <option>
                              Breach of Contract Notice Format
                           </option>
                           <option>
                              Cheque Bounce Notice Format
                           </option>
                        </select>
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="bg-light p-2 mt-0">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <ol class="breadcrumb radius-0 bg-transparent p-0  m-0">
               <li class="breadcrumb-item"><a href="index.php">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">Legal Document</li>
            </ol>
         </div>
      </div>
   </div>
</div>
<section class="pb-5 bg-light border-bottom">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center">
            <h1 class="h3 zindex  text-bold text-center largefont  ">Legal Documents</h1>
            <p>Get Your Legal Documentation Sorted in Minutes
            </p>
         </div>
      </div>
      <div class="card-columns">
         @foreach($doccat as $dwc)
         <div class="card">
            <div class="card-header text-bold">{{$dwc->title}}</div>
            <ul class="list-group list-group-flush">
               @forelse($dwc->docs as $doc)
               <li class="list-group-item"><a href="{{url('legal-docs/'.$doc->slug)}}">{{$doc->title}}</a></li>
               @empty
               <li class="list-group-item"><a href="#">Documents not found</a></li>
               @endforelse
            </ul>
         </div>
         @endforeach
      </div>
   </div>
</section>
@endsection
@section('script')
<script type="text/javascript">
  $(document).ready(function (){
    
   })
</script>
@endsection