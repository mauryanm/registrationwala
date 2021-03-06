<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class SitemapController extends Controller
{
    public function post() {
        $posts = Voyager::model('Category')
        ->select('id','slug','created_at')->has('catposts')
        ->with(array('postservices' => function($query) {
            $query->select('id','category_id','blog_slug as slug','created_at')
            ->with('allpost:id,service_id,slug,publish_date');
        }))
        ->get();
        return response()->view('sitemap.post', ['posts' => $posts])->header('Content-Type', 'text/xml');
    }

    public function service() {
        $services = Voyager::model('Service')->where('status',1)->select('id','slug','created_at')->get();
        $exept =['songs', 'sound-recording','computer-software','logo-copyright-for-goods','logo-copyright-for-service','artistic-painting','cinematography','book','literature-dramatic','music-notation','phrase-slogan','symbol'];
        return response()->view('sitemap.service', ['services' => $services,'exept'=>$exept])->header('Content-Type', 'text/xml');
    }

    public function legaldocs()
    {
        $legaldocs = Voyager::model('LegalDocument')->where('status',1)->select('id','slug','created_at','docdetail')->get();
        return response()->view('sitemap.legaldoc', ['legaldocs' => $legaldocs])->header('Content-Type', 'text/xml');
    }

    // public function rwlocalsitemap()
    // {
    //     $services = Voyager::model('Service')->where('status',1)->select('id','slug','created_at')->get();
    //     $cities = Voyager::model('City')->where('status',1)->select('id','slug','created_at')->get();
    //     $exept =['songs', 'sound-recording','computer-software','logo-copyright-for-goods','logo-copyright-for-service','artistic-painting','cinematography','book','literature-dramatic','music-notation','phrase-slogan','symbol'];
    //     return response()->view('sitemap.rwlocalsitemap', ['services' => $services,'exept'=>$exept,'cities'=>$cities])->header('Content-Type', 'text/xml');
    // }
    // public function sitemaps()
    // {
    //     $posts = Voyager::model('Category')
    //     ->select('id','slug')->has('catposts')
    //     ->with(array('postservices' => function($query) {
    //         $query->select('id','category_id','blog_slug as slug')
    //         ->with('allpost:id,service_id,slug');
    //     }))
    //     ->get();
    //     $sitemap = new \Sitemap(url('/'));
    //     $sitemap->setPath(base_path().'/sitemaps/');
    //     $sitemap->setFilename('knowledge-base');
    //     $sitemap->addItem("/knowledge-base", '0.8', 'weekly', 'Today');
    //         foreach($posts as $post){
    //             $sitemap->addItem('/knowledge-base/'.$post->slug, '0.8', 'weekly', 'Today');   
    //         }
    //     $sitemap->endSitemap();
    // }

    public function rwlocalsitemap()
    {
        $services = Voyager::model('Service')->where('status',1)->select('id','slug','created_at')->count();
        $totalindex = ceil($services/20);
        return response()->view('sitemap.rwlocalsitemap', ['totalindex' => intval($totalindex)])->header('Content-Type', 'text/xml');
    }

    public function localsitemap($index)
    {
        $take = 20;
        $query = Voyager::model('Service')->where('status',1)->select('id','slug','created_at');
        $totalindex = ceil($query->count()/$take);
        $skip = ($index-1)*$take;
        if((1 <= $index) && ($index <= $totalindex)){
            $mapservice = $query->orderBy('id','DESC')->skip($skip)->take($take)->get();
            $cities = Voyager::model('City')->where('status',1)->select('id','slug','created_at')->get();
            $exept =['songs', 'sound-recording','computer-software','logo-copyright-for-goods','logo-copyright-for-service','artistic-painting','cinematography','book','literature-dramatic','music-notation','phrase-slogan','symbol'];
            return response()->view('sitemap.localsitemap', ['services' => $mapservice,'exept'=>$exept,'cities'=>$cities])->header('Content-Type', 'text/xml');
        }else{
            abort(404);
        }       
    }
}
