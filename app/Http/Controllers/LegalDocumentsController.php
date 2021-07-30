<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use App\DocCategory;
use App\LegalDocument;
class LegalDocumentsController extends Controller
{
    public function index()
    {
        $doccat = DocCategory::with('docs:id,doc_category_id,title,heading,slug')->orderBy('id','desc')->get();
        return Voyager::view('legaldocument.index')->with(compact('doccat'));
    }
    public function docpages($url)
    {
        $document = LegalDocument::whereSlug($url)->firstOrFail();
        return Voyager::view('legaldocument.view')->with(compact('document'));
    }
    public function docedit($url)
    {
        $document = LegalDocument::whereSlug($url)->firstOrFail();
        return Voyager::view('legaldocument.edit')->with(compact('document'));
    }
    public function docdownload(Request $request)
    {
        $this->validate($request, [
            'name'              => 'required',           
            'email'             => 'required|email:rfc,dns',
            'phone'             => 'required|digits_between:5,15', 
            'service'           => 'required',          
        ]);
        \Log::info($request->all());
        return redirect()->back()->withSuccess('Thank you for choosing registrationwala. Download link also send  to your mail. This link valid for 10 days.')->withInput();
    }
}
