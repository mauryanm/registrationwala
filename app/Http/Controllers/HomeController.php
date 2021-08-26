<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use \App\PeopleSay;
use \App\HomeService;

class HomeController extends Controller
{
    public function index()
    {
    	$wps = PeopleSay::where('status',1)->get();
    	$letestBlog = Voyager::model('Post')->where('featured',1)->where('status','PUBLISHED')->limit(3)->with('service:title,blog_slug as slug,id')->with('category')->orderBy('publish_date','desc')->get();
    	$homeService = HomeService::get();
    	foreach ($homeService as $key => $value) {
    		if($value->type=="SERVICE"){
    			$value->servicesl = Voyager::model('Service')->select('title','slug','id')->whereIn('id',json_decode($value->service_id))->get();
    			$value->servicesr = Voyager::model('Service')->select('title','slug','id')->whereIn('id',json_decode($value->service2_id))->get();
    		}
    		if($value->type=="POST"){
    			$value->servicesl = Voyager::model('Post')->where('service_id',(json_decode($value->service_id)[0]))->with('service:title,blog_slug as slug,id')->with('category')->limit(2)->orderBy('created_at','desc')->get();
    			$value->servicesr = Voyager::model('Post')->where('service_id',(json_decode($value->service2_id)[0]))->with('service:title,blog_slug as slug,id')->with('category')->limit(2)->orderBy('created_at','desc')->get();
    			$value->catr = $value->servicesr[0]->service->title; 
    			$value->catrslug = $value->servicesr[0]->category->slug.'/'.$value->servicesr[0]->service->slug;
    			$value->catl = $value->servicesl[0]->service->title; 
    			$value->catlslug = $value->servicesl[0]->category->slug.'/'.$value->servicesl[0]->service->slug; 
    		}
    	}
    	$hmsr = $homeService->where('type','SERVICE')->all();
    	$hmpt = $homeService->where('type','POST')->all();
    	return Voyager::view('welcome')->with(compact('wps','letestBlog','hmsr','hmpt'));
    }
	public function searchservice(Request $request)
	{
		$posts = Voyager::model('Service')
                ->where('title','like',"%{$request->title}%")
                ->orWhere('heading','like',"%{$request->title}%")
                ->select('id','title','heading','slug')
                ->orderBy('title','DESC')
                ->take(10)
                ->get();
        return response()->json($posts);
	}
    public function amp()
    {
        $wps = PeopleSay::where('status',1)->get();
        $letestBlog = Voyager::model('Post')->where('featured',1)->where('status','PUBLISHED')->limit(3)->with('service:title,blog_slug as slug,id')->with('category')->orderBy('publish_date','desc')->get();
        $homeService = HomeService::get();
        foreach ($homeService as $key => $value) {
            if($value->type=="SERVICE"){
                $value->servicesl = Voyager::model('Service')->select('title','slug','id')->whereIn('id',json_decode($value->service_id))->get();
                $value->servicesr = Voyager::model('Service')->select('title','slug','id')->whereIn('id',json_decode($value->service2_id))->get();
            }
            if($value->type=="POST"){
                $value->servicesl = Voyager::model('Post')->where('service_id',(json_decode($value->service_id)[0]))->with('service:title,blog_slug as slug,id')->with('category')->limit(2)->orderBy('created_at','desc')->get();
                $value->servicesr = Voyager::model('Post')->where('service_id',(json_decode($value->service2_id)[0]))->with('service:title,blog_slug as slug,id')->with('category')->limit(2)->orderBy('created_at','desc')->get();
                $value->catr = $value->servicesr[0]->service->title; 
                $value->catrslug = $value->servicesr[0]->category->slug.'/'.$value->servicesr[0]->service->slug;
                $value->catl = $value->servicesl[0]->service->title; 
                $value->catlslug = $value->servicesl[0]->category->slug.'/'.$value->servicesl[0]->service->slug; 
            }
        }
        $hmsr = $homeService->where('type','SERVICE')->all();
        $hmpt = $homeService->where('type','POST')->all();
        return Voyager::view('amp.index')->with(compact('wps','letestBlog','hmsr','hmpt'));
    }
    public function searchampservice(Request $request)
    {
        // $posts = Voyager::model('Service')
        //         ->where('title','like',"%{$request->title}%")
        //         ->orWhere('heading','like',"%{$request->title}%")
        //         ->select('id','title','heading','slug')
        //         ->orderBy('title','DESC')
        //         ->take(10)
        //         ->get();
        // \DB::connection()->enableQueryLog();
        $posts = Voyager::model('Service')
                ->where('title','like',"%{$request->title}%")
                ->orWhere('heading','like',"%{$request->title}%")
                ->select('id','title','heading','slug')
                ->take(10)
                ->orderByRaw("
                    CASE
                        WHEN title LIKE '{$request->title}' THEN 1
                        WHEN title LIKE '{$request->title}%' THEN 2
                        WHEN title LIKE '%{$request->title}%' THEN 3
                        WHEN title LIKE '%{$request->title}' THEN 4
                        ELSE 5
                    END
                    ")
                ->get();
                
        if($posts->count()>0){
        // $data['items']['query']=$request->title;
        $data['items'][]['results']=$posts;
        }else{
            $data['items'][]['query']='Result not found';
        }
        return response()->json($data);
    }
}
