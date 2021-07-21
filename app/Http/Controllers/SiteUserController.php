<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Lead;

class SiteUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:siteuser');
    }
    public function index()
    {
        return view('dashboard.index');
    }
    public function servicerequest(){
        $services = Lead::where('email',\Auth::user()->email)->where('source','service')->with('service:id,title,status')->get();
        return view('dashboard.servicerequest',compact('services'));
    }
}
