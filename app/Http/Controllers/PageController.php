<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

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
}