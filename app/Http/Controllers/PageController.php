<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Http;

class PageController extends Controller {
    public function index(Request $request)
    {
        $url = $request->route()->getName();
        $data = Voyager::model('Page')->where('slug',$url)->where('status','ACTIVE')->first();
        if($data){
           return Voyager::view('page')->with(compact('data')); 
       }else{
        abort(404, 'Page not found.');
       }

        
    }

    public function videos()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
         CURLOPT_URL => "https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=UC99xCarIiulzbP68z2VQPRg&maxResults=50&key=AIzaSyBCEK2zCWga931ug117VbwY9WAH_HaXU64",
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

        curl_close($curl);

        if ($err) {
         echo "cURL Error #:" . $err;
        } else {
            $videoList = json_decode($response);
        }
        \Log::info($videoList);

        $response = Http::get('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=UC99xCarIiulzbP68z2VQPRg&maxResults=50&key=AIzaSyBCEK2zCWga931ug117VbwY9WAH_HaXU64');

        $jsonData = $response->json();
        \Log::info($response);
        \Log::info($jsonData);
    }
}