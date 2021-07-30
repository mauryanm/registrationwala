@extends('templates.web')
@section('title', $document->meta_title)
@section('description', $document->meta_description)
@section('keywords', $document->meta_keywords)
@section('content')
@include('templates.header')
<div class="service-section overlay pb-5">
   <div class="mt-5 mb-5">
   </div>
</div>
<div class="bg-light p-2 mt-0">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <ol class="breadcrumb radius-0 bg-transparent p-0  m-0">
               <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
               <li class="breadcrumb-item"><a href="{{url('legal-docs')}}">Legal Document</a></li>
               <li class="breadcrumb-item active" aria-current="page">{{$document->title}}</li>
            </ol>
         </div>
      </div>
   </div>
</div>
<section class="pb-5 pt-5 bg-light border-bottom container-fluid">
   <div>
      <div class="row">
         <div class="col-md-10 offset-md-1 text-center">
            <div class="bg-white p-5">
               <h1 class="h3 zindex  text-bold text-center">{{$document->heading}}</h1>
               <hr>
               {!! $document->body !!}
               @if($document->docdetail)
               <div>
                  <img src="{{Voyager::image($document->image)}}" class="img-fluid">
               </div>
               <a class="cbtn btn-4 mb-1" href="{{url('legal-docs/'.$document->slug.'/edit')}}"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
               @endif
            </div>
         </div>
      </div>
   </div>
</section>
<section class="py-5 bg-white border-bottom container-fluid">
   <div class="container">
      @if(json_decode($document->documents) !== null)
               <div class="row"> 
                    @foreach(collect(json_decode($document->documents))->sortBy('original_name') as $file)

                  <div class="col-sm-4 col-6 col-md-3 mb-3 f1_container">
                     <div class="f1_card text-center">
                        <div class="front face">
                        <a target="_blank" href="{{url('/download/'.encrypt($file->download_link))}}"><img class="hvr-grow-rotate img-fluid" src="{{Voyager::image('/images/document-management.png') }}" /><span class="docname hvr-shutter-out-horizontal">{{ str_replace('.pdf','',$file->original_name) }}</span></a>
                        </div>
                        <div class="back face center">
                           <a target="_blank" href="{{url('/download/'.encrypt($file->download_link))}}">
                            <img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl={{urlencode(url('/download/'.encrypt($file->download_link)))}}&choe=UTF-8" title="{{ $file->original_name }}"  />
                            <span class="docname hvr-shutter-out-horizontal">Download</span></a>
                        </div>
                     </div>
                  </div>
                      
                    @endforeach
               </div>
               @endif
   </div>
</section>
@endsection
@section('script')
<style type="text/css">
.f1_container {position: relative;margin: 10px auto;width: 100%;height: 200px;z-index: 1;}
.f1_container {perspective: 1000;}
.f1_card {width: 100%;height: 100%;transform-style: preserve-3d;transition: all 1.0s linear; max-width: 160px; max-height: 200px; margin: auto;}
.f1_container:hover .f1_card {transform: rotateY(180deg);box-shadow: -5px 5px 5px #aaa;}
.face {position: absolute;width: 100%;height: 100%;backface-visibility: hidden;}
.face.back {display: block;transform: rotateY(180deg);box-sizing: border-box;padding: 10px;color: white;text-align: center;background-color: #aaa;}
.f1_container .face.back a{transform: translateX(-50%) translateY(-50%);display: inline-block;top: 50%;left: 50%;position: absolute;}
</style>
<script type="text/javascript">
  $(document).ready(function (){
    
   })
</script>
@endsection