<div class="dotted-line mt2 mb2"></div>
<h4 class=" h3 justify-center center bold mb3">Categories</h4>
<amp-accordion class="accordion" animate>
   @foreach($categoryList as $list)
   <section {{($loop->first?'expanded':'')}}>
      <h4 class="menu h4 bold p2 "> {{$list->name}}</h4>
      <div class="light-border p2">
         <ul>
            @foreach($list->services as $srvc)
            <li class="mb1"><a href="/amp/{{ __('voyager::post.post_slug') }}{{$list->slug}}/{{$srvc->slug}}">{{$srvc->title}}</a></li>
            @endforeach
         </ul>
      </div>
   </section>
   @endforeach
</amp-accordion>