<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Config;
use Illuminate\Support\Str;
use \App\Lead;
// use App\Http\Requests;
// use App\Http\Controllers\Controller;

class MailController extends Controller {
    public function sendmail(Request $request)
    {
      // ini_set('max_execution_time', 0);
      
       // Config::set('mail.mailer', 'sendmail');
       // Config::set('mail.host', $request->input('txt_smtp_server'));
       // Config::set('mail.username', $request->input('txt_username'));
       // Config::set('mail.password', $request->input('txt_password'));
       // Config::set('mail.from_address', $request->input('txt_from_email'));
       // Config::set('mail.from_name', $request->input('txt_from_name'));
       // if($request->has('txt_ssl')) Config::set('mail.encryption', "ssl");
       // else Config::set('mail.encryption', "tls");

       
       try{
            Mail::send([], [], function($message) use($request) {
            $message->to('ajaymaurya.it@gmail.com')->subject
               ('Registrationwala Test Message');
            $message->from('ajju.ghatak@gmail.com','RW');
            $message->setBody('<p>This is an email message sent automatically by Kommtrace while testing the settings for your account.</p>', 'text/html');
         });
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
        $insData = Lead::create($data);

            $response = array('type' => 'success',"title"=>"",'msg'=>'Test email sent successfully.');
            return response()->json($response);

         }catch(\Swift_TransportException $e){
            $response = array('type' => 'error',"title"=>"",'msg'=>$e->getMessage());
            return response()->json($response);
         }

      
    }

   
}