<!-- other service -->
<section class="section">
  <div class="container">
    <h2 class="font-weight-bold mb-1 h3"> Other Services </h2>
    <div class="divider-1"> <span></span></div>
    <div class="carousel-wrap clients">
      <div id="services" class="owl-carousel ">
        @foreach($otherservices as $serve)
        <div class="item p-0 text-center ">
          <div class="h-100">
            <div class="tag-overlay"><a href=""><img class="card-img" src="{{$serve->page_image?(Voyager::image($serve->page_image)):'/images/bis.jpg'}}" alt="company"></a></div>
            <div class="price-services mb-1"> @if($serve->price)<strong class="bold">  Price Starts </strong> @ RS {{number_format(($serve->price))}} / @endif &nbsp;</div>
            <div class="card-body pt-2">
              <h4 class="card-title h5"> <a href="/{{$serve->slug}}">{{$serve->title}}</a></h4>
              <a href="/{{$serve->slug}}" class="btn btn-sm btn-outline-dark  center-block w-50 mt-2">Read more</a></div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
<!-- other serviceend --> 