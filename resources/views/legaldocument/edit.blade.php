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
@include('dashboard.includes.error')
<section class="pb-5 pt-5 bg-light border-bottom">
  <div class="container">
     <div class="bg-white p-5">
       <h1 class="h3 zindex  text-bold text-center  mb-4  ">{{$document->heading}}</h1>
       @if($document->docdetail)
       <div>
         <div class="page-content page-container" id="page-content">
           <div class="padding">
             <div class="row  d-flex justify-content-center">
               <div class="col-lg-12 grid-margin stretch-card">
                 <!--x-editable starts-->
                 <div class="card">
                   <div class="template-demo">
                      <div class="card-body" id="editor">
                       {!! (old('content')?(old('doc_header').old('content').old('doc_footer')):$document->docdetail) !!}
                     </div>
                   <hr>
                   <div class="editable-footer text-center pb-3">
                      <a class="cbtn btn-4 mb-1 downloaddoc" data-type="doc" href="javascript:void(0)"><i class="fa fa-download" aria-hidden="true"></i> Download Doc</a>
                        <a class="cbtn btn-4 mb-1 downloaddoc" data-type="pdf" href="javascript:void(0)"><i class="fa fa-download" aria-hidden="true"></i> Download Pdf</a>
                     </div>
                   </div>
                 </div>
               </div>
               <!--x-editable ends-->
             </div>
           </div>
         </div>
       </div>
       @endif
     </div>
  </div>
  </div>
