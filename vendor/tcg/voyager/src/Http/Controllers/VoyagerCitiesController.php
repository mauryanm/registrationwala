<?php

namespace TCG\Voyager\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use App\Imports\CityImport;
use Maatwebsite\Excel\Facades\Excel;

class VoyagerCitiesController extends Controller
{
    public function index()
    {
        // Check permission
        $this->authorize('browse', Voyager::model('City'));

        return Voyager::view('voyager::city.index');
    }

    public function import(Request $request) 
    {
        Excel::import(new CityImport,$request->import);

        // \Session::put('success', 'Your file is imported successfully in database.');
           
        return \Redirect::back()->with('success', 'Your file is imported successfully in database.');
    }
}
