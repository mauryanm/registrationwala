
<div class="modal fade" id="getaquote" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
  <div class="modal-dialog modelsize  modal-dialog-centered" role="document">
    <div class="modal-content modelbgimage ">
      <div class="modal-body pb-0 pt-0">
        <div class="row no-gutter">
          <div class="col-md-6"><img src="images/form-images.png" class="img-fluid mt-2"></div>
          <div class="col-md-6 bg-light">
            <div class="text-left">
              <button type="button" class="close p-2" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="login-wrapper">
              <div class="form-title text-center mt-3 mb-1">
                <h4 class="mb-0 pb-0"> Get a Quote</h4>
                <small>Get a Quote within About 30 Minutes and Find Services to Fit Your Needs</small>

                 </div>
              <div class="d-flex flex-column text-center">
                <form autocomplete="off" class="form validateform" method="post" id="getaquoteform">
                  @csrf
                  <input type="hidden" name="source" value="getaquote">
                  <input type="hidden" name="page" value="" id="pagename">
                  <input type="hidden" name="from" value="header">      
                  <div class="form-group">
                    <select class="form-control radius0" name="page_id" id="page_id" onchange="setpagename()" required>
                        <option value="">Get a Quote for</option>
            @foreach ($servicesdata as $hsr)
            <option value="{{ $hsr->id }}">{{ $hsr->title }}</option>
            @endforeach               
                    </select>
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
                 
                  
                  <button type="submit" id="getaquoteformbtn" class="btn btn-dark btn-sm pull-right w-50 btn-round radius0">Submit</button>
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
<div class="sticky-social">
  <ul class="social">
    @if(setting('site.facebook_link'))
    <li class="fb"><a href="{{setting('site.facebook_link')}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    @endif
    @if(setting('site.youtube_link'))
    <li class="yout"><a href="{{setting('site.youtube_link')}}" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
    @endif
    @if(setting('site.twitter_link'))
    <li class="twitter"><a href="{{setting('site.twitter_link')}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    @endif
    @if(setting('site.linkedin_link'))
    <li class="link"><a href="{{setting('site.linkedin_link')}}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
    @endif
  </ul>
</div>
<header class="bg-white">
  <div class="top-header">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center text-md-left"> <a href="{{ url("/") }}"><img src="{{Voyager::image(setting('site.logo'))}}" alt="Logo" class="img-fluid"></a> </div>
        <div class="col-md-8">
          <ul class="list-inline text-center text-md-right mb-3 top-nav">
            <li class="list-inline-item"><a  href="{{ url("become-an-associate") }}"><i class="fa fa-user" aria-hidden="true"></i> Become an Associate</a></li>
            <li class="list-inline-item"><a href="" data-toggle="modal" data-target="#getaquote"><i class="fa fa-money" aria-hidden="true"></i> Get a Quote</a></li>
            <li class="list-inline-item"><a href="{{route('dashboard.login')}}" ><i class="fa fa-sign-in" aria-hidden="true" ></i> Login</a></li>
            <li class="list-inline-item"><a href="{{route('dashboard.register')}}" > <i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>
          </ul>
          <ul class="list-inline text-center text-md-right mb-0">
            @if(setting('site.whatsaap'))
            <li class="list-inline-item"><a  target="_blank" href="https://api.whatsapp.com/send?phone={{str_replace(' ','',str_replace('-','',setting('site.whatsaap')))}}&amp;text=Lets%20talk%20to%20Registrationwala!"><i class="fa fa-whatsapp whatapp"></i> {{setting('site.whatsaap')}}</a></li>
            @endif
            @if(setting('site.mobile'))
            <li class="list-inline-item mr-4"><a  href="tel:{{str_replace(' ','',str_replace('-','',setting('site.mobile')))}}" title="" data-toggle="tooltip" data-original-title="Call us {{setting('site.mobile')}} OR Contact with us @ support@registrationwala.com"><i class="fa fa-mobile mobile"></i> {{setting('site.mobile')}}</a></li>
            @endif
            @if(setting('site.facebook_link'))
            <li class="list-inline-item"><a href="{{setting('site.facebook_link')}}" target="_blank" class="d-none d-lg-block"><i class="fa wp-icon fa-facebook-f"></i></a></li>
            @endif
            @if(setting('site.youtube_link'))
            <li class="list-inline-item"><a href="{{setting('site.youtube_link')}}" target="_blank"  class="d-none d-lg-block"><i class="fa wp-icon fa-youtube "></i></a></li>
            @endif
            @if(setting('site.twitter_link'))
            <li  class="list-inline-item"><a href="{{setting('site.twitter_link')}}" target="_blank"  class="d-none d-lg-block"><i class="fa wp-icon fa-twitter"></i></a></li>
            @endif
            @if(setting('site.linkedin_link'))
            <li class="list-inline-item"><a href="{{setting('site.linkedin_link')}}" target="_blank"  class="d-none d-lg-block"><i class="fa wp-icon fa-linkedin"></i></a></li>
            @endif
        
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="mainbg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          {{menu('Frontend', 'rwmenu')}}
        </div>
      </div>
    </div>
  </div>
</header>
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="Modalsideout" aria-hidden="true">
  <div class="modal-dialog modal-dialog-slideout modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Modalsideout">Modal sideout small</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
      </div>
      <div class="modal-body">
        <p>Explore the history of the classic Lorem Ipsum passage and generate your own text using any number of characters, words, sentences or paragraphs. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $("#getaquoteform").validate({
      submitHandler: function(form) {
        storeformdata(form,'#getaquoteformbtn')
      }
     });
  })
  function setpagename(){
    var text = $("#page_id option:selected").text();
    $('#pagename').val(text);
  }
</script>
