<!DOCTYPE html>
<html amp lang="en">
   <head>
      <meta charset="utf-8" />
      <title>@yield('title',setting('site.title'))</title>
      <meta name="description" content="@yield('description',setting('site.description'))">
      <meta name="keywords" content="@yield('keywords', setting('site.keywords'))">
      <meta name="author" content="@yield('author')">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
      <meta name="twitter:card" content="URL"/>
      <meta name="twitter:site" content="@Registrationwla"/>
      <meta name="twitter:title" content="@yield('title',setting('site.title'))"/>
      <meta name="twitter:description" content="@yield('description',setting('site.description'))"/>
      <meta name="twitter:image" content="{{ asset(Voyager::image(setting('site.logo')))}}"/>

      <link rel="icon" href="{{ asset('/assets/images/icon/favicon.png') }}" type="image/gif" >
      <link rel="canonical" href="{{ str_replace('/amp','',url()->current() )}}" />
      <link rel="amphtml" href="{{ url()->current() }}">
      <!-- <link rel="manifest" href="/manifest.json"> -->
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="msapplication-starturl" content="/">
      <meta name="theme-color" content="#e5e5e5">

      <meta name="google-site-verification" content="KhTzsOArUyP0zA16qZoW-QBM1LXTJP9rT9rkI35AR7g" />
      <meta name="DC.title" content="Registration Consultant Services" />
      <meta name="geo.region" content="IN-DL" />
      <meta name="geo.placename" content="KOHAT ENCLAVE" />
      <meta name="geo.position" content="31.270669;72.323003" />
      <meta name="ICBM" content="31.270669, 72.323003" />
      <meta name="viewport" content="width=device-width" />
      <script async src="https://cdn.ampproject.org/v0.js"></script>
      <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
      <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
      <script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
      <script async custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>
      <script async custom-element="amp-list" src="https://cdn.ampproject.org/v0/amp-list-0.1.js"></script>
      <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
      <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
      <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
      <script async custom-element="amp-fit-text" src="https://cdn.ampproject.org/v0/amp-fit-text-0.1.js"></script>
   @if (Request::is(__('voyager::post.post_title').'*'))
      <script async custom-element="amp-facebook-page" src="https://cdn.ampproject.org/v0/amp-facebook-page-0.1.js"></script>
      <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
      <script async custom-element="amp-twitter" src="https://cdn.ampproject.org/v0/amp-twitter-0.1.js"></script>
      @endif
      <script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>
      <!-- <script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script> -->
      <!-- <script async custom-element="amp-image-lightbox" src="https://cdn.ampproject.org/v0/amp-image-lightbox-0.1.js"></script> -->
      <!-- <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script> -->

      <!-- <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script> -->
      <style amp-boilerplate>
