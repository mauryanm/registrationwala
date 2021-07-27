<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ebook;

class EbookController extends Controller
{
    $ebooks = Ebook::paginate(10); 
    return Voyager::view('ebook.index')->with(compact('ebooks'));
}
