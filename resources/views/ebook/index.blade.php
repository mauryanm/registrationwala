@extends('templates.web')
@section('title', "E-Book")
@section('description', "E-Book")
@section('keywords', "E-Book")
@section('content')
@include('templates.header')

<div class="service-section overlay">
   <div class="pb-5">
      <div class="container">
         <div class="row no-gutters align-items-center">
            <div class="col-md-6 offset-md-3">
               <h2 class="text-center h3 mb-2 mt-2 text-white ">E-books </h2>
               <!-- <div class="row no-gutters">
                  <div class="col-md-12">
                     <div class="input-group">
                        <input type="text" class="form-control radius0" placeholder="Serach E-book">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                        </div>
                     </div>
                  </div>
               </div> -->
            </div>
         </div>
      </div>
   </div>
</div>
@include('dashboard.includes.error')
<div class="bg-light p-2 mt-0">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <ol class="breadcrumb radius-0 bg-transparent p-0  m-0">
               <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">E-books </li>
            </ol>
         </div>
      </div>
   </div>
</div>
<section class="pb-5 pt-5 bg-light border-bottom">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
          @forelse($ebooks as $ebook)
            <div class="row">
               <div class="col-md-12">
                  <div class="bg-white p-4">
                     <div class="row">
                        <div class="col-md-9">
                           <h2 class="h4">{{$ebook->heading}}</h2>
                           {!! $ebook->body !!}
                        </div>
                        <div class="col-md-3 text-center">
                           <div class="books mb-5 mt-4">
                              <div class="book">
                                 <img src="{{Voyager::image($ebook->image)}}" alt="{{$ebook->heading}}">
                              </div>
                           </div>
                           <a class="cbtn btn-4 mb-1 downloadbtn" href="javascript:void(0)" data-id="{{$ebook->id}}" data-name="{{$ebook->name}}"><i class="fa fa-download" aria-hidden="true"></i> Download </a>   
                        </div>
                     </div>
                  </div>
               </div>
            </div>
          @empty

          @endforelse
         </div>
      </div>
   </div>
</section>
<div class="modal fade" id="downloadebook" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
   <div class="modal-dialog modelsize  modal-dialog-centered" role="document">
      <div class="modal-content modelbgimage ">
         <div class="modal-body pb-0 pt-0">
            <div class="row no-gutter">
               <div class="col-md-6"><img src="{{ asset('/assets/images/form-images.png') }}" class="img-fluid mt-2">
               </div>
               <div class="col-md-6 bg-light">
                  <div class="text-left">
                     <button type="button" class="close p-2" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                  </div>
                  <div class="login-wrapper">
                     <div class="form-title text-center mt-3">
                        <h4 class="mb-3 pb-0"> Download E-Book</h4>
                     </div>
                     <div class="d-flex flex-column text-center">
                        <form action="{{route('e-books')}}" method="post">
                          @csrf
                          <input type="hidden" name="page_id" id="ebook_id">
                          <input type="hidden" name="source" value="ebook">
                           <div class="form-group">
                              <input type="text" id="service" class="form-control radius0" placeholder="Service" name="service">
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control radius0" placeholder="Name" name="name">
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control radius0" placeholder="Email" name="email">
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control radius0" placeholder="Phone" name="phone">
                           </div>
                           <button type="submit" class="btn btn-dark btn-sm pull-right w-50 btn-round radius0">Submit</button>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row ">
                     <div class="col bg-dark text-white  pt-2 pb-2 text-center"> <strong>35000+</strong> <small class="d-block">Satisfied Clients</small></div>
                     <div class="col bg-dark seplr text-white  pt-2 pb-2 text-center"> <strong>500+</strong> <small  class="d-block">Licenses & Registration</small> </div>
                     <div class="col bg-dark seplr text-white  pt-2 pb-2 text-center"> <strong>10</strong> <small  class="d-block">Branches across India</small></div>
                     <div class="col bg-dark text-white  pt-2 pb-2 text-center"> <strong>50 Years + </strong> <small  class="d-block">Combined experience </small></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
  $(document).ready(function (){
    $('.downloadbtn').on('click', function(){
      $("#ebook_id").val($(this).data('id'));
      $("#service").val($(this).data('name'));
      $('#downloadebook').modal();

    })
  })
  @if(session()->has('curentdwn'))
  window.location.href='{{url("download/".session()->get('curentdwn'))}}';
  @endif
</script>
@endsection