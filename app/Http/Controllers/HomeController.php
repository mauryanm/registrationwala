<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use \App\PeopleSay;

class HomeController extends Controller
{
    public function index()
    {
    	$wps = PeopleSay::where('status',1)->get();
    	$letestBlog = Voyager::model('Post')->where('featured',1)->where('status','PUBLISHED')->limit(3)->with('service:title,slug,id')->with('category')->get();
    	return Voyager::view('welcome')->with(compact('wps','letestBlog'));
    }
}
