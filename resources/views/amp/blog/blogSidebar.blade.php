<div class="dotted-line mt2 mb2"></div>
<section class="mt3 mb3">
   <amp-facebook-page width="340" height="200" layout="responsive" data-tabs="timeline" data-href="https://www.facebook.com/registrationwala/"></amp-facebook-page>
   <div class="mt2 mb2 text-white">
      <a href="https://twitter.com/intent/follow?original_referer=https%3A%2F%2Fdeveloper.twitter.com%2F&ref_src=twsrc%5Etfw%7Ctwcamp%5Ebuttonembed%7Ctwterm%5Efollow%7Ctwgr%5ETwitterDev&screen_name=Registrationwla" class=" btn-social  btn-twitter block " data-size="large" data-show-count="true">
         <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" enable-background="new 0 0 112.197 112.197" viewBox="0 0 112.197 112.197">
            <circle cx="56.099" cy="56.098" r="56.098" fill="#55acee"></circle>
            <path fill="#f1f2f2" d="M90.461,40.316c-2.404,1.066-4.99,1.787-7.702,2.109c2.769-1.659,4.894-4.284,5.897-7.417    c-2.591,1.537-5.462,2.652-8.515,3.253c-2.446-2.605-5.931-4.233-9.79-4.233c-7.404,0-13.409,6.005-13.409,13.409    c0,1.051,0.119,2.074,0.349,3.056c-11.144-0.559-21.025-5.897-27.639-14.012c-1.154,1.98-1.816,4.285-1.816,6.742    c0,4.651,2.369,8.757,5.965,11.161c-2.197-0.069-4.266-0.672-6.073-1.679c-0.001,0.057-0.001,0.114-0.001,0.17    c0,6.497,4.624,11.916,10.757,13.147c-1.124,0.308-2.311,0.471-3.532,0.471c-0.866,0-1.705-0.083-2.523-0.239    c1.706,5.326,6.657,9.203,12.526,9.312c-4.59,3.597-10.371,5.74-16.655,5.74c-1.08,0-2.15-0.063-3.197-0.188    c5.931,3.806,12.981,6.025,20.553,6.025c24.664,0,38.152-20.432,38.152-38.153c0-0.581-0.013-1.16-0.039-1.734    C86.391,45.366,88.664,43.005,90.461,40.316L90.461,40.316z"></path>
         </svg>
         Follow us on Twitter
      </a>
   </div>
   <div class="text-white">
      <a href="https://www.youtube.com/c/registrationwala/?sub_confirmation=1" class="btn-youtube block" data-size="large" data-show-count="true">
         <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 512 512">
            <path fill="#D42428" d="M7.9 256C7.9 119 119 7.9 256 7.9S504.1 119 504.1 256 393 504.1 256 504.1 7.9 393 7.9 256z"></path>
            <path fill="#CC202D" d="M431.4 80.6c96.9 96.9 96.9 254 0 350.8-96.9 96.9-254 96.9-350.8 0L431.4 80.6z"></path>
            <path fill="#BA202E" d="M499.1 305.7L376.3 182.9l-144.8 16.5L143.9 335l163.7 163.7c96.2-20.4 171.9-96.5 191.5-193z"></path>
            <path fill="#FFF" fill-rule="evenodd" d="M385.8 208.1c0-20.8-16.8-37.6-37.6-37.6H171.6c-20.8 0-37.6 16.9-37.6 37.6v101c0 20.8 16.8 37.7 37.6 37.7h176.5c20.8 0 37.6-16.9 37.6-37.7v-101zm-151.1 93.1v-94.8l71.9 47.4-71.9 47.4z" clip-rule="evenodd"></path>
         </svg>
         Subscribe us on Youtube
      </a>
   </div>
</section>
<div class="dotted-line"></div>
<section class="p2">
   <h4 class="h3 bold mb2">Blog Search</h4>
   <form class="serach-wraper" method="GET" action="/" target="_top">
             <input type="search" placeholder="Search..." name="search"  class="serachinput  p0 m0" on="input-debounced:AMP.setState({query: event.value}),compresult.show"
          [value]="query || ''">
             <input type="submit" value="Search">
         </form>
         <div id="compresult" class="compresult list-group" hidden="">
            <amp-list width="auto" height="100" layout="fixed-height" [src]="'/amp/search-amp-post?title='+query">
               <template type="amp-mustache" id="autosuggest-list" >
                  <amp-selector class="autosuggest-box" id="autosuggest-selector" keyboard-select-mode="focus" layout="container" on="select:AMP.setState({query: event.targetOption}),compresult.hide">
                    @{{#results}} 
                    <div on="tap:compresult.hide" option="@{{title}}" tabindex="0" role="option">
                     <a href="/amp/{{__('voyager::post.post_slug')}}@{{category.slug}}/@{{service.slug}}/@{{slug}}">@{{title}}</a>
                    </div>
                    @{{/results}}
                    @{{^results}}
                    <div class="" role="option"> Sorry! @{{query}} 😰</div>
                    @{{/results}}
                   </amp-selector>
               </template>
            </amp-list>
         </div>
</section>
<div class="dotted-line"></div>
@if($archivelists)
<section class="mt3 mb3 p2">
   <h4 class="h3 bold mb-3">Archive</h4>
   <amp-accordion disable-session-states animate>
      @foreach ($archivelists as $_year => $_months)
      <section>
         <h4 class="p2 bold">{{ $_year }}</h4>
         <amp-accordion class="nested-accordion" animate>
            @foreach ( $_months as $_month => $_entries )
            <section >
               <h4 class="p1" >{{ $_month.' '.$_year }}</h4>
               <ul class="list-reset p2">
                  @foreach($_entries as $_entry)
                  <li class="mb1"><a href="{{url('amp/' .__('voyager::post.post_slug').$_entry->category->slug.'/'.$_entry->service->slug.'/'.$_entry->slug)}}">{{ $_entry->title }}</a></li>
                  @endforeach
               </ul>
            </section>
            @endforeach
         </amp-accordion>
      </section>
      @endforeach
   </amp-accordion>
</section>
@endif
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