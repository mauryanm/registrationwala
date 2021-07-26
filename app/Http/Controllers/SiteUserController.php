<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Lead;
use \App\SiteUser;
use \App\Ticket;

class SiteUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:siteuser');
    }
    public function index()
    {
        
        if(\Auth::user()->type=='associate') return redirect('/dashboard/associate');
        return view('dashboard.index');
    }
    public function servicerequest(){
        $services = Lead::where('email',\Auth::user()->email)->where('source','service')->with('service:id,title,status')->get();
        return view('dashboard.servicerequest',compact('services'));
    }
    public function paynow()
    {
        return view('dashboard.paynow');
    }
    public function paymenthistory()
    {
        return view('dashboard.paymenthistory');
    }
    public function update(Request $request,$id)
    {
        $user = SiteUser::findOrFail(\Auth::user()->id);
        \Log::info($user);
        if($user->type == 'associate'){
            $this->validate($request, [
                'compname'  => 'required',
                'address'   => 'required',
                'experience'=> 'required',
                'expertise' => 'required',
            ],[
                'compname.required'  =>'Name of the firm is required.',
            ]);
            $data = $request->except('_token','_method','profile');
            $user->fill($data)->save();
            return redirect('/dashboard/associate')->with('success', 'Congratulations '.$user->name.'
Thank you for signing up for Registrationwala’s Associate program. Here are your details:');
        }
        if($request->input('profile')=="profile"){
            $data = $request->except('_token','_method','profile');
            $user->fill($data)->save();
        }else if($request->input('profile')=="password"){
            $this->validate($request, [
                'password' => 'required',
                'new_password' => 'confirmed|max:12|min:4|different:password',
            ],[
                'new_password.different'  =>'The new password and old password must be different',
            ]);

            if (\Hash::check($request->password, $user->password)) { 
               $user->fill([
                'password' => \Hash::make($request->new_password)
                ])->save();

            }
        }else if($request->input('profile')=="image"){
            if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $validated = $request->validate([
                    'image' => 'mimes:jpeg,png|max:1014',
                ]);
                $extension = $request->image->extension();
                $name = $user->id.'_'.time().'.'.$extension;
                $imagePath = storage_path('app/public/'.$user->image);
                if(\Storage::disk('public')->exists($user->image)){
                    unlink($imagePath);
                }
                $request->image->storeAs('/public/siteuser', $name);
                $user->image = '/siteuser/'.$name;
                $user->save();
                }
            }

        }else{
            return redirect('/dashboard')->with('warning', 'Some thing went wrong please try again!');
        }

        return redirect('/dashboard')->with('success', 'Successfully updated!');
    }
    public function ticket()
    {
        $tickets = Ticket::where('site_user_id',\Auth::user()->id)->get();
        return view('dashboard.createticket', compact('tickets'));
    }
    public function storeticket(Request $request)
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
    public function associate()
    {
        return view('dashboard.associate.index');
    }
}
