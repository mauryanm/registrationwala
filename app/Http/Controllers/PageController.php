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
        $response = Http::get('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=UC99xCarIiulzbP68z2VQPRg&maxResults=50&key=AIzaSyBCEK2zCWga931ug117VbwY9WAH_HaXU64');

        $data = $response->json();
        $data->title = 'Our Videos - Registrationwala Videos';
        $data->meta_description = 'Check out our vast video collection. Through youtube videos, Registrationwala aims to educate you about business licenses.';
        $data->meta_keywords = 'Videos';
        return Voyager::view('videos')->with(compact('data')); 


    }
}