<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use \App\Choose;
use \App\Lead;
use \App\City;
// use Mail;
// use Config;
use Illuminate\Support\Str;

class AmpWebController extends Controller
{
	public function index($url=null, $city=null)
	{
		if($url){
            if(Str::contains($url, '.map') || $url=='css' || $url=='js') return;
			$data = Voyager::model('Service')->where('slug',$url)->whereStatus(1)->with('category')->with([
                'posts' => function($query) {
                     $query->take(3);
                }
            ])->first();
            if(!$data){abort(404, 'Page not found.');}
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
				return Voyager::view('amp.service')->with(compact('data','wcu','otherservices'));
			}else{
				abort(404, 'Page not found.');
			}
		}else{
            abort(404);
        }
		
	}

    
    public function servicelist(Request $request){
    	$service = Voyager::model('Service')->select('title','id')->where('category_id',$request->input('id'))->get();
    	return response()->json(compact('service'));
    }

    public function rwposts(){
    	$wcu = Choose::where('status',1)->orderBy('created_at','DESC')->get();
    	$data = collect();
        $archivelists = $this->archivelist();
        
    	$data->letest = Voyager::model('Post')->where('status','PUBLISHED')->orderBy('publish_date','DESC')->take(9)->with('category')->with('service:title,blog_slug as slug,id')->get()->makeHidden(['body','meta_description','meta_keywords']);
    	$data->seo_title = 'Registrationwala Knowledge-base - Business Registrations | IPR Services | Taxation.';
    	$data->meta_description = 'Registrationwala is legal knowledgebase for entrepreneurs in india to providing legal knowledge about business registrations, ipr services , taxation and startups';
    	$data->meta_keywords = 'business registrations, ipr services , taxation and startups';
    	$categoryList = $this->categorylist();
    	$categoryPost = Voyager::model('Category')->has('posts')->with('catposts')->with('catposts.service:id,blog_slug as slug,title,heading')->get()->map(function($query) {
    $query->setRelation('catposts', $query->catposts->take(2));
    return $query;
});


    	return Voyager::view('amp.blog.index')->with(compact('data','wcu','categoryList','categoryPost','archivelists'));
    }
    public function rwpostcategory($category_url){
    	$wcu = Choose::where('status',1)->orderBy('created_at','DESC')->get();
    	$data = collect();
    	$categoryPost = Voyager::model('Category')->where('slug',$category_url)->with('postservices:title,blog_slug as slug,category_id,id')->first();
    	if($categoryPost){    	
	    	$data->seo_title = $categoryPost->blog_title;
	    	$data->meta_description = $categoryPost->blog_description;
	    	$data->meta_keywords = $categoryPost->blog_keywords;
	    	$categoryList = $this->categorylist();
		    }else{
		    	abort(404, 'Page not found.');
		    }
            $archivelists = $this->archivelist();

    	return Voyager::view('blogCategory')->with(compact('data','wcu','categoryList','categoryPost','archivelists'));
    }
    public function rwpostservice($category_url,$service_url){
    	$wcu = Choose::where('status',1)->orderBy('created_at','DESC')->get();
    	$data = collect();
    	$catQuery = Voyager::model('Service')->where('blog_slug',$service_url)->whereHas('category', function ($query) use($category_url) {
                return $query->where('slug', $category_url);
            });
    	if($catQuery->count()>0){
    		$catData = $catQuery->select('id','blog_slug as slug', 'title', 'heading','category_id','blog_title','blog_description','blog_keywords')->first();
	    	$data->seo_title = $catData->blog_title;
            $data->meta_description = $catData->blog_description;
            $data->meta_keywords = $catData->blog_keywords;
	    	$categoryList = $this->categorylist();

	    	$posts = Voyager::model('Post')->where('service_id',$catData->id)->published()->paginate(10);
		    }else{
		    	abort(404, 'Page not found.');
		    }
            $archivelists = $this->archivelist();

    	return Voyager::view('blogSubCategory')->with(compact('data','wcu','categoryList','catData','posts','archivelists'));
    }
    public function rwpost($category_url,$service_url, $url){

    	$data = Voyager::model('Post')->where('slug',$url)->published()
        ->whereHas('service', function ($query) use($service_url) {
                return $query->where('blog_slug', $service_url)->select('title','blog_slug as slug','id');
            })
        ->whereHas('category', function ($query) use($category_url) {
                return $query->where('slug', $category_url);
            })
        ->with('service:id,title,heading,blog_slug as slug')
        ->with('category:id,name,slug')
        ->first();

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
        $links = Voyager::model('Post')->select('id','title','slug','publish_date','category_id','service_id')
        ->published()
    ->with('service:title,blog_slug as slug,id')
    ->with('category')
    ->orderBy('publish_date','DESC')
    ->get();
    if($links){
        $ardata = array();
            foreach($links as $row)
            {
                $year = date('Y', strtotime($row['publish_date']));
                $month = date('F', strtotime($row['publish_date']));
                
                $ardata[$year][$month][] = $row;
            }
        return $ardata;
    }else{
        return $links;
    }
    }


    public function searchcompany(Request $request, $city=null)
    {
        $url = $request->route()->getName();
        if($url){
            if(Str::contains($url, '.map') || $url=='css' || $url=='js') return;
            $data = Voyager::model('Service')->where('slug',$url)->with('category')->with([
                'posts' => function($query) {
                     $query->take(3);
                }
            ])->first();
            if(!$data){abort(404, 'Page not found.');}
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
                return Voyager::view('services.searchcompany')->with(compact('data','wcu','otherservices'));
            }else{
                abort(404, 'Page not found.');
            }
        }
    }
    public function searchPost(Request $request)
    {
        // $posts = Voyager::model('Post')
        //         ->where('title','like',"%{$request->title}%")
        //         ->select('id','title','slug','publish_date','category_id','service_id')
        //         ->published()
        //         ->with('service:title,blog_slug as slug,id')
        //         ->with('category')
        //         ->orderBy('publish_date','DESC')
        //         ->take(10)
        //         ->get();
        // return response()->json($posts);
        $posts = Voyager::model('Post')
                ->where('title','like',"%{$request->title}%")
                ->select('id','title','slug','service_id','category_id')
                ->published()
                ->with('service:blog_slug as slug,id')
                ->with('category:slug,id')
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
