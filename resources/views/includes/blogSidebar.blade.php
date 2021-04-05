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
            <div class="side-bar"> <!-- <a href="javascript:popupwindow('https://www.facebook.com/registrationwala', 'Subscribe on Registrationwla', 600, 400)" class="btn btn-social btn-block btn-facebook text-right"><i class="fa fa-facebook"></i><strong class="pull-left">187,555</strong> Subscribe us on <strong>Facebook</strong></a> --> <a href="javascript:popupwindow('https://twitter.com/intent/follow?original_referer={{url('/')}}knowledge-base&region=follow_link&screen_name=Registrationwla', 'Follow up Registrationwla', 600, 400)" class="btn btn-social btn-block btn-twitter text-right" rel="nofollow"><i class="fa fa-twitter"></i><strong class="pull-left">
              <?= ''#$twcount[0]->followers_count?>
              </strong>Follow us on <strong>Twitter</strong></a> <a href="javascript:popupwindow('https://www.youtube.com/channel/UC99xCarIiulzbP68z2VQPRg?sub_confirmation=1', 'Subscribe on Registrationwla', 600, 400)" class="btn btn-social btn-block btn-youtube text-right"><i class="fa fa-youtube-play"></i><strong class="pull-left">
              <?= ''#$ytscount->items[0]->statistics->subscriberCount?>
              </strong> Subscribe us on <strong>YouTube</strong></a>
              <div class="bg-white mb-5">
                <h5 class="mb-0 mt-4">Blog Search</h5>
                <hr>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search this blog">
                  <div class="input-group-append">
                    <button class="btn btn-secondary" type="button"> <i class="fa fa-search"></i> </button>
                  </div>
                </div>
              </div>
              <h5 class="mb-0 mt-4"> Archive</h5>
              <hr>
              <div id="archive">
                <div class="card">
                  <div class="card-header"> <span class="icon-mb-0 text-bold"> <a role="button" data-toggle="collapse" href="#archive2021" aria-expanded="true"> 2021</a> </span> </div>
                  <div id="archive2021" class="collapse show" data-parent="#archive">
                  <div id="Jan">
                      <div class="card-header"> <span class="icon-mb-0">
                       <a class="collapsed" role="button" data-toggle="collapse" href="#Jan2021" aria-expanded="false"> January 2021 </a> </span> </div>
                      <div id="Jan2021" class="collapse" data-parent="#Jan">
                        <ul>
                          <li><a  href="">Details you need to fill in the application for WPC Certificate </a></li>
                          <li><a  href="">Details you need to fill in the application for WPC Certificate </a></li>
                        </ul>
                      </div>
                    </div>
                  
                    <div id="February">
                      <div class="card-header"> <span class="icon-mb-0">
                       <a class="collapsed" role="button" data-toggle="collapse" href="#February2021" aria-expanded="false"> February 2021 </a> </span> </div>
                      <div id="February2021" class="collapse" data-parent="#February">
                        <ul>
                          <li><a  href="">Details you need to fill in the application for WPC Certificate </a></li>
                          <li><a  href="">Details you need to fill in the application for WPC Certificate </a></li>
                        </ul>
                      </div>
                    </div>
                    
                     
                    
                    
                  </div>
                  <!--2020-->
                  <div class="card-header"> <span class="icon-mb-0 text-bold"> 
                  <a role="button" data-toggle="collapse" href="#archive2020" > 2020</a></span> 
                  </div>
                  <div id="archive2020" class="collapse" data-parent="#archive2020">
                    <div id="January">
                      <div class="card-header"> <span class="icon-mb-0"> <a class="collapsed" role="button" data-toggle="collapse" href="#January2020" aria-expanded="false"> January 2020 </a> </span> </div>
                      <div id="January2020" class="collapse" data-parent="#January">
                        <ul>
                          <li><a  href="">Details you need to fill in the application for WPC Certificate </a></li>
                          <li><a  href="">Details you need to fill in the application for WPC Certificate </a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--2020--> 
                  <!--2019-->
                  <div class="card-header"> <span class="icon-mb-0 text-bold"> 
                  <a role="button" data-toggle="collapse" href="#archive2019" > 2019</a></span> 
                  </div>
                  <div id="archive2019" class="collapse" data-parent="#archive2019">
                    <div id="January">
                      <div class="card-header"> <span class="icon-mb-0"> <a class="collapsed" role="button" data-toggle="collapse" href="#January2019" aria-expanded="false"> January 2019 </a> </span> </div>
                      <div id="January2019" class="collapse" data-parent="#January">
                        <ul>
                          <li><a  href="">Details you need to fill in the application for WPC Certificate </a></li>
                          <li><a  href="">Details you need to fill in the application for WPC Certificate </a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--2019--> 
                  
                  <!--2018-->
                  <div class="card-header"> <span class="icon-mb-0 text-bold"> 
                  <a role="button" data-toggle="collapse" href="#archive2018" > 2018</a></span> 
                  </div>
                  <div id="archive2018" class="collapse" data-parent="#archive2018">
                    <div id="January">
                      <div class="card-header"> <span class="icon-mb-0"> <a class="collapsed" role="button" data-toggle="collapse" href="#January2018" aria-expanded="false"> January 2018 </a> </span> </div>
                      <div id="January2018" class="collapse" data-parent="#January">
                        <ul>
                          <li><a  href="">Details you need to fill in the application for WPC Certificate </a></li>
                          <li><a  href="">Details you need to fill in the application for WPC Certificate </a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--2018--> 
                  
                   <!--2017-->
                  <div class="card-header"> <span class="icon-mb-0 text-bold"> 
                  <a role="button" data-toggle="collapse" href="#archive2017" > 2017</a></span> 
                  </div>
                  <div id="archive2017" class="collapse" data-parent="#archive2017">
                    <div id="January">
                      <div class="card-header"> <span class="icon-mb-0"> <a class="collapsed" role="button" data-toggle="collapse" href="#January2017" aria-expanded="false"> January 2017 </a> </span> </div>
                      <div id="January2017" class="collapse" data-parent="#January">
                        <ul>
                          <li><a  href="">Details you need to fill in the application for WPC Certificate </a></li>
                          <li><a  href="">Details you need to fill in the application for WPC Certificate </a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--2017--> 
                  
                      <!--2016-->
                  <div class="card-header"> <span class="icon-mb-0 text-bold"> 
                  <a role="button" data-toggle="collapse" href="#archive2016" > 2016</a></span> 
                  </div>
                  <div id="archive2016" class="collapse" data-parent="#archive2016">
                    <div id="January">
                      <div class="card-header"> <span class="icon-mb-0"> <a class="collapsed" role="button" data-toggle="collapse" href="#January2016" aria-expanded="false"> January 2016 </a> </span> </div>
                      <div id="January2016" class="collapse" data-parent="#January">
                        <ul>
                          <li><a  href="">Details you need to fill in the application for WPC Certificate </a></li>
                          <li><a  href="">Details you need to fill in the application for WPC Certificate </a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--2016--> 
                  
                  
                </div>
              </div>
            </div>