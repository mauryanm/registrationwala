<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Ticket;

class CreateTicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::where('site_user_id',\Auth::user()->id)->get();
        return view('dashboard.createticket', compact('tickets'));
    }
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'subject'              => 'required',           
            'query'                => 'required',           
        ]);
        if ($validator->fails())
        {
            return \Redirect::back()->withErrors($validator)->withInput();
        }
        $data = $request->except('_token','_method');
        $data['site_user_id'] = \Auth::user()->id;
        $data['status'] = 0;
        $insdata = Ticket::create($data);
        return redirect('dashboard/create-ticket')->withSuccess('Ticket genrated successfully! your ticket number is RWT'.sprintf("%'05d", $insdata->id));
    }
}