body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}
@-webkit-keyframes -amp-start{from{visibility:hidden}
to{visibility:visible}
}@-moz-keyframes -amp-start{from{visibility:hidden}
to{visibility:visible}
}@-ms-keyframes -amp-start{from{visibility:hidden}
to{visibility:visible}
}@-o-keyframes -amp-start{from{visibility:hidden}
to{visibility:visible}
}@keyframes -amp-start{from{visibility:hidden}
to{visibility:visible}
}</style><noscript><style amp-boilerplate="">body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}
</style></noscript><style amp-custom="">html{font-family:sans-serif;line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}
body{margin:0}
article,aside,footer,header,nav,section{display:block}
figcaption,figure,main{display:block}
figure{margin:1em 40px}
hr{box-sizing:content-box;height:0;overflow:visible}
pre{font-family:monospace,monospace;font-size:1em}
a{background-color:transparent;-webkit-text-decoration-skip:objects}
a:active,a:hover{outline-width:0}
abbr[title]{border-bottom:0;text-decoration:underline;text-decoration:underline dotted}
b,strong{font-weight:inherit;font-weight:bolder}
code,kbd,samp{font-family:monospace,monospace;font-size:1em}
dfn{font-style:italic}
mark{background-color:#ff0;color:#000}
small{font-size:80%}
sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}
sub{bottom:-0.25em}
sup{top:-0.5em}
audio,video{display:inline-block}
audio:not([controls]){display:none;height:0}
img{border-style:none}
svg:not(:root){overflow:hidden}
button,input,optgroup,select,textarea{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0}
button,input{overflow:visible}
button,select{text-transform:none}
[type='reset'],[type='submit'],button,html [type='button']{-webkit-appearance:button}
[type='button']::-moz-focus-inner,[type='reset']::-moz-focus-inner,[type='submit']::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}
[type='button']:-moz-focusring,[type='reset']:-moz-focusring,[type='submit']:-moz-focusring,button:-moz-focusring{outline:1px dotted ButtonText}
fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}
legend{box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}
progress{display:inline-block;vertical-align:baseline}
textarea{overflow:auto}
[type='checkbox'],[type='radio']{box-sizing:border-box;padding:0}
[type='number']::-webkit-inner-spin-button,[type='number']::-webkit-outer-spin-button{height:auto}
[type='search']{-webkit-appearance:textfield;outline-offset:-2px}
[type='search']::-webkit-search-cancel-button,[type='search']::-webkit-search-decoration{-webkit-appearance:none}
::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}
details,menu{display:block}
summary{display:list-item}
canvas{display:inline-block}
[hidden],template{display:none}
.h00{font-size:4rem}
.h0,.h1{font-size:3rem}
.h2{font-size:2rem}
.h3{font-size:1.5rem}
.h4{font-size:1.125rem}
.h5{font-size:.875rem}
.h6{font-size:.75rem}
.font-family-inherit{font-family:inherit}
.font-size-inherit{font-size:inherit}
.text-decoration-none{text-decoration:none}
.bold{font-weight:700}
.regular{font-weight:400}
.italic{font-style:italic}
.caps{text-transform:uppercase;letter-spacing:.2em}
.left-align{text-align:left}
.center{text-align:center}
.right-align{text-align:right}
.justify{text-align:justify}
.nowrap{white-space:nowrap}
.break-word{word-wrap:break-word}
.line-height-1{line-height:1rem}
.line-height-2{line-height:1.125rem}
.line-height-3{line-height:1.5rem}
.line-height-4{line-height:2rem}
.list-style-none{list-style:none}
.underline{text-decoration:underline}
.truncate{max-width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}
.list-reset{list-style:none;padding-left:0}
.inline{display:inline}
.block{display:block}
.inline-block{display:inline-block}
.table{display:table}
.table-cell{display:table-cell}
.overflow-hidden{overflow:hidden}
.overflow-scroll{overflow:scroll}
.overflow-auto{overflow:auto}
.clearfix:after,.clearfix:before{content:' ';display:table}
.clearfix:after{clear:both}
.left{float:left}
.right{float:right}
.fit{max-width:100%}
.max-width-1{max-width:24rem}
.max-width-2{max-width:32rem}
.max-width-3{max-width:48rem}
.max-width-4{max-width:64rem}
.border-box{box-sizing:border-box}
.align-baseline{vertical-align:baseline}
.align-top{vertical-align:top}
.align-middle{vertical-align:middle}
.align-bottom{vertical-align:bottom}
.m0{margin:0}
.mt0{margin-top:0}
.mr0{margin-right:0}
.mb0{margin-bottom:0}
.ml0,.mx0{margin-left:0}
.mx0{margin-right:0}
.my0{margin-top:0;margin-bottom:0}
.m1{margin:.5rem}
.mt1{margin-top:.5rem}
.mr1{margin-right:.5rem}
.mb1{margin-bottom:.5rem}
.ml1,.mx1{margin-left:.5rem}
.mx1{margin-right:.5rem}
.my1{margin-top:.5rem;margin-bottom:.5rem}
.m2{margin:1rem}
.mt2{margin-top:1rem}
.mr2{margin-right:1rem}
.mb2{margin-bottom:1rem}
.ml2,.mx2{margin-left:1rem}
.mx2{margin-right:1rem}
.my2{margin-top:1rem;margin-bottom:1rem}
.m3{margin:1.5rem}
.mt3{margin-top:1.5rem}
.mr3{margin-right:1.5rem}
.mb3{margin-bottom:1.5rem}
.ml3,.mx3{margin-left:1.5rem}
.mx3{margin-right:1.5rem}
.my3{margin-top:1.5rem;margin-bottom:1.5rem}
.m4{margin:2rem}
.mt4{margin-top:2rem}
.mr4{margin-right:2rem}
.mb4{margin-bottom:2rem}
.ml4,.mx4{margin-left:2rem}
.mx4{margin-right:2rem}
.my4{margin-top:2rem;margin-bottom:2rem}
.mxn1{margin-left:calc(0.5rem * -1);margin-right:calc(0.5rem * -1)}
.mxn2{margin-left:calc(1rem * -1);margin-right:calc(1rem * -1)}
.mxn3{margin-left:calc(1.5rem * -1);margin-right:calc(1.5rem * -1)}
.mxn4{margin-left:calc(2rem * -1);margin-right:calc(2rem * -1)}
.m-auto{margin:auto}
.mt-auto{margin-top:auto}
.mr-auto{margin-right:auto}
.mb-auto{margin-bottom:auto}
.ml-auto,.mx-auto{margin-left:auto}
.mx-auto{margin-right:auto}
.my-auto{margin-top:auto;margin-bottom:auto}
.p0{padding:0}
.pt0{padding-top:0}
.pr0{padding-right:0}
.pb0{padding-bottom:0}
.pl0,.px0{padding-left:0}
.px0{padding-right:0}
.py0{padding-top:0;padding-bottom:0}
.p1{padding:.5rem}
.pt1{padding-top:.5rem}
.pr1{padding-right:.5rem}
.pb1{padding-bottom:.5rem}
.pl1{padding-left:.5rem}
.py1{padding-top:.5rem;padding-bottom:.5rem}
.px1{padding-left:.5rem;padding-right:.5rem}
.p2{padding:1rem}
.pt2{padding-top:1rem}
.pr2{padding-right:1rem}
.pb2{padding-bottom:1rem}
.pl2{padding-left:1rem}
.py2{padding-top:1rem;padding-bottom:1rem}
.px2{padding-left:1rem;padding-right:1rem}
.p3{padding:1.5rem}
.pt3{padding-top:1.5rem}
.pr3{padding-right:1.5rem}
.pb3{padding-bottom:1.5rem}
.pl3{padding-left:1.5rem}
.py3{padding-top:1.5rem;padding-bottom:1.5rem}
.px3{padding-left:1.5rem;padding-right:1.5rem}
.p4{padding:2rem}
.pt4{padding-top:2rem}
.pr4{padding-right:2rem}
.pb4{padding-bottom:2rem}
.pl4{padding-left:2rem}
.py4{padding-top:2rem;padding-bottom:2rem}
.px4{padding-left:2rem;padding-right:2rem}
.col{float:left}
.col,.col-right{box-sizing:border-box}
.col-right{float:right}
.col-1{width:8.33333%}
.col-2{width:16.66667%}
.col-3{width:25%}
.col-4{width:33.33333%}
.col-5{width:41.66667%}
.col-6{width:50%}
.col-7{width:58.33333%}
.col-8{width:66.66667%}
.col-9{width:75%}
.col-10{width:83.33333%}
.col-11{width:91.66667%}
.col-12{width:100%}
@media(min-width:40.06rem){.sm-col{float:left;box-sizing:border-box}
.sm-col-right{float:right;box-sizing:border-box}
.sm-col-1{width:8.33333%}
.sm-col-2{width:16.66667%}
.sm-col-3{width:25%}
.sm-col-4{width:33.33333%}
.sm-col-5{width:41.66667%}
.sm-col-6{width:50%}
.sm-col-7{width:58.33333%}
.sm-col-8{width:66.66667%}
.sm-col-9{width:75%}
.sm-col-10{width:83.33333%}
.sm-col-11{width:91.66667%}
.sm-col-12{width:100%}
}@media(min-width:52.06rem){.md-col{float:left;box-sizing:border-box}
.md-col-right{float:right;box-sizing:border-box}
.md-col-1{width:8.33333%}
.md-col-2{width:16.66667%}
.md-col-3{width:25%}
.md-col-4{width:33.33333%}
.md-col-5{width:41.66667%}
.md-col-6{width:50%}
.md-col-7{width:58.33333%}
.md-col-8{width:66.66667%}
.md-col-9{width:75%}
.md-col-10{width:83.33333%}
.md-col-11{width:91.66667%}
.md-col-12{width:100%}
}@media(min-width:64.06rem){.lg-col{float:left;box-sizing:border-box}
.lg-col-right{float:right;box-sizing:border-box}
.lg-col-1{width:8.33333%}
.lg-col-2{width:16.66667%}
.lg-col-3{width:25%}
.lg-col-4{width:33.33333%}
.lg-col-5{width:41.66667%}
.lg-col-6{width:50%}
.lg-col-7{width:58.33333%}
.lg-col-8{width:66.66667%}
.lg-col-9{width:75%}
.lg-col-10{width:83.33333%}
.lg-col-11{width:91.66667%}
.lg-col-12{width:100%}
}.flex{display:-ms-flexbox;display:flex}
@media(min-width:40.06rem){.sm-flex{display:-ms-flexbox;display:flex}
}@media(min-width:52.06rem){.md-flex{display:-ms-flexbox;display:flex}
}@media(min-width:64.06rem){.lg-flex{display:-ms-flexbox;display:flex}
}.flex-column{-ms-flex-direction:column;flex-direction:column}
.flex-wrap{-ms-flex-wrap:wrap;flex-wrap:wrap}
.items-start{-ms-flex-align:start;align-items:flex-start}
.items-end{-ms-flex-align:end;align-items:flex-end}
.items-center{-ms-flex-align:center;align-items:center}
.items-baseline{-ms-flex-align:baseline;align-items:baseline}
.items-stretch{-ms-flex-align:stretch;align-items:stretch}
.self-start{-ms-flex-item-align:start;align-self:flex-start}
.self-end{-ms-flex-item-align:end;align-self:flex-end}
.self-center{-ms-flex-item-align:center;-ms-grid-row-align:center;align-self:center}
.self-baseline{-ms-flex-item-align:baseline;align-self:baseline}
.self-stretch{-ms-flex-item-align:stretch;-ms-grid-row-align:stretch;align-self:stretch}
.justify-start{-ms-flex-pack:start;justify-content:flex-start}
.justify-end{-ms-flex-pack:end;justify-content:flex-end}
.justify-center{-ms-flex-pack:center;justify-content:center}
.justify-between{-ms-flex-pack:justify;justify-content:space-between}
.justify-around{-ms-flex-pack:distribute;justify-content:space-around}
.justify-evenly{-ms-flex-pack:space-evenly;justify-content:space-evenly}
.content-start{-ms-flex-line-pack:start;align-content:flex-start}
.content-end{-ms-flex-line-pack:end;align-content:flex-end}
.content-center{-ms-flex-line-pack:center;align-content:center}
.content-between{-ms-flex-line-pack:justify;align-content:space-between}
.content-around{-ms-flex-line-pack:distribute;align-content:space-around}
.content-stretch{-ms-flex-line-pack:stretch;align-content:stretch}
.flex-auto{-ms-flex:1 1 auto;flex:1 1 auto;min-width:0;min-height:0}
.flex-none{-ms-flex:none;flex:none}
.order-0{-ms-flex-order:0;order:0}
.order-1{-ms-flex-order:1;order:1}
.order-2{-ms-flex-order:2;order:2}
.order-3{-ms-flex-order:3;order:3}
.order-last{-ms-flex-order:99999;order:99999}
.relative{position:relative}
.absolute{position:absolute}
.fixed{position:fixed}
.top-0{top:0}
.right-0{right:0}
.bottom-0{bottom:0}
.left-0{left:0}
.z1{z-index:1}
.z2{z-index:2}
.z3{z-index:3}
.z4{z-index:4}
.border{border-style:solid;border-width:1px}
.light-border{border:solid #ddd 1px}
.border-top{border-top-style:solid;border-top-width:1px}
.border-right{border-right-style:solid;border-right-width:1px}
.border-bottom{border-bottom-style:solid;border-bottom-width:1px}
.border-left{border-left-style:solid;border-left-width:1px}
.border-none{border:0}
.rounded{border-radius:3px}
.circle{border-radius:50%}
.rounded-top{border-radius:3px 3px 0 0}
.rounded-right{border-radius:0 3px 3px 0}
.rounded-bottom{border-radius:0 0 3px 3px}
.rounded-left{border-radius:3px 0 0 3px}
.not-rounded{border-radius:0}
.hide{position:absolute;height:1px;width:1px;overflow:hidden;clip:rect(1px,1px,1px,1px)}
@media(max-width:40rem){.xs-hide{display:none}
}@media(min-width:40.06rem) and (max-width:52rem){.sm-hide{display:none}
}@media(min-width:52.06rem) and (max-width:64rem){.md-hide{display:none}
}@media(min-width:64.06rem){.lg-hide{display:none}
}.display-none{display:none}
*{box-sizing:border-box}
body{background:#fff;color:#000;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue,Arial,sans-serif;min-width:315px;overflow-x:hidden;font-smooth:always;-webkit-font-smoothing:antialiased}
main{max-width:700px;margin:0 auto}
.bgimg{background-image:url(../images/hero-banner.jpg)}
.bgimg-color{background-color:rgba(255,255,255,0.8)}
.bgimg-color-service{background-color:rgba(0,41,60,0.84)}
p{padding:0;margin:0}
.ampstart-accent{color:#003f93}
#content:target{margin-top:calc(0px - 3.5rem);padding-top:3.5rem}
.ampstart-title-lg{font-size:3rem;line-height:3.5rem;letter-spacing:.06rem}
.ampstart-title-md{font-size:2rem;line-height:2.5rem;letter-spacing:.06rem}
.ampstart-title-sm{font-size:1.5rem;line-height:2rem;letter-spacing:.06rem}
.ampstart-subtitle,body{line-height:1.5rem;letter-spacing:normal}
.ampstart-subtitle{color:#003f93;font-size:1rem}
.ampstart-byline,.ampstart-caption,.ampstart-hint,.ampstart-label{font-size:.875rem;color:#4f4f4f;line-height:1.125rem;letter-spacing:.06rem}
.ampstart-label{text-transform:uppercase}
.ampstart-footer,.ampstart-small-text{font-size:.95rem;line-height:1.8rem;letter-spacing:.06rem}
.ampstart-card{box-shadow:0 1px 1px 0 rgba(0,0,0,0.14),0 1px 1px -1px rgba(0,0,0,0.14),0 1px 5px 0 rgba(0,0,0,0.12)}
.h1,h1{font-size:3rem;line-height:3.5rem}
.h2,h2{font-size:2rem;line-height:2.5rem}
.h3,h3{font-size:1.5rem;line-height:2rem}
.h4,h4{font-size:1.125rem;line-height:1.5rem}
.h5,h5{font-size:.875rem;line-height:1.125rem}
.h6,h6{font-size:.75rem;line-height:1rem}
h1,h2,h3,h4,h5,h6{margin:0;padding:0;font-weight:400;letter-spacing:.06rem}
a,a:active,a:visited{color:inherit;text-decoration:none}
.ampstart-btn{font-family:inherit;font-weight:inherit;font-size:1rem;line-height:1.125rem;padding:.7em .8em;text-decoration:none;white-space:nowrap;word-wrap:normal;vertical-align:middle;cursor:pointer;background-color:#000;color:#fff;border:1px solid #fff}
.ampstart-btn:visited{color:#fff}
.ampstart-btn-secondary{background-color:#fff;color:#040202;border:1px solid #040202}
.ampstart-btn-secondary:visited{color:#040202}
.ampstart-btn:active .ampstart-btn:focus{opacity:.8}
.ampstart-btn[disabled],.ampstart-btn[disabled]:active,.ampstart-btn[disabled]:focus,.ampstart-btn[disabled]:hover{opacity:.5;outline:0;cursor:default}
.ampstart-dropcap:first-letter {color:#040202;font-size:3rem;font-weight:700;float:left;overflow:hidden;line-height:3rem;margin-left:0;margin-right:.5rem}
.ampstart-initialcap{padding-top:1rem;margin-top:1.5rem}
.ampstart-initialcap:first-letter {color:#040202;font-size:3rem;font-weight:700;margin-left:-2px}
.ampstart-pullquote{border:0;border-left:4px solid #040202;font-size:1.5rem;padding-left:1.5rem}
.ampstart-byline time{font-style:normal;white-space:nowrap}
.amp-carousel-button-next {background-image: url('data:image/svg+xml;charset=utf-8,<svg width="18" height="18" viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg"><title>Next</title><path d="M25.557 14.7L13.818 2.961 16.8 0l16.8 16.8-16.8 16.8-2.961-2.961L25.557 18.9H0v-4.2z" fill="%23FFF" fill-rule="evenodd"/></svg>');}
.amp-carousel-button-prev {background-image: url('data:image/svg+xml;charset=utf-8,<svg width="18" height="18" viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg"><title>Previous</title><path d="M33.6 14.7H8.043L19.782 2.961 16.8 0 0 16.8l16.8 16.8 2.961-2.961L8.043 18.9H33.6z" fill="%23FFF" fill-rule="evenodd"/></svg>');}
.ampstart-dropdown{min-width:200px}
.ampstart-dropdown.absolute{z-index:100}
.ampstart-dropdown.absolute>section,.ampstart-dropdown.absolute>section>header{height:100%}
.ampstart-dropdown>section>header{background-color:#040202;border:0;color:#fff}
.ampstart-dropdown>section>header:after{display:inline-block;content:'+';padding:0 0 0 1.5rem;color:#040202;font-weight:700;float:right}
.ampstart-dropdown>[expanded]>header:after{content:'–';float:right}
.absolute .ampstart-dropdown-items{z-index:200}
.ampstart-dropdown-item{background-color:#040202;color:#040202;opacity:.9}
.ampstart-dropdown-item:active,.ampstart-dropdown-item:hover{opacity:1}
.ampstart-footer{background-color:#fff;color:#040202;padding-top:3rem;padding-bottom:3rem}
.ampstart-footer .ampstart-icon{fill:#040202}
.ampstart-footer .ampstart-social-follow li:last-child{margin-right:0}
.ampstart-image-fullpage-hero{color:#fff}
.ampstart-fullpage-hero-heading-text,.ampstart-image-fullpage-hero .ampstart-image-credit{-webkit-box-decoration-break:clone;box-decoration-break:clone;background:#040202;padding:0 1rem .2rem}
.ampstart-image-fullpage-hero>amp-img{max-height:calc(100vh - 3.5rem)}
.ampstart-image-fullpage-hero>amp-img img{-o-object-fit:cover;object-fit:cover}
.ampstart-fullpage-hero-heading{line-height:3.5rem}
.ampstart-fullpage-hero-cta{background:transparent}
.ampstart-readmore{background:linear-gradient(0deg,rgba(0,0,0,0.65) 0,transparent);color:#fff;margin-top:5rem;padding-bottom:3.5rem}
.ampstart-readmore:after{display:block;content:'⌄';font-size:2rem}
.ampstart-readmore-text{background:#040202}
@media(min-width:52.06rem){.ampstart-image-fullpage-hero>amp-img{height:60vh}
}.ampstart-image-heading{color:#fff;background:linear-gradient(0deg,rgba(0,0,0,0.65) 0,transparent)}
.ampstart-image-heading>*{margin:0}
amp-carousel .ampstart-image-with-heading{margin-bottom:0}
.ampstart-image-with-caption figcaption{color:#4f4f4f;line-height:1.125rem}
amp-carousel .ampstart-image-with-caption{margin-bottom:0}
.ampstart-input{max-width:100%;width:300px;min-width:100px;font-size:1rem;line-height:1.5rem}
.ampstart-input [disabled],.ampstart-input [disabled]+label{opacity:.5}
.ampstart-input [disabled]:focus{outline:0}
.ampstart-input>input,.ampstart-input>select,.ampstart-input>textarea{width:100%;margin-top:1rem;line-height:1.5rem;border:0;border-radius:0;border-bottom:1px solid #4a4a4a;background:0;color:#4a4a4a;outline:0}
.ampstart-input>label{color:#003f93;pointer-events:none;text-align:left;font-size:.875rem;line-height:1rem;opacity:0;animation:.2s;animation-timing-function:cubic-bezier(0.4,0,0.2,1);animation-fill-mode:forwards}
.ampstart-input>input:focus,.ampstart-input>select:focus,.ampstart-input>textarea:focus{outline:0}
.ampstart-input>input:focus:-ms-input-placeholder,.ampstart-input>select:focus:-ms-input-placeholder,.ampstart-input>textarea:focus:-ms-input-placeholder{color:transparent}
.ampstart-input>input:focus::placeholder,.ampstart-input>select:focus::placeholder,.ampstart-input>textarea:focus::placeholder{color:transparent}
.ampstart-input>input:not(:placeholder-shown):not([disabled])+label,.ampstart-input>select:not(:placeholder-shown):not([disabled])+label,.ampstart-input>textarea:not(:placeholder-shown):not([disabled])+label{opacity:1}
.ampstart-input>input:focus+label,.ampstart-input>select:focus+label,.ampstart-input>textarea:focus+label{animation-name:a}
@keyframes a{to{opacity:1}
}.service-input>input,.service-input>textarea{width:100%;min-height:40px;padding:2px 10px;line-height:22px}
.ampstart-input>label:after{content:'';height:2px;position:absolute;bottom:0;left:45%;background:#003f93;transition:.2s;transition-timing-function:cubic-bezier(0.4,0,0.2,1);visibility:hidden;width:10px}
.ampstart-input>input:focus+label:after,.ampstart-input>select:focus+label:after,.ampstart-input>textarea:focus+label:after{left:0;width:100%;visibility:visible}
.ampstart-input>input[type='search']{-webkit-appearance:none;-moz-appearance:none;appearance:none}
.ampstart-input>input[type='range']{border-bottom:0}
.ampstart-input>input[type='range']+label:after{display:none}
.ampstart-input>select{-webkit-appearance:none;-moz-appearance:none;appearance:none}
.ampstart-input>select+label:before{content:'⌄';line-height:1.5rem;position:absolute;right:5px;zoom:2;top:0;bottom:0;color:#003f93}
.ampstart-input-chk,.ampstart-input-radio{width:auto;color:#4a4a4a}
.ampstart-input input[type='checkbox'],.ampstart-input input[type='radio']{margin-top:0;-webkit-appearance:none;-moz-appearance:none;appearance:none;width:20px;height:20px;border:1px solid #003f93;vertical-align:middle;margin-right:.5rem;text-align:center}
.ampstart-input input[type='radio']{border-radius:20px}
.ampstart-input input[type='checkbox']:not([disabled])+label,.ampstart-input input[type='radio']:not([disabled])+label{pointer-events:auto;animation:none;vertical-align:middle;opacity:1;cursor:pointer}
.ampstart-input input[type='checkbox']+label:after,.ampstart-input input[type='radio']+label:after{display:none}
.ampstart-input input[type='checkbox']:after,.ampstart-input input[type='radio']:after{position:absolute;top:0;left:0;bottom:0;right:0;content:' ';line-height:1.4rem;vertical-align:middle;text-align:center;background-color:#fff}
.ampstart-input input[type='checkbox']:checked:after{background-color:#003f93;color:#fff;content:'✓'}
.ampstart-input input[type='radio']:checked{background-color:#fff}
.ampstart-input input[type='radio']:after{top:3px;bottom:3px;left:3px;right:3px;border-radius:12px}
.ampstart-input input[type='radio']:checked:after{content:'';font-size:3rem;background-color:#003f93}
.ampstart-input>label,_:-ms-lang(x){opacity:1}
.ampstart-input>input:-ms-input-placeholder,_:-ms-lang(x){color:transparent}
.ampstart-input>input::placeholder,_:-ms-lang(x){color:transparent}
.ampstart-input>input::-ms-input-placeholder,_:-ms-lang(x){color:transparent}
.ampstart-input>select::-ms-expand{display:none}
.ampstart-headerbar{background-color:#fff;color:#040202;z-index:999;box-shadow:0 0 5px 2px rgba(0,0,0,0.1)}
.ampstart-headerbar+:not(amp-sidebar),.ampstart-headerbar+amp-sidebar+*{margin-top:3.5rem}
.ampstart-headerbar-nav .ampstart-nav-item{padding:0 1rem;background:transparent;opacity:.8}
.ampstart-headerbar-nav{line-height:3.5rem}
.ampstart-nav-item:active,.ampstart-nav-item:focus,.ampstart-nav-item:hover{opacity:1}
.ampstart-navbar-trigger:focus{outline:0}
.ampstart-nav a,.ampstart-navbar-trigger,.ampstart-sidebar-faq a{cursor:pointer;text-decoration:none}
.ampstart-nav .ampstart-label{color:inherit}
.ampstart-navbar-trigger{line-height:3.5rem;font-size:2rem}
.ampstart-headerbar-nav{-ms-flex:1;flex:1}
.ampstart-nav-search{-ms-flex-positive:.5;flex-grow:.5}
.ampstart-headerbar .ampstart-nav-search:active,.ampstart-headerbar .ampstart-nav-search:focus,.ampstart-headerbar .ampstart-nav-search:hover{box-shadow:none}
.ampstart-nav-search>input{border:0;border-radius:3px;line-height:normal}
.ampstart-nav-dropdown{min-width:200px}
.ampstart-nav-dropdown amp-accordion header{background-color:#fff;border:0}
.ampstart-nav-dropdown amp-accordion ul{background-color:#fff}
.ampstart-nav-dropdown .ampstart-dropdown-item,.ampstart-nav-dropdown .ampstart-dropdown>section>header{background-color:#fff;color:#040202}
.ampstart-nav-dropdown .ampstart-dropdown-item{color:#040202}
.ampstart-sidebar{background-color:#fff;color:#040202;min-width:300px;width:300px}
.ampstart-sidebar .ampstart-icon{fill:#003f93}
.ampstart-sidebar-header{line-height:3.5rem;min-height:3.5rem}
.ampstart-sidebar .ampstart-dropdown-item,.ampstart-sidebar .ampstart-dropdown header,.ampstart-sidebar .ampstart-faq-item,.ampstart-sidebar .ampstart-nav-item,.ampstart-sidebar .ampstart-social-follow{margin:0 0 1rem}
.ampstart-sidebar .ampstart-nav-dropdown{margin:0}
.ampstart-sidebar .ampstart-navbar-trigger{line-height:inherit}
.ampstart-navbar-trigger svg{pointer-events:none}
.ampstart-related-article-section{border-color:#4a4a4a}
.ampstart-related-article-section .ampstart-heading{color:#4a4a4a;font-weight:400}
.ampstart-related-article-readmore{color:#040202;letter-spacing:0}
.ampstart-related-section-items>li{border-bottom:1px solid #4a4a4a}
.ampstart-related-section-items>li:last-child{border:0}
.ampstart-related-section-items .ampstart-image-with-caption{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:center;align-items:center;margin-bottom:0}
.ampstart-related-section-items .ampstart-image-with-caption>amp-img,.ampstart-related-section-items .ampstart-image-with-caption>figcaption{-ms-flex:1;flex:1}
.ampstart-related-section-items .ampstart-image-with-caption>figcaption{padding-left:1rem}
@media(min-width:40.06rem){.ampstart-related-section-items>li{border:0}
.ampstart-related-section-items .ampstart-image-with-caption>figcaption{padding:1rem 0}
.ampstart-related-section-items .ampstart-image-with-caption>amp-img,.ampstart-related-section-items .ampstart-image-with-caption>figcaption{-ms-flex-preferred-size:100%;flex-basis:100%}
}.ampstart-social-box{display:-ms-flexbox;display:flex}
.ampstart-social-box>amp-social-share{background-color:#040202}
.ampstart-icon{fill:#003f93}
.ampstart-input{width:100%}
main .ampstart-social-follow{margin-left:auto;margin-right:auto;width:315px}
main .ampstart-social-follow li{transform:scale(1.8)}
h1+.ampstart-byline time{font-size:1.5rem;font-weight:400}
.navhead{font-weight:600}
.sicon svg{position:relative;top:6px}
.bglight{background-color:#ddd}
.radius10{border-radius:10px}
.sep{margin:0 15px}
.text-center{text-align:center}
.dotted-line{border-bottom:dashed #ccc 1px}
.bluebtn{color:#FFF;border:0;font-size:14px;background:#34495e;cursor:pointer;padding:8px 20px 8px 10px;outline:0;-webkit-transition:all .3s;-moz-transition:all .3s;transition:all .3s;border-radius:6px;text-decoration:none}
.bluebtn svg{position:relative;top:7px;right:4px}
.redbtn{color:#FFF;border:0;font-size:14px;background:#c0392b;cursor:pointer;padding:8px 20px 8px 10px;outline:0;-webkit-transition:all .3s;-moz-transition:all .3s;transition:all .3s;border-radius:6px;text-decoration:none}
.redbtn svg{position:relative;top:7px;right:4px}
.serach-wraper{margin-bottom:10px}
.serach-wraper input[type=search]{padding:3px 6px;min-height:40px}
.serach-wraper input[type=submit]{min-height:40px;background-color:#040202;border-color:#040202;color:#FFF;position:relative;left:-5px}
.bgdark{background-color:#191418}
.bgdark1{background-color:#253944}
.text-white{color:#FFF}
.dottedimg{border-bottom:dashed #f4f4f4 1px}
.tag{border:solid #ccc 1px;margin-top:10px;background-color:#ccc;line-height:33px;font-size:15px;display:inline-block;padding:3px 10px;border-radius:5px}
.price-ribbon{position:relative;display:inline-block;text-align:center}
.ytext{display:inline-block;padding:.5em 1em;max-width:50em;line-height:1.2em;background:#ffd72a;position:relative}
.price-ribbon:after,.price-ribbon:before,.ytext:before,.ytext:after,.abold:before{content:'';position:absolute;border-style:solid}
.price-ribbon:before{top:.3em;left:-30px;width:100%;height:100%;border:0;z-index:-2}
.ytext:before{bottom:100%;left:0;border-width:.5em .7em 0 0;border-color:transparent #fc9544 transparent transparent}
.ytext:after{top:100%;right:0;border-width:.5em 2em 0 0;border-color:#fc9544 transparent transparent transparent}
.price-ribbon:after,.abold:before{top:.5em;right:-2em;border-width:1.1em 1em 1.1em 3em;border-color:#fecc30 transparent #fecc30 #fecc30;z-index:-1}
.abold:before{border-color:#ebeced transparent #ebeced #ebeced;top:.7em;right:-2.3em}
ul.timeline{list-style-type:none;position:relative}
ul.timeline:before{content:' ';background:#8a8686;display:inline-block;position:absolute;left:28px;width:2px;height:100%;z-index:400}
ul.timeline>li{margin:20px 0;padding-left:20px}
ul.timeline>li:before{content:' ';background:white;display:inline-block;position:absolute;border-radius:50%;border:3px solid #8a8686;left:20px;width:15px;height:15px;z-index:400}
amp-selector[role=tablist].tabs-with-flex{display:flex;flex-wrap:wrap}
amp-selector[role=tablist].tabs-with-flex [role=tab]{flex-grow:1;text-align:center;padding:var(--space-1)}
amp-selector[role=tablist].tabs-with-flex [role=tab][selected]{outline:0;border-bottom:2px solid var(--color-primary)}
amp-selector[role=tablist].tabs-with-flex [role=tabpanel]{display:none;width:100%;order:1;padding:var(--space-4)}
amp-selector[role=tablist].tabs-with-flex [role=tab][selected]+[role=tabpanel]{display:block}
amp-selector[role=tablist].tabs-with-selector{display:flex}
amp-selector[role=tablist].tabs-with-selector [role=tab][selected]{outline:0;border-bottom:2px solid var(--color-primary)}
amp-selector[role=tablist].tabs-with-selector{display:flex}
amp-selector[role=tablist].tabs-with-selector [role=tab]{width:100%;text-align:center;padding:var(--space-1)}
amp-selector.tabpanels [role=tabpanel]{display:none;padding:var(--space-4)}
amp-selector.tabpanels [role=tabpanel][selected]{outline:0;display:block}
.pagination{display:inline-block}
.pagination a{color:black;float:left;padding:8px 16px;text-decoration:none;transition:background-color .3s}
.pagination a.active{background-color:#253944;color:white}
.pagination a:hover:not(.active){background-color:#ddd}
p{margin-bottom:1rem}
.btn-twitter{color:#fff;background-color:#55acee;border-color:rgba(0,0,0,0.2);padding:0 10px 10px 8px;width:100%}
.btn-twitter svg{position:relative;top:8px}
.btn-twitter:hover,.btn-twitter:focus,.btn-twitter:active,.btn-twitter.active,.open .dropdown-toggle.btn-twitter{color:#fff;background-color:#55acee;border-color:rgba(0,0,0,0.2)}
.btn-twitter:active,.btn-twitter.active,.open .dropdown-toggle.btn-twitter{background-image:none}
.btn-youtube{color:#fff;background-color:#d42428;border-color:rgba(0,0,0,0.2);padding:0 10px 10px 8px;width:100%}
.btn-youtube svg{position:relative;top:8px}
.btn-youtube:hover,.btn-youtube:focus,.btn-youtube:active,.btn-youtube.active,.open .dropdown-toggle.btn-youtube{color:#fff;background-color:#d42428;border-color:rgba(0,0,0,0.2)}
.btn-youtube:active,.btn-youtube.active,.open .dropdown-toggle.btn-youtube{background-image:none}
.views{border:solid #ccc 1px;margin-top:0;background-color:#ccc;line-height:23px;font-size:15px;display:inline-block;padding:3px 10px;border-radius:5px}
.views svg{position:relative;top:3px}
.text-justify{text-align:justify}
.bgimg-video {background-image: url(../images/VIDEO-PAGE-banner.jpg);background-size: cover;}
      </style>
   </head>
   <body>
      <header class="ampstart-headerbar fixed flex justify-start items-center top-0 left-0 right-0 pl2 pr4">
   <div role="button" aria-label="open sidebar" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger pr2" > ☰ </div>
   <amp-img src="{{Voyager::image(setting('site.logo'))}}" width="160" height="60" layout="fixed" class="my0 mx-auto"alt="RW" ></amp-img>
</header>
<!-- Start Sidebar -->
<amp-sidebar id="header-sidebar"  class="ampstart-sidebar px3" layout="nodisplay" >
   <div class="flex justify-start items-center ampstart-sidebar-header">
      <div role="button" aria-label="close sidebar"on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger items-start" > ✕ </div>
   </div>
   <nav class="ampstart-sidebar-nav ampstart-nav">
      {{menu('Frontend', 'ampmenu')}}
   </nav>
  <ul class="list-reset m0 mb4 mt3 flex flex-wrap">
    @if(setting('site.facebook_link'))
      <li class="mr2">
         <a href="{{setting('site.facebook_link')}}" class="text-decoration-none ">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="126.445 2.281 589 589">
               <circle cx="420.945" cy="296.781" r="294.5" fill="#3c5a9a"/>
               <path fill="#fff" d="M516.704 92.677h-65.239c-38.715 0-81.777 16.283-81.777 72.402.189 19.554 0 38.281 0 59.357H324.9v71.271h46.174v205.177h84.847V294.353h56.002l5.067-70.117h-62.531s.14-31.191 0-40.249c0-22.177 23.076-20.907 24.464-20.907 10.981 0 32.332.032 37.813 0V92.677h-.032z"/>
            </svg>
         </a>
      </li>
      @endif
      @if(setting('site.youtube_link'))
      <li class="mr2">
         <a href="{{setting('site.youtube_link')}}" class="text-decoration-none ">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 512 512">
               <path fill="#D42428" d="M7.9 256C7.9 119 119 7.9 256 7.9S504.1 119 504.1 256 393 504.1 256 504.1 7.9 393 7.9 256z"/>
               <path fill="#CC202D" d="M431.4 80.6c96.9 96.9 96.9 254 0 350.8-96.9 96.9-254 96.9-350.8 0L431.4 80.6z"/>
               <path fill="#BA202E" d="M499.1 305.7L376.3 182.9l-144.8 16.5L143.9 335l163.7 163.7c96.2-20.4 171.9-96.5 191.5-193z"/>
               <path fill="#FFF" fill-rule="evenodd" d="M385.8 208.1c0-20.8-16.8-37.6-37.6-37.6H171.6c-20.8 0-37.6 16.9-37.6 37.6v101c0 20.8 16.8 37.7 37.6 37.7h176.5c20.8 0 37.6-16.9 37.6-37.7v-101zm-151.1 93.1v-94.8l71.9 47.4-71.9 47.4z" clip-rule="evenodd"/>
            </svg>
         </a>
      </li>
      @endif
      @if(setting('site.twitter_link'))
      <li class="mr2">
         <a href="{{setting('site.twitter_link')}}" class="text-decoration-none ">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" enable-background="new 0 0 112.197 112.197" viewBox="0 0 112.197 112.197">
               <circle cx="56.099" cy="56.098" r="56.098" fill="#55acee"/>
               <path fill="#f1f2f2" d="M90.461,40.316c-2.404,1.066-4.99,1.787-7.702,2.109c2.769-1.659,4.894-4.284,5.897-7.417    c-2.591,1.537-5.462,2.652-8.515,3.253c-2.446-2.605-5.931-4.233-9.79-4.233c-7.404,0-13.409,6.005-13.409,13.409    c0,1.051,0.119,2.074,0.349,3.056c-11.144-0.559-21.025-5.897-27.639-14.012c-1.154,1.98-1.816,4.285-1.816,6.742    c0,4.651,2.369,8.757,5.965,11.161c-2.197-0.069-4.266-0.672-6.073-1.679c-0.001,0.057-0.001,0.114-0.001,0.17    c0,6.497,4.624,11.916,10.757,13.147c-1.124,0.308-2.311,0.471-3.532,0.471c-0.866,0-1.705-0.083-2.523-0.239    c1.706,5.326,6.657,9.203,12.526,9.312c-4.59,3.597-10.371,5.74-16.655,5.74c-1.08,0-2.15-0.063-3.197-0.188    c5.931,3.806,12.981,6.025,20.553,6.025c24.664,0,38.152-20.432,38.152-38.153c0-0.581-0.013-1.16-0.039-1.734    C86.391,45.366,88.664,43.005,90.461,40.316L90.461,40.316z"/>
            </svg>
         </a>
      </li>
      @endif
      @if(setting('site.linkedin_link'))
      <li class="mr2">
         <a href="{{setting('site.linkedin_link')}}" class="text-decoration-none ">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 512 512">
               <path fill="#4A86C5" d="M7.9 256C7.9 119 119 7.9 256 7.9S504.1 119 504.1 256 393 504.1 256 504.1 7.9 393 7.9 256z"/>
               <path fill="#3D80B2" d="M431.4 80.6c96.9 96.9 96.9 254 0 350.8-96.9 96.9-254 96.9-350.8 0L431.4 80.6z"/>
               <path fill="#4A86C5" d="M492.3 331.7c.9-2.8 1.7-5.7 2.5-8.6-.8 2.9-1.6 5.8-2.5 8.6z"/>
               <path fill="#377CA5" d="M494.8 323.1zM494.8 323.1L360.4 188.7l-30.6 30.6-21.2-21.3-17.7 17.7L187 111.8l-6.4-2.5-39.9 39.9 48.1 48.1-47.1 47.1 46 46-50.3 50.3 160 159.8c92.1-15.5 167-81.6 194.9-168.9.9-2.7 1.7-5.6 2.5-8.5z"/>
               <path fill="#FFF" d="M383.3 249.2v92H330v-85.8c0-21.6-7.7-36.3-27-36.3-14.7 0-23.5 9.9-27.4 19.5-1.4 3.4-1.8 8.2-1.8 13v89.6h-53.3s.7-145.4 0-160.4h53.3v22.7c-.1.2-.2.4-.3.5h.3v-.5c7.1-10.9 19.7-26.5 48.1-26.5 35.1 0 61.4 22.9 61.4 72.2zM164.7 103.4c-18.2 0-30.2 12-30.2 27.7 0 15.4 11.6 27.7 29.5 27.7h.4c18.6 0 30.2-12.3 30.2-27.7-.5-15.7-11.7-27.7-29.9-27.7zm-27.1 237.8H191V180.8h-53.3v160.4z"/>
            </svg>
         </a>
      </li>
      @endif
  </ul>
   <ul class="ampstart-sidebar-faq list-reset m0">
    @if(setting('site.whatsaap'))
      <li class="ampstart-faq-item">
         <a href="https://api.whatsapp.com/send?phone={{str_replace(' ','',str_replace('-','',setting('site.whatsaap')))}}&amp;text=Lets%20talk%20to%20Registrationwala!" class="text-decoration-none sicon">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 1219.547 1225.016">
               <path fill="#E0E0E0" d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z"/>
               <linearGradient id="a" x1="609.77" x2="609.77" y1="1190.114" y2="21.084" gradientUnits="userSpaceOnUse">
                  <stop offset="0" stop-color="#20b038"/>
                  <stop offset="1" stop-color="#60d66a"/>
               </linearGradient>
               <path fill="url(#a)" d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z"/>
               <path fill="#FFF" fill-rule="evenodd" d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z" clip-rule="evenodd"/>
               <path fill="#FFF" d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z"/>
            </svg>
            {{setting('site.whatsaap')}} 
         </a>
      </li>
      @endif
      @if(setting('site.mobile'))
      <li class="ampstart-faq-item">
         <a href="tel:{{str_replace(' ','',str_replace('-','',setting('site.mobile')))}}" class="text-decoration-none sicon">
            <svg width="28" height="28" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
               <path d="M16 22.621l-3.521-6.795c-.007.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.082-1.026-3.492-6.817-2.106 1.039c-1.622.845-2.298 2.627-2.289 4.843.027 6.902 6.711 18.013 12.212 18.117.575.011 1.137-.098 1.677-.345.121-.055 2.102-1.029 2.11-1.033zm4-5.621h-1v-13h1v13zm-2-2h-1v-9h1v9zm4-1h-1v-7h1v7zm-6-1h-1v-5h1v5zm-2-1h-1v-3h1v3zm10 0h-1v-3h1v3zm-12-1h-1v-1h1v1z"/>
            </svg>
            {{setting('site.mobile')}}
         </a>
      </li>
      @endif
   </ul>
</amp-sidebar>
 @yield('content')
<footer class="ampstart-footer  flex-column  bgdark1 text-white ">
   <main class="p2">
    {{ menu('Footer', 'rwfooter') }}
   </main>
   <h5 class="mb1  text-center h4 bold mb2">Follow Us</h5>
   <ul class="list-reset m0 mb0 flex flex-wrap justify-center">
    @if(setting('site.facebook_link'))
      <li class="mr2">
         <a href="{{setting('site.facebook_link')}}" class="text-decoration-none ">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="126.445 2.281 589 589">
               <circle cx="420.945" cy="296.781" r="294.5" fill="#3c5a9a"/>
               <path fill="#fff" d="M516.704 92.677h-65.239c-38.715 0-81.777 16.283-81.777 72.402.189 19.554 0 38.281 0 59.357H324.9v71.271h46.174v205.177h84.847V294.353h56.002l5.067-70.117h-62.531s.14-31.191 0-40.249c0-22.177 23.076-20.907 24.464-20.907 10.981 0 32.332.032 37.813 0V92.677h-.032z"/>
            </svg>
         </a>
      </li>
      @endif
      @if(setting('site.youtube_link'))
      <li class="mr2">
         <a href="{{setting('site.youtube_link')}}" class="text-decoration-none ">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 512 512">
               <path fill="#D42428" d="M7.9 256C7.9 119 119 7.9 256 7.9S504.1 119 504.1 256 393 504.1 256 504.1 7.9 393 7.9 256z"/>
               <path fill="#CC202D" d="M431.4 80.6c96.9 96.9 96.9 254 0 350.8-96.9 96.9-254 96.9-350.8 0L431.4 80.6z"/>
               <path fill="#BA202E" d="M499.1 305.7L376.3 182.9l-144.8 16.5L143.9 335l163.7 163.7c96.2-20.4 171.9-96.5 191.5-193z"/>
               <path fill="#FFF" fill-rule="evenodd" d="M385.8 208.1c0-20.8-16.8-37.6-37.6-37.6H171.6c-20.8 0-37.6 16.9-37.6 37.6v101c0 20.8 16.8 37.7 37.6 37.7h176.5c20.8 0 37.6-16.9 37.6-37.7v-101zm-151.1 93.1v-94.8l71.9 47.4-71.9 47.4z" clip-rule="evenodd"/>
            </svg>
         </a>
      </li>
      @endif
      @if(setting('site.twitter_link'))
      <li class="mr2">
         <a href="{{setting('site.twitter_link')}}" class="text-decoration-none ">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" enable-background="new 0 0 112.197 112.197" viewBox="0 0 112.197 112.197">
               <circle cx="56.099" cy="56.098" r="56.098" fill="#55acee"/>
               <path fill="#f1f2f2" d="M90.461,40.316c-2.404,1.066-4.99,1.787-7.702,2.109c2.769-1.659,4.894-4.284,5.897-7.417    c-2.591,1.537-5.462,2.652-8.515,3.253c-2.446-2.605-5.931-4.233-9.79-4.233c-7.404,0-13.409,6.005-13.409,13.409    c0,1.051,0.119,2.074,0.349,3.056c-11.144-0.559-21.025-5.897-27.639-14.012c-1.154,1.98-1.816,4.285-1.816,6.742    c0,4.651,2.369,8.757,5.965,11.161c-2.197-0.069-4.266-0.672-6.073-1.679c-0.001,0.057-0.001,0.114-0.001,0.17    c0,6.497,4.624,11.916,10.757,13.147c-1.124,0.308-2.311,0.471-3.532,0.471c-0.866,0-1.705-0.083-2.523-0.239    c1.706,5.326,6.657,9.203,12.526,9.312c-4.59,3.597-10.371,5.74-16.655,5.74c-1.08,0-2.15-0.063-3.197-0.188    c5.931,3.806,12.981,6.025,20.553,6.025c24.664,0,38.152-20.432,38.152-38.153c0-0.581-0.013-1.16-0.039-1.734    C86.391,45.366,88.664,43.005,90.461,40.316L90.461,40.316z"/>
            </svg>
         </a>
      </li>
      @endif
      @if(setting('site.linkedin_link'))
      <li class="mr2">
         <a href="{{setting('site.linkedin_link')}}" class="text-decoration-none ">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 512 512">
               <path fill="#4A86C5" d="M7.9 256C7.9 119 119 7.9 256 7.9S504.1 119 504.1 256 393 504.1 256 504.1 7.9 393 7.9 256z"/>
               <path fill="#3D80B2" d="M431.4 80.6c96.9 96.9 96.9 254 0 350.8-96.9 96.9-254 96.9-350.8 0L431.4 80.6z"/>
               <path fill="#4A86C5" d="M492.3 331.7c.9-2.8 1.7-5.7 2.5-8.6-.8 2.9-1.6 5.8-2.5 8.6z"/>
               <path fill="#377CA5" d="M494.8 323.1zM494.8 323.1L360.4 188.7l-30.6 30.6-21.2-21.3-17.7 17.7L187 111.8l-6.4-2.5-39.9 39.9 48.1 48.1-47.1 47.1 46 46-50.3 50.3 160 159.8c92.1-15.5 167-81.6 194.9-168.9.9-2.7 1.7-5.6 2.5-8.5z"/>
               <path fill="#FFF" d="M383.3 249.2v92H330v-85.8c0-21.6-7.7-36.3-27-36.3-14.7 0-23.5 9.9-27.4 19.5-1.4 3.4-1.8 8.2-1.8 13v89.6h-53.3s.7-145.4 0-160.4h53.3v22.7c-.1.2-.2.4-.3.5h.3v-.5c7.1-10.9 19.7-26.5 48.1-26.5 35.1 0 61.4 22.9 61.4 72.2zM164.7 103.4c-18.2 0-30.2 12-30.2 27.7 0 15.4 11.6 27.7 29.5 27.7h.4c18.6 0 30.2-12.3 30.2-27.7-.5-15.7-11.7-27.7-29.9-27.7zm-27.1 237.8H191V180.8h-53.3v160.4z"/>
            </svg>
         </a>
      </li>
      @endif
  </ul>
</footer>
<div class="bgdark text-center   text-white p2">{{setting('site.copyright')}}</div>
<!-- End Footer -->
   </body>
</html>