
<div id="blogsidebar">
  <h4 class="mb-0"> <i class="fa fa-list" aria-hidden="true"></i> Categories</h4>
  <div class="bottom-radius">
    <div class="list-group border-0  text-center pre-scrollable text-md-left">
      <div id="sidebarcategores" class="accordion">
        <div class="card mb-0">
          @foreach($categoryList as $list)
          <div class="card-header bg-white collapsed" data-toggle="collapse" href="#{{$list->slug}}"> <a class="card-title"> <i class="fa fa-briefcase" aria-hidden="true"></i> <span >{{$list->name}}</span> </a> </div>
           <div id="{{$list->slug}}" class="card-body p-0 collapse" data-parent="#sidebarcategores" >
            <ul class="navbar-nav">
              <li class="nav-item"> <a class="nav-link" href="/{{ __('voyager::post.post_slug') }}{{$list->slug}}">{{$list->name}} </a> </li>
              @foreach($list->services as $srvc)
              <li class="nav-item"> <a class="nav-link" href="/{{ __('voyager::post.post_slug') }}{{$list->slug}}/{{$srvc->slug}}">{{$srvc->title}} </a> </li>
              @endforeach                     
            </ul>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
     