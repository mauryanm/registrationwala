<section class="section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ">
        <h2 class="font-weight-bold mb-1 h3">The brands we assist</h2>
        <div class="divider-1"> <span></span></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="carousel-wrap clients">
          <div id="owl" class="owl-carousel ">
            @foreach(\App\Client::where('status','1')->where('positio',1)->get() as $client)
            <div class="item"><img src="{{Voyager::image($client->image)}}" alt="{{Voyager::image($client->name)}}"></div>
            @endforeach
          </div>
        </div>
        <div class="carousel-wrap clients mt-3">
          <div id="owl1" class="owl-carousel ">
            @foreach(\App\Client::where('status','1')->where('positio',2)->get() as $client2)
            <div class="item"><img src="{{Voyager::image($client2->image)}}" alt="{{Voyager::image($client2->name)}}"></div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>