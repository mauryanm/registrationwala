            <?php
/*$curl = curl_init();

curl_setopt_array($curl, array(
 CURLOPT_URL => "https://cdn.syndication.twimg.com/widgets/followbutton/info.json?screen_names=Registrationwla",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => "",
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "GET",
 CURLOPT_HTTPHEADER => array(
   "cache-control: no-cache",
   "postman-token: 769d4f9b-7415-ad25-e06e-b04fb05094ee"
 ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);*/
function get_twitter_count($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);       

    $data = curl_exec($ch);
    curl_close($ch);
	$data=json_decode($data);
    return $data;
}
$twcount=get_twitter_count("https://cdn.syndication.twimg.com/widgets/followbutton/info.json?screen_names=Registrationwla");
$ytscount=get_twitter_count("https://www.googleapis.com/youtube/v3/channels?part=statistics&id=UC99xCarIiulzbP68z2VQPRg&key=AIzaSyBCEK2zCWga931ug117VbwY9WAH_HaXU64");
?>
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
            <div class="fb-page" data-href="https://www.facebook.com/registrationwala" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
              <blockquote cite="https://www.facebook.com/registrationwala" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/registrationwala">Registrationwala</a></blockquote>
            </div>
            <div class="side-bar"> <!-- <a href="javascript:popupwindow('https://www.facebook.com/registrationwala', 'Subscribe on Registrationwla', 600, 400)" class="btn btn-social btn-block btn-facebook text-right"><i class="fa fa-facebook"></i><strong class="pull-left">187,555</strong> Subscribe us on <strong>Facebook</strong></a> -->
              <a href="javascript:void(0)" onclick="popupwindow('https://twitter.com/intent/follow?original_referer={{url('/')}}knowledge-base&region=follow_link&screen_name=Registrationwla', 'Follow up Registrationwla', 600, 400)" class="btn btn-social btn-block btn-twitter text-right" rel="nofollow"><i class="fa fa-twitter"></i><strong class="pull-left">
                @if(isset($twcount))
              <?= $twcount[0]->followers_count?>
              @endif
              </strong>Follow us on <strong>Twitter</strong></a> <a href="javascript:void(0)" onclick="popupwindow('https://www.youtube.com/channel/UC99xCarIiulzbP68z2VQPRg?sub_confirmation=1', 'Subscribe on Registrationwla', 600, 400)" class="btn btn-social btn-block btn-youtube text-right"><i class="fa fa-youtube-play"></i><strong class="pull-left">
                @if(isset($ytscount->items))
              <?= $ytscount->items[0]->statistics->subscriberCount?>
              @endif
              </strong> Subscribe us on <strong>YouTube</strong></a>
              <div class="bg-white mb-5">
                <h5 class="mb-0 mt-4">Blog Search</h5>
                <hr>
                <div class="input-group">
                  <input type="search" id="blogsearch" class="form-control" placeholder="Search this blog">
                  <div class="input-group-append">
                    <button class="btn btn-secondary" id="blogsearchbtn" type="button"> <i class="fa fa-search"></i> </button>
                  </div>
                </div>
                <ul class="navbar-nav pl-3" id="blogsearchlist"></ul>
              </div>
              @dd($archivelists)
              @if($archivelists)
              <h5 class="mb-0 mt-4"> Archive</h5>
              <hr>
              <div id="archive">
                <div class="card">
                  @foreach ($archivelists as $_year => $_months)
                    
                  <div class="card-header"> <span class="icon-mb-0 text-bold"> <a role="button" data-toggle="collapse" href="#archive{{ $_year }}" aria-expanded="true"> {{ $_year }}</a> </span> </div>
                  <div id="archive{{ $_year }}" class="collapse {{ ($loop->first?'show':'') }}" data-parent="#archive">
                    @foreach ( $_months as $_month => $_entries )
                      
                    <div id="Jan">
                        <div class="card-header"> <span class="icon-mb-0">
                        <a class="collapsed" role="button" data-toggle="collapse" href="#{{ $_month.$_year }}" aria-expanded="false"> {{ $_month.' '.$_year }} </a> </span> </div>
                        <div id="{{ $_month.$_year }}" class="collapse" data-parent="#Jan">
                          <ul>
                            @foreach($_entries as $_entry)
                            <li><a  href="{{url( __('voyager::post.post_slug').$_entry->category->slug.'/'.$_entry->service->slug.'/'.$_entry->slug)}}">{{ $_entry->title }} </a></li>
                            @endforeach
                          </ul>
                        </div>
                      </div>
                      @endforeach
                    
                  </div>
                  @endforeach
                  
                  
                </div>
              </div>
              @endif
            </div>
            @section('script')
            <script>
              $(document).ready(function(){
                $("#blogsearch, #blogsearchbtn").on('keyup',function(){
                  $.ajax({
                    url: "/search-post",
                    dataType: 'json',
                    type: 'get',
                    data: {title:$(this).val()},
                    success: function(data)
                    {
                      $('#blogsearchlist').html("");
                        $.each(data, function(key, value) {
                          $('#blogsearchlist').append(
                            '<li class="nav-item border-bottom"> <a class="nav-link" href="{{url( __('voyager::post.post_slug'))}}/'+value.category.slug+'/'+value.service.slug+'/'+value.slug+'">'+value.title+' </a> </li>'
                          );
                      });
                    },
                    error: function(data)
                    {
                      $('html').css('cursor', 'default');
                      alert('Something went wrong.')
                    }
                });
                })
              })
              function popupwindow(url, title, w, h) {
                wLeft = window.screenLeft ? window.screenLeft : window.screenX;
                wTop = window.screenTop ? window.screenTop : window.screenY;
                var left = wLeft + (window.innerWidth / 2) - (w / 2);
                var top = wTop + (window.innerHeight / 2) - (h / 2);
                return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
              }
            </script>

            @endsection