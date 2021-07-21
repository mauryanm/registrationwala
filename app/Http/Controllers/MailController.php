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

    //    mail("ajaymaurya.it@gmail.com","Registrationwala","Mail bhejat bani.");
      //  try{
      //       Mail::send([], [], function($message) use($request) {
      //       $message->to('ajaymaurya.it@gmail.com')->subject
      //          ('Registrationwala Test Message');
      //       $message->from('ajju.ghatak@gmail.com','RW');
      //       $message->setBody('<p>This is an email message sent automatically by Kommtrace while testing the settings for your account.</p>', 'text/html');
      //    });
      //   $validator = \Validator::make($request->all(), [
      //       'name'=> 'required',
      //       'email' => 'required|email',
      //       'phone' => 'nullable',
      //   ]);
      //   if ($validator->fails())
      //   {
      //       return response()->json(['type'=>'error',"title"=>"",'msg'=>$validator->errors()->all()]);
      //   } 

      //   $data = $request->except('_token','_method');
      //   $data['status'] = 0;
      //   $insData = Lead::create($data);

      //       $response = array('type' => 'success',"title"=>"",'msg'=>['Test email sent successfully.']);
      //       return response()->json($response);

      //    }catch(\Swift_TransportException $e){
      //       $response = array('type' => 'error',"title"=>"",'msg'=>$e->getMessage());
      //       return response()->json($response);
      //    }
      $mail_arry=array(
			'to'=>$request->email,
			'from_name'=>(($fname)? setting('admin.title'),
			'from'=>(($femail)?$femail:$PDO->getSingleresult("select email from #_setting where `pid`='1'")),
			'subject'=>'We are happy to help you ! Registrationwala.com',
			'message'=>enquiry($_POST['name'],$_POST['serviceName'],$udata['rwi'])
		);

      
    }
    private function send_mail($mailer_arr){

      $EmailTo = strip_tags($mailer_arr['to']);
      $EmailFrom = strip_tags($mailer_arr['from']);
      $EmailFromNmae = strip_tags($mailer_arr['from_name']);
      $EmailSubject = $mailer_arr['subject'];
      $EmailMessage = stripslashes($mailer_arr['message']);
      $EmailCc = strip_tags($mailer_arr['cc']);
      $EmailBcc = strip_tags($mailer_arr['bcc']);
      $filepath = $mailer_arr['file_path'];
      $filename = $mailer_arr['file_name'] ? $mailer_arr['file_name'] : basename($filepath);
      $eol = PHP_EOL;
      $headers = "";
      if( !empty($EmailFromNmae) ){
      if( !empty($EmailFrom) )
      $headers  .= "From: ".$EmailFromNmae.'<'.$EmailFrom.'>'.$eol; 
      }else{
      if( !empty($EmailFrom) )
      $headers  .= "From: ".$EmailFrom.$eol; 
      }
      if( !empty($EmailFrom) )
      $headers .= "Reply-To: ". $EmailFrom .$eol;
      if( !empty($EmailCc) )
      $headers .= "CC: ".$EmailCc.$eol;
      if( !empty($EmailBcc) )
      $headers .= "BCC: ".$EmailBcc.$eol;
      $headers .= "MIME-Version: 1.0".$eol; 
      if( !isset( $mailer_arr['file_path'] ) || $mailer_arr['file_path'] == '' ){ 
      $headers .= "Content-type: text/html".$eol;
      if(mail($EmailTo, $EmailSubject, $EmailMessage, $headers)) 
      return true;
                     else 
                     return false;
      
      }
      $attachment = chunk_split( base64_encode(file_get_contents($filepath)) );
      $separator = md5(time());  
      $headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";
      $body = "";
      $body .= "--".$separator.$eol;
      $body .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
      $body .= "Content-Transfer-Encoding: 7bit".$eol.$eol;//optional defaults to 7bit
      $body .= $EmailMessage.$eol;
      // attachment
      $body .= "--".$separator.$eol;
      $body .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
      $body .= "Content-Transfer-Encoding: base64".$eol;
      $body .= "Content-Disposition: attachment".$eol.$eol;
      $body .= $attachment.$eol;
      $body .= "--".$separator."--";
      // send message
      if (mail($EmailTo, $EmailSubject, $body, $headers,'-f'.$EmailFrom)) {
      return true;
      }
      else {
      return false;
      }
   }
   private function welcome(){
      $mailhtml = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml">
      <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Untitled Document</title>
      </head>
      
      <body>
      <table width="100%" cellpadding="5" cellspacing="0" style="max-width:550px; margin:auto; font-family:Verdana, Geneva, sans-serif; font-size:14px; line-height:24px; border:1px solid #ccc; color:#1b1b1b; background-color:#F4F4F4;" >
        <tr>
          <td align="center" style=" background-color:#fff; padding:10px 30px;  "><img src="https://www.registrationwala.com/images/emailer/campaigning/logo.png" /></td>
        </tr>
        <tr>
          <td align="left" style="padding:10px 30px; background-color:#1b1b1b; color:#FFF; text-align:center; border-top:solid #fff 1px; text-transform:uppercase;"><h1>Welcome to Registrationwala.com!</h1></td>
        </tr>
        <tr>
          <td style="padding:10px 30px; text-align:justify; "><p>We are glad to welcome you in the Registrationwala.com family. Registrationwala.com is an association of financial experts who strive to provide the exemplary financial and legal services to the clients.</p>
            <p>Accounting and taxation has always been one of the major concerns for the business entities and the individual entrepreneurs. With Registrationwala.com the accounting and taxation related procedures have become much easier. Some of the services we provide at Registrationwala.com are as follows-</p>
            <ul style=" margin:0px 0px 0px 15px;  padding:0px;">
              <li> VAT related services.</li>
              <li> Excise related services.</li>
              <li> Book Keeping.</li>
              <li> Regular Accounting.</li>
              <li> Bulk Accounting outsourcing.</li>
              <li> VAT accounting.</li>
            </ul>
            <h2>Why Choose Registrationwala.com</h2>
            <ul style="list-style:none; margin:0px; padding:0px;">
              <li>1. Expert Team</li>
              <li>2. Tech Driven</li>
              <li>3. Transparency and Confidentiality</li>
              <li>4. On time support</li>
            </ul>
            <p>In order to check out and avail our exclusive services you can visit our website <a href="http://www.Registrationwala.com.com/"> www.Registrationwala.com.com</a> So hurry up to get all your taxation and accounting related work done with utmost efficiency and at rapid speed.</p>
            <p>For any guidance feel free to reach us at <a href="mailto:support@Registrationwala.com.com">support@Registrationwala.com.com</a> or contact us @  +971565915186</p>
            <div>We look forward to hear from you soon! <br />
              <strong>Regards,<br />
              Team Registrationwala.com</strong></div></td>
        </tr>
          </td>
        
      </table>
      </body>
      </html>
      ';
      return $mailhtml;
   }

   
}