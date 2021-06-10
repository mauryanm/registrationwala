<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="row">
          <div class="col-md-6 bg-light pt-2 d-none d-md-block"><img src="/images/associate.png"  alt="associate"/>
            <div class="row justify-content-center align-self-center">
              <div class="col bg-dark text-white normal-line-height pt-2 pb-2 text-center"> <strong>25000+</strong> <small>Satisfied Clients</small></div>
              <div class="col bg-dark seplr text-white normal-line-height pt-2 pb-2 text-center"> <strong>250+</strong> <small>Licenses and Registration</small> </div>
              <div class="col bg-dark text-white normal-line-height pt-2 pb-2 text-center"> <strong>10</strong> <small>Branches across India</small></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="text-left">
              <button type="button" class="close p-2" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="login-wrapper">
              <div class="form-title text-center mt-3">
                <h4>Login</h4>
              </div>
              <div class="d-flex flex-column text-center">
                <form>
                  <div class="form-group">
                    <input type="email" class="form-control radius0" placeholder="User Name">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control radius0" id="password1" placeholder="Password">
                  </div>
                  <span class="pull-right normal-text-size mb-2"> <a href="#">Forgot Password ?</a></span>
                  <button type="button" class="btn btn-dark btn-sm btn-block btn-round radius0">Login</button>
                </form>
                <div>or</div>
                <div class="row no-gutters ">
                  <div class="col-md-6">
                    <button type="button" class="btn  btn-fb btn-sm btn-block btn-round radius0 normal-text-size"> <span class="btn-label"><i class="icon fa fa-facebook"></i></span> Login with Facebook</button>
                  </div>
                  <div class="col-md-6">
                    <button type="button" class="btn btn-gm btn-sm btn-block btn-round radius0 normal-text-size "> <span class="btn-label"><i class="icon fa fa-google"></i></span> Login with Gmail</button>
                  </div>
                </div>
                <a href="" class="btn btn-info btn-sm p-0 btn-round radius0 text-left normal-text-size mt-2"> <span class="btn-label"><i class="fa fa-users"></i></span> Associate Login</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="row">
          <div class="col-md-6 bg-light d-none d-md-block"><img class="pt-5 mt-3" src="/images/associate.png"  alt="associate"/>
            <div class="row justify-content-center align-self-baseline pt-5">
              <div class="col bg-dark text-white normal-line-height pt-2 pb-2 text-center"> <strong>25000+</strong> <small>Satisfied Clients</small></div>
              <div class="col bg-dark seplr text-white normal-line-height pt-2 pb-2 text-center"> <strong>250+</strong> <small>Licenses and Registration</small> </div>
              <div class="col bg-dark text-white normal-line-height pt-2 pb-2 text-center"> <strong>10</strong> <small>Branches across India</small></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="text-left">
              <button type="button" class="close p-2" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="login-wrapper">
              <div class="form-title text-center mt-3">
                <h4 class="mb-0 pb-0"> Register</h4>
                <small class="text-muted mb-1">Please register to get access your activity.</small>
              </div>
              <div class="d-flex flex-column text-center">
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control radius0" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control radius0" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control radius0" placeholder="Phone">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control radius0"  placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control radius0" placeholder="Confirm Password">
                  </div>
                  <button type="button" class="btn btn-dark btn-sm btn-block btn-round radius0">Register</button>
                </form>
                <div>or</div>
                <div class="row no-gutters ">
                  <div class="col-md-6">
                    <button type="button" class="btn  btn-fb btn-sm btn-block btn-round radius0 normal-text-size"> <span class="btn-label"><i class="icon fa fa-facebook"></i></span> Login with Facebook</button>
                  </div>
                  <div class="col-md-6">
                    <button type="button" class="btn btn-gm btn-sm btn-block btn-round radius0 normal-text-size "> <span class="btn-label"><i class="icon fa fa-google"></i></span> Login with Gmail</button>
                  </div>
                </div>
                <a href="" class="btn btn-info btn-sm p-0 btn-round radius0 text-left normal-text-size mt-2"> <span class="btn-label"><i class="fa fa-users"></i></span> Associate Login</a> </div>
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
        <div class="col-md-4 text-center text-md-left"> <a href="index.php"><img src="{{Voyager::image(setting('site.logo'))}}" alt="Logo" class="img-fluid"></a> </div>
        <div class="col-md-8">
          <ul class="list-inline text-center text-md-right mb-3 top-nav">
            <li class="list-inline-item"><a  href="become-an-associate.php"><i class="fa fa-user" aria-hidden="true"></i> Become an Associate</a></li>
            <li class="list-inline-item"><a href="javascript:void(0)"  data-toggle="modal" data-target="#loginModal"><i class="fa fa-sign-in" aria-hidden="true" ></i> Login</a></li>
            <li class="list-inline-item"><a href="javascript:void(0)"  data-toggle="modal" data-target="#registerModal" > <i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>
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
          <!-- <nav class="navbar navbar-expand-lg pl-0 pt-1 pb-1 pr-0 sticky-top" id="navbar_top" >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fa fa-bars text-white" aria-hidden="true"></i> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav nav-fill w-100">
                <li class="nav-item"> <a class="nav-link text-white" href="#">Home</a> </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle text-white" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Business Registration</a>
                  <div class="dropdown-menu radius0" >
                    <div class="row">
                      <div class="col-md-3">
                        <h4> Business Registration</h4>
                        <ul>
                          <li><a href="#">Company Registration</a></li>
                          <li><a href="#">Private Limited Company</a></li>
                          <li><a href="#">One Person Company</a></li>
                          <li><a href="#">Nidhi Company</a></li>
                          <li><a href="#">Section 8 Company</a></li>
                          <li><a href="#"> Startup Registration</a></li>
                          <li><a href="#">Producer Company</a></li>
                          <li><a href="#"> Public Limited Company</a></li>
                          <li><a href="#">Sole Proprietorship</a></li>
                          <li><a href="#">Limited Liability Partnership</a></li>
                          <li><a href="#"> Partnership Registration</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <h4> Search business name</h4>
                        <ul>
                          <li><a href="#"> Company Details Search</a></li>
                          <li><a href="#">Check Company Name Availability</a></li>
                          <li><a href="#">LLP Detail Search</a></li>
                          <li><a href="#">Check LLP Name Availability</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <h4>Convert your business</h4>
                        <ul>
                          <li><a href="#"> Partnership to LLP</a></li>
                          <li><a href="#">Sole Proprietorship to Pvt Ltd</a></li>
                          <li><a href="#">Private Limited to Public Limited</a></li>
                          <li><a href="#">Private Limited to OPC</a></li>
                          <li><a href="#">Public Limited to Private Limited</a></li>
                          <li><a href="#">OPC to Private Limited</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle text-white" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Compliances </a>
                  <div class="dropdown-menu">
                    <div class="row">
                      <div class="col-md-3">
                        <h4> Mandatory Complainces</h4>
                        <ul>
                          <li><a href="#"> Annual Compliances for Pvt Ltd</a></li>
                          <li><a href="#">Annual Compliances for OPC</a></li>
                          <li><a href="#">Annual Compliances for LLP</a></li>
                          <li><a href="#">ROC Annual Filing</a></li>
                          <li><a href="#">Annual Compliance for Public Limited Company</a></li>
                          <li><a href="#">Section 8 Annual Compliance</a></li>
                          <li><a href="#">Nidhi Company ROC Filings</a></li>
                          <li><a href="#">Annual Compliance for Producer Company</a></li>
                          <li><a href="#">GST Return Filing</a></li>
                          <li><a href="#">Director KYC DIR 3 KYC</a></li>
                          <li><a href="#">Accounting And Book Keeping</a></li>
                          <li><a href="#">Audit of the Business</a></li>
                          <li><a href="#">TDS Return</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <h4>Closing the company</h4>
                        <ul>
                          <li><a href="#"> Close One Person Company</a></li>
                          <li><a href="#"> Close Private Limited Company</a></li>
                          <li><a href="#"> Close Public Limited Company</a></li>
                          <li><a href="#"> Close Limited Liability Partnership</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <h4>Other Compliances</h4>
                        <ul>
                          <li><a href="#">Form-INC-20A</a></li>
                          <li><a href="#">INC-22A ACTIVE Form</a></li>
                          <li><a href="#">Form DPT-3</a></li>
                          <li><a href="#">Form MSME-1</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <h4> Change your business</h4>
                        <ul>
                          <li><a href="#"> Change Company Name</a></li>
                          <li><a href="#">Change of Place of the Company</a></li>
                          <li><a href="#">Increase in Authorized Capital</a></li>
                          <li><a href="#">Removal And Addition Of Directors / Partner</a></li>
                          <li><a href="#">Change in LLP Agreements</a></li>
                          <li><a href="#">Dematerialization of Shares</a></li>
                          <li><a href="#">Removal of Director Disqualification</a></li>
                          <li><a href="#">XBRL Filing</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Telecom </a>
                  <div class="dropdown-menu">
                    <div class="row">
                      <div class="col-md-3">
                        <h4> Licenses</h4>
                        <ul>
                          <li><a href="#"> NLD License</a></li>
                          <li><a href="#"> ILD License</a></li>
                          <li><a href="#"> ISP License </a></li>
                          <li><a href="#"> UL VNO License</a></li>
                          <li><a href="#"> Network Licenses </a></li>
                          <li><a href="#"> Non Network License</a></li>
                          <li><a href="#"> DPL/NDPL License</a></li>
                          <li><a href="#"> Access Service License</a></li>
                          <li><a href="#"> Experiemental Licenses</a></li>
                          <li><a href="#"> Import Licenses WPC </a></li>
                          <li><a href="#"> Demonstration License</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <h4> Registration</h4>
                        <ul>
                          <li><a href="#"> ETA Certificate </a></li>
                          <li><a href="#"> TEC Certification </a></li>
                          <li><a href="#"> MSO Registration </a></li>
                          <li><a href="#"> DOT -IP-1 Registration</a></li>
                          <li><a href="#"> Telemarketing Registration</a></li>
                          <li><a href="#"> DOT Compliance</a></li>
                          <li><a href="#"> DOT Consultants</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle text-white" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Regulatory Licenses </a>
                  <div class="dropdown-menu" >
                    <div class="row">
                      <div class="col-md-3">
                        <h4> IRDA</h4>
                        <ul>
                          <li><a href="#"> Insurance Web Aggregator </a></li>
                          <li><a href="#">Insurance Broker License</a></li>
                          <li><a href="#">Corporate Agent License</a></li>
                          <li><a href="#">Insurance Marketing Firm</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <h4> RBI </h4>
                        <ul>
                          <li><a href="#"> FFMC License </a></li>
                          <li><a href="#">NBFC License </a></li>
                          <li><a href="#">P2P License </a></li>
                          <li><a href="#">Money Wallet License </a></li>
                          <li><a href="#">Payment Gateway License</a></li>
                          <li><a href="#"> FEMA consultants</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <h4> Legal Metrology</h4>
                        <ul>
                          <li><a href="#"> Manufacturer License</a></li>
                          <li><a href="#">Importer Registration</a></li>
                          <li><a href="#">Dealer Certification</a></li>
                          <li><a href="#">Packer License</a></li>
                          <li><a href="#">Model Approval Certificate</a></li>
                          <li><a href="#">Legal Metrology Certificate</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <h4>Information Broadcasting</h4>
                        <ul>
                          <li><a href="#">MSO License </a></li>
                          <li><a href="#">Uplinking/Downlinking</a></li>
                          <li><a href="#">Local Cable Operator</a></li>
                          <li><a href="#">Temprory Uplinking</a></li>
                          <li><a href="#">DTH Operator</a></li>
                          <li><a href="#">HITS Operator</a></li>
                          <li><a href="#">News Agencies</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle text-white" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> IPR </a>
                  <div class="dropdown-menu">
                    <div class="row">
                      <div class="col-md-3">
                        <h4> Trademark</h4>
                        <ul>
                          <li><a href="#">Trademark Search</a></li>
                          <li><a href="#">Trademark Class Search</a></li>
                          <li><a href="#">Trademark Classes</a></li>
                          <li><a href="#">Trademark Registration</a></li>
                          <li><a href="#">Trademark Objection</a></li>
                          <li><a href="#"> Trademark Renewal</a></li>
                          <li><a href="#">Trademark Restoration</a></li>
                          <li><a href="#"> Trademark Assignment</a></li>
                          <li><a href="#">Trademark Hearing</a></li>
                          <li><a href="#">Trademark Opposition</a></li>
                          <li><a href="#"> Trademark Infringement</a></li>
                          <li><a href="#"> Trademark Investigation</a></li>
                          <li><a href="#">Trademark Logo</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <h4> Copyright</h4>
                        <ul>
                          <li><a href="#">Copyright Registration</a></li>
                          <li><a href="#">Copyright Objection</a></li>
                          <li><a href="#">Songs Copyright</a></li>
                          <li><a href="#">Sound Recording Copyright</a></li>
                          <li><a href="#">Computer Software Copyright</a></li>
                          <li><a href="#">Logo Copyright for Goods</a></li>
                          <li><a href="#">Logo Copyright for Service</a></li>
                          <li><a href="#">Artistic Work/Painting Copyright</a></li>
                          <li><a href="#">Cinematography Copyright</a></li>
                          <li><a href="#">Copyright a Book</a></li>
                          <li><a href="#">Literature/Dramatic Copyright</a></li>
                          <li><a href="#">Music Notation Copyright</a></li>
                          <li><a href="#">Phrase/Slogan Copyright</a></li>
                          <li><a href="#">Symbol Copyright</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <h4> Patent</h4>
                        <ul>
                          <li><a href="#"> Patent Search</a></li>
                          <li><a href="#">Patent Complete Registration</a></li>
                          <li><a href="#">Patent Provisional Registration</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <h4> Design</h4>
                        <ul>
                          <li><a href="#">Design Registration</a></li>
                          <li><a href="#">Logo Design</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle text-white" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Misc </a>
                  <div class="dropdown-menu">
                    <div class="row">
                      <div class="col-md-3">
                        <h4> Ayush </h4>
                        <ul>
                          <li><a href="#">Ayush License </a></li>
                          <li><a href="#">Loan License </a></li>
                          <li><a href="#">Retail License </a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <h4> BIS</h4>
                        <ul>
                          <li><a href="#"> BIS for Toys</a></li>
                          <li><a href="#">CRS BIS</a></li>
                          <li><a href="#">Bis for equipments</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <h4> ------</h4>
                        <ul>
                          <li><a href="#"> EPR Registration</a></li>
                          <li><a href="#">RNI Registration</a></li>
                          <li><a href="#">BEE Certification </a></li>
                          <li><a href="#">CDSCO Registration</a></li>
                          <li><a href="#">PSARA License </a></li>
                          <li><a href="#">APEDA Registration</a></li>
                          <li><a href="#">RERA Registration</a></li>
                          <li><a href="#"> FCRA Registration</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Other </a>
                  <div class="dropdown-menu">
                    <div class="row">
                      <div class="col-md-3">
                        <ul>
                          <li><a href="#">Society Registration</a></li>
                          <li><a href="#">MSME Registration</a></li>
                          <li><a href="#">ISO 22000 Certification</a></li>
                          <li><a href="#">HACCP Certification</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <ul>
                          <li><a href="#">Trust Registration</a></li>
                          <li><a href="#">Certification</a></li>
                          <li><a href="#">CE Marking Certification</a></li>
                          <li><a href="#">HALAL Certification</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <ul>
                          <li><a href="#">RWA Registration</a></li>
                          <li><a href="#">ISO 9001 Certification</a></li>
                          <li><a href="#">ISO 27001 Certification</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <ul>
                          <li><a href="#">80G and 12A Registration</a></li>
                          <li><a href="#">ISO-14001 Certification</a></li>
                          <li><a href="#">ISO 13485 Certification</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item"> <a class="nav-link text-white" href="blog.php">Our Blogs</a> </li>
              </ul>
            </div>
          </nav> -->
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