</section>
<div class="modal fade" id="downloadlegaldoc" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
  <div class="modal-dialog modelsize  modal-dialog-centered" role="document">
    <div class="modal-content modelbgimage ">
      <div class="modal-body pb-0 pt-0">
        <div class="row no-gutter">
          <div class="col-md-6"><img src="{{Voyager::image('images/form-images.png')}}" class="img-fluid mt-2">
          </div>
          <div class="col-md-6 bg-light">
            <div class="text-left">
              <button type="button" class="close p-2" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="login-wrapper">
              <div class="form-title text-center mt-3">
                <h4 class="mb-3 pb-0"> Download Document</h4>
              </div>
              <div class="d-flex flex-column text-center">
                <form class="validateform" id="documentdownload" method="post" action="{{route('doc-download')}}">
                  @csrf
                  <input type="hidden" name="source" value="Legal Doc">
                  <input type="hidden" name="page_id" value="{{$document->id}}">
                  <input type="hidden" name="doc_header" id="doc_header" value="">
                  <input type="hidden" name="content" id="content" value="">
                  <input type="hidden" name="doc_footer" id="doc_footer" value="">
                  <input type="hidden" name="doc_type" id="doc_type" value="">
                  <div class="form-group">
                    <input type="text" class="form-control radius0" placeholder="Service" value="{{$document->heading}}" name="service" required="">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control radius0" placeholder="Name" name="name" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control radius0" placeholder="Email" name="email" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control radius0" placeholder="Phone" name="phone" required>
                  </div>
                  <button type="submit" id="docsubmit" class="btn btn-dark btn-sm pull-right w-50 btn-round radius0">Submit</button>
                </form>
              </div>
            </div>
          </div>
          {!! setting('site.doc_form_footer') !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<style type="text/css">
   .combodate select {height: calc(2.25rem + 2px);}
   #editor footer{background: transparent; color: inherit;}
   #editor{max-width:850px; margin:auto; background:#fff;}
   .fa.red, .textedit, .dateselect, .selcttitle, .editaddr, #editor .editable{ color:#f52900; font-weight:bold;}
   #editor [class^="set-"], #editor [class*=" set-"]{color:#707475; font-weight:bold;}
</style>
<link href="{{ asset('/css/bootstrap-editable.css') }}" rel="stylesheet"/>
<script src="{{ asset('/js/bootstrap-editable.min.js') }}"></script>
<script src="{{ asset('/js/moment.min.js') }}"></script>
<script>
//$.fn.editable.defaults.mode = 'inline';
//text|textarea|select|date|checklist
$(document).ready(function() {
   $('body').on('click','.editable', function(){
      // e.preventDefault();
      stopscroll()
   })
    $('.textedit').editable({success: function(response, newValue) {
    $('.'+$(this).data('setvalue')).text(newValue);
}});
   $('.selcttitle').editable({
      type:'select',
      source: {"Mr":'Mr',"Ms":'Ms',"Mrs":'Mrs'},
      title: 'Title',
      placement: 'bottom',
      success: function(response, newValue) {
    $('.'+$(this).data('setvalue')).text(newValue);}
   });
   $('.datecalender').editable({type:'date',format:'yyyy-mm-dd'});
   $('.dateselect').editable({type:'combodate',format:'Do MMM YYYY',success: function(response, newValue) {
    $('.'+$(this).data('setvalue')).text(moment(newValue).format('DD/MM/YYYY'));}});
   $('.fulldateselect').editable({type:'combodate',format:'Do [Day of] MMMM,YYYY',success: function(response, newValue) {
    $('.'+$(this).data('setvalue')).text(moment(newValue).format('Do [Day of] MMMM,YYYY'));}});
   $('.dateselectfull').editable({type:'combodate',template:"D MMM YYYY  HH:mm",format:'dddd, [THE] Do [DAY OF] MMMM, YYYY [AT] HH:mm a z',viewformat:"dddd, [THE] Do [DAY OF] MMMM, YYYY [AT] HH:mm a z",success: function(response, newValue) {
    $('.'+$(this).data('setvalue')).text(moment(newValue).format('dddd, [THE] Do [DAY OF] MMMM, YYYY [AT] HH:mm a z'));}});
   $('.editaddr').editable({type:'textarea',title: 'Enter Address',success: function(response, newValue) {
    $('.'+$(this).data('setvalue')).text(newValue);
}});

$('.rupis').editable({
    validate: function(value) {
        var regex = /^[0-9]+$/;
        if(! regex.test(value)) {
            return 'numbers only!';
        }
    },
   display: function(value) {
      $(this).text(value + inWords2(value));
    },
   success: function(response, newValue) {
    $('.'+$(this).data('setvalue')).text(newValue + inWords2(newValue));
}
    
});
});
var a = ['', 'one ', 'two ', 'three ', 'four ', 'five ', 'six ', 'seven ', 'eight ', 'nine ', 'ten ', 'eleven ', 'twelve ', 'thirteen ', 'fourteen ', 'fifteen ', 'sixteen ', 'seventeen ', 'eighteen ', 'nineteen '];
var b = ['', '', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];
function inWords(num,dvcls) {
if ((num = num.toString()).length > 9) return 'overflow';
n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
if (!n) return;
var str = '';
str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'crore ' : '';
str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'lakh ' : '';
str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'thousand ' : '';
str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'hundred ' : '';
str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) : '';
jQuery('.'+dvcls).text('(Rupees '+capWords(str)+' Only)')
}
function inWords2(num) {
if ((num = num.toString()).length > 9) return '';
n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
if (!n) return;
var str = '';
str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'crore ' : '';
str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'lakh ' : '';
str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'thousand ' : '';
str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'hundred ' : '';
str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) : '';
return ' (Rupees '+capWords(str)+' Only)';
}
function capWords(str){ 
var words = str.split(" "); 
for (var i=0 ; i < words.length ; i++){ 
var testwd = words[i]; 
var firLet = testwd.substr(0,1); 
var rest = testwd.substr(1, testwd.length -1) 
words[i] = firLet.toUpperCase() + rest 
} 
return words.join(" "); 
}

function stopscroll(){
   var oldScroll = $(window).scrollTop();
   $( window ).one('scroll', function() {
       $(window).scrollTop( oldScroll ); //disable scroll just once
   });
}

$(document).ready(function (){
   $('.downloaddoc').on('click', function(){
      $('#doc_type').val($(this).data('type'))
      $('#downloadlegaldoc').modal();

   })

   $("#documentdownload").validate({
      submitHandler: function(form) {
         $('#doc_header').val($('#editor #mainheader').html());
         $('#content').val($('#editor #maincontent').html());
         $('#doc_footer').val($('#editor #mainfootert').html()); 
         setTimeout(function(){
          form.submit();
        },100)
         
      }
   });
})
</script>
@endsection
