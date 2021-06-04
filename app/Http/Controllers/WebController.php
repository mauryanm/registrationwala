<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use \App\Choose;
use \App\lead;
use \App\City;


class WebController extends Controller
{
	public function index($url=null, $city=null)
	{
		if($url){
			$data = Voyager::model('Service')->where('slug',$url)->with('category')->with([
                'posts' => function($query) {
                     $query->take(3);
                }
            ])->first();
			$wcu = Choose::where('status',1)->orderBy('created_at','DESC')->get();
            $otherservices =  Voyager::model('Service')->select('id','title','heading','price','slug','page_image')->where('category_id',$data->category_id)->where('status',1)->where('id','!=',$data->id)->orderBy('created_at','DESC')->limit(5)->get();
            
			foreach ($wcu as $key => $value) {
				$value->icon = json_decode($value->image,true)[0]['download_link'];
			}
			if($data){
                $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';

                if($pageWasRefreshed ) {
                   //do something because page was refreshed;
                } else {
                    $data->increment('hits');
                }
                if($city){
                    $citydata = City::where('slug',$city)->where('status',1)->first();
                    if($citydata){
                        $data->heading =$data->heading .' in '.$citydata->name;
                        $data->sub_heading = str_ireplace('in India','in '.$citydata->name,$data->sub_heading);
                        $data->body = str_ireplace('in India','in '.$citydata->name,$data->body);
                        $data->section_1_body = str_ireplace('in India','in '.$citydata->name,$data->section_1_body);
                        $data->section_2_body = str_ireplace('in India','in '.$citydata->name,$data->section_2_body);
                        $data->section_3_body = str_ireplace('in India','in '.$citydata->name,$data->section_3_body);
                        $data->section_4_body = str_ireplace('in India','in '.$citydata->name,$data->section_4_body);
                        $data->section_5_body = str_ireplace('in India','in '.$citydata->name,$data->section_5_body);
                    }else{
                        abort(404, 'Page not found.');
                    }
                }
				return Voyager::view('service')->with(compact('data','wcu','otherservices'));
			}else{
				abort(404, 'Page not found.');
			}
		}
		
	}

	public function leadfrom(Request $request){
		$validator = \Validator::make($request->all(), [
            'name'=> 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
        ]);
        if ($validator->fails())
        {
            return response()->json(['type'=>'error',"title"=>"",'msg'=>$validator->errors()->all()]);
        } 

        $data = $request->except('_token','_method');
        $data['status'] = 0;
        $insData = lead::create($data); 

		$msg = ['Your request submitted successfully!'];
        $type = 'success';
        $title = '';
        return response()->json(compact('msg','type','title'));
	}
    
    public function servicelist(Request $request){
    	$service = Voyager::model('Service')->select('title','id')->where('category_id',$request->input('id'))->get();
    	return response()->json(compact('service'));
    }

    public function rwposts(){
    	$wcu = Choose::where('status',1)->orderBy('created_at','DESC')->get();
    	$data = collect();
        // \Log::info($this->archivelist());
    	$data->letest = Voyager::model('Post')->where('status','PUBLISHED')->orderBy('created_at','DESC')->take(9)->with('category')->with('service:title,blog_slug as slug,id')->get()->makeHidden(['body','meta_description','meta_keywords']);
    	$data->seo_title = 'Registrationwala';
    	$data->meta_description = '';
    	$data->meta_keywords = '';
    	$categoryList = $this->categorylist();
    	$categoryPost = Voyager::model('Category')->has('posts')->with(array('catposts' => function($query) {
           $query->with('service:title,blog_slug as slug,id');
        }))->get();


    	return Voyager::view('blog')->with(compact('data','wcu','categoryList','categoryPost'));
    }
    public function rwpostcategory($category_url){
    	$wcu = Choose::where('status',1)->orderBy('created_at','DESC')->get();
    	$data = collect();
    	$catQuery = Voyager::model('Category')->where('slug',$category_url);
    	if($catQuery->count()>0){
    		$catId = $catQuery->value('id');
	    	
	    	$data->seo_title = 'Registrationwala';
	    	$data->meta_description = '';
	    	$data->meta_keywords = '';
	    	$categoryList = $this->categorylist();
	    	// $categoryPost = Voyager::model('Category')->where('id',$catId)->has('posts')->with(array('catposts' => function($query) {
	     //       $query->with('service:title,blog_slug  as slug,id');
	     //    }))->get();
	    	$categoryPost = Voyager::model('Category')->where('id',$catId)->with(array('services' => function($query) {
	           $query->select('title','blog_slug as slug','category_id','id')->has('posts')->with('posts');
	        }))->first();
		    }else{
		    	abort(404, 'Page not found.');
		    }

    	return Voyager::view('blogCategory')->with(compact('data','wcu','categoryList','categoryPost'));
    }
    public function rwpostservice($category_url,$service_url){
    	$wcu = Choose::where('status',1)->orderBy('created_at','DESC')->get();
    	$data = collect();
    	$catQuery = Voyager::model('Service')->where('blog_slug',$service_url);
    	if($catQuery->count()>0){
    		$catData = $catQuery->with('category')->first();
	    	
	    	$data->seo_title = 'Registrationwala';
	    	$data->meta_description = '';
	    	$data->meta_keywords = '';
	    	$categoryList = $this->categorylist();

	    	$posts = Voyager::model('Post')->where('service_id',$catData->id)->paginate(10);
		    }else{
		    	abort(404, 'Page not found.');
		    }

    	return Voyager::view('blogSubCategory')->with(compact('data','wcu','categoryList','catData','posts'));
    }
    public function rwpost($category_url,$service_url, $url){
    	$data = Voyager::model('Post')->where('slug',$url)->published()->with('service:title,blog_slug as slug,id')->with('category')->first();
    	if($data){
            $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';

            if($pageWasRefreshed ) {
               //do something because page was refreshed;
            } else {
                $data->increment('hits');
            }

    	    $categoryList = $this->categorylist();
    	    return Voyager::view('blogDetail')->with(compact('data','categoryList'));
    	}else{
    		abort(404, 'Page not found.');
    	}
    }

    private function categorylist(){
    	// return Voyager::model('Category')->has('posts')->with('services:title,slug,category_id')->get();
    	return Voyager::model('Category')->has('catposts')->with(array('services' => function($query) {
           $query->select('title','blog_slug as slug','category_id')->has('posts');
        }))->get();

    }
    private function archivelist(){
        $links = Voyager::model('Post')
        ->selectRaw('YEAR(created_at) year, MONTH(created_at) month, MONTHNAME(created_at) month_name, COUNT(*) post_count')
    ->groupBy('year')
    ->groupBy('month')
    ->orderBy('year', 'desc')
    ->orderBy('month', 'desc')
    ->with('service:title,blog_slug as slug,id')
    ->with('category')
    ->get();
    // ->select('*',\DB::raw('YEAR(created_at) year, MONTH(created_at) month, MONTHNAME(created_at) month_name, COUNT(*) post_count'))
    // ->groupBy('year')
    // ->groupBy('month')
    // ->orderBy('year', 'desc')
    // ->orderBy('month', 'desc')
    // ->with('service:title,slug,id')
    // ->with('category')
    // ->get();
    return $links;
    }
}
