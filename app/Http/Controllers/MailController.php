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
    public function sendleadmail(Request $request)
    {
      
      $validator = \Validator::make($request->all(), [
            'name'  => 'required',
            'email' => 'required|email:rfc,dns',
            'phone' => 'nullable|digits_between:5,15', 
        ]);
        if ($validator->fails())
        {
            return response()->json(['type'=>'error',"title"=>"",'msg'=>$validator->errors()->all()]);
        } 

        $data = $request->except('_token','_method');
        $data['status'] = 0;
        $insData = Lead::create($data);
        $mail_arry=array(
    			'to'=>$request->email,
    			'from_name'=>setting('admin.title'),
    			'from'=>setting('admin.email'),
    			'subject'=>'We are happy to help you ! Registrationwala.com',
    			'message'=>$this->welcome()
    		);
        ////////////////////////////
        $this->sendMail($mail_arry);
        if($request->input('source')=='service'){
          $mail_enq=array(
          'to'=>$request->email,
          'from_name'=>setting('admin.title'),
          'from'=>setting('admin.email'),
          'subject'=>'We are happy to help you ! Registrationwala.com',
          'message'=>$this->serviceEnquiry($insData)
        );
          ///////////////////////////
          $this->sendMail($mail_enq);
        }
        if($request->input('source')=='subscribe'){
          $mail_sub=array(
            'to'=>$request->email,
            'from_name'=>setting('admin.title'),
            'from'=>setting('admin.email'),
            'subject'=>'We are happy to help you ! Registrationwala.com',
            'message'=>$this->subscribe($insData->email)
          );
          //////////////////////////
          $this->sendMail($mail_sub);
        }
      $response = array('type' => 'success',"title"=>"",'msg'=>['Your query has been submitted successfully.']);


      ///////////////////////////////////////////////
      $mail_asupport=array(
            'to'=>setting('admin.email'),
            'from_name'=>$request->input('name'),
            'from'=>$request->input('email'),
            'subject'=>'Service enquery | Registrationwala.com',
            'message'=>$this->supportmail($request->except('_token','_method','page_id'))
        );
       $this->sendMail($mail_asupport);
      ///////////////////////////////////////////////
        return response()->json($response);

      
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
   private function serviceEnquiry($data){
    $srhtml = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" cellpadding="0" cellspacing="0">
<tr><td>
<table style="margin:auto; width:600px; font-size:16px; line-height:24px; font-family:Verdana, Geneva, sans-serif" cellpadding="0" cellspacing="0">
<tr><td>
<table width="100%" cellpadding="5" cellspacing="0">
<tr><td><a href="https://www.registrationwala.com"><img src="https://www.registrationwala.com/images/emailer/logonrw.png" width="109" height="38" alt="Registrationwala.com" /></a></td>
<td align="right"><a style="margin:0 5px;" href="https://www.facebook.com/registrationwala/" target="_blank"><img src="https://www.registrationwala.com/images/emailer/facebookc.png" width="27" height="27" alt="Like On Facebook" /></a><a style="margin:0 5px;" href="https://twitter.com/Registrationwla" target="_blank"><img src="https://www.registrationwala.com/images/emailer/twitterc.png" width="27" height="27" alt="Like On Twitter" /></a><a style="margin:0 5px;" href="https://plus.google.com/u/0/115063389280026230269/posts" target="_blank"><img src="https://www.registrationwala.com/images/emailer/g-plusc.png" width="27" height="27" alt="Like On Google plus" /></a></td></tr>
</table>
</td></tr>
<tr><td>
<table width="100%" cellpadding="15" cellspacing="0">
<tr><td style="border:1px solid #ccc; background:url(https://www.registrationwala.com/images/emailer/drop-mark.png) no-repeat top left 10px;">
<table width="100%" cellpadding="5" cellspacing="0">
<tr><td style="padding:10px 20px;">
<h1 style="margin:8px; padding-left:25px; font-size:40px; font-weight:300; text-transform:uppercase; color:#00293c; font-family:\'Times New Roman\', Times, serif">Inquiry Revert</h1>
<p style="padding-left:25px; margin:8px; text-transform:uppercase; font-size:13px;">Thank You for contacting Registrationwala!</p>
</td></tr>
<tr><td style="padding:0">
<img src="https://www.registrationwala.com/images/emailer/enquery.jpg" height="215" width="483" style="height:auto; width:100%" alt="Thank You for contacting Registrationwala!" />
</td></tr>
<tr><td style="padding:10px 20px; background-color:#00293c; color:#fff;" bgcolor="#00293c">
<p style="padding-left:10px; margin:0">Dear '.$data->name.',</p>
</td></tr>
<tr><td>
<table width="100%" cellpadding="0" cellspacing="0">
<tr><td style="padding:10px 20px;">
<p style="margin:10px 0; text-align:justify;">We are delighted to have an opportunity of receiving a query from your end. The details of the query submitted by you are as follows-</p>
</td></tr>
<tr><td style="padding:0;">
<table width="100%" cellpadding="8" cellspacing="0" border="1" style="border-color:rgba(255, 255, 255, 0.4);">
<tr style="color:#fff"><td width="40%" bgcolor="#f52900">Ticket No</td><td bgcolor="#f52900" width="60%">RWI'.sprintf("%'05d", $data->id).'</td></tr>
<tr><td width="40%" bgcolor="#d7d7d7">Service Name</td><td bgcolor="#d7d7d7" width="60%">'.$data->service->title.'</td></tr>
</table>
</td></tr>
<tr><td style="padding:10px 20px;">
<p style="margin:10px 0; color:#00293c; text-align:justify;">At registrationwala we have a team of experts like charted accountants, company secretaries, lawyers and cost accountants who can provide assistance to you regarding any query. One of our team members will get in touch with you shortly to provide you an expert opinion for the query submitted.</p>
</td></tr>
</table>

</td></tr>
<tr>
<td style="padding:15px 10px; background-color:#00293c;">
<h2 style="color:#fff; margin:0 0 20px 0; padding:0; font-size:18px; text-align:center; text-transform:uppercase;">FOR any guidance feel free to reach us</h2> 
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
<td align="center"><a style="text-decoration:none; color:#fff;" href="mailto:support@registrationwala.com">support@registrationwala.com</a></td><td align="center"><a style="text-decoration:none; color:#fff;" href="tel:+918882580580">+91-888-2580-580</a></td>
</tr>
</table>
</td>
</tr>
</table>
</td></tr>
</table>
</td></tr>
</table>
</td></tr>
</table>
</body>
</html>
';
return $srhtml;
}

  private function subscribe($name){
    return '<table width="100%" cellpadding="0" cellspacing="0">
<tr><td>
<table style="margin:auto; width:600px; font-size:16px; line-height:24px; font-family:Verdana, Geneva, sans-serif" cellpadding="0" cellspacing="0">
<tr><td>
<table width="100%" cellpadding="5" cellspacing="0">
<tr><td><a href="https://www.registrationwala.com"><img src="https://www.registrationwala.com/images/emailer/logonrw.png" width="109" height="38" alt="Registrationwala.com" /></a></td>
<td align="right"><a style="margin:0 5px;" href="https://www.facebook.com/registrationwala/" target="_blank"><img src="https://www.registrationwala.com/images/emailer/facebookc.png" width="27" height="27" alt="Like On Facebook" /></a><a style="margin:0 5px;" href="https://twitter.com/Registrationwla" target="_blank"><img src="https://www.registrationwala.com/images/emailer/twitterc.png" width="27" height="27" alt="Like On Twitter" /></a><a style="margin:0 5px;" href="https://plus.google.com/u/0/115063389280026230269/posts" target="_blank"><img src="https://www.registrationwala.com/images/emailer/g-plusc.png" width="27" height="27" alt="Like On Google plus" /></a></td></tr>
</table>
</td></tr>
<tr><td>
<table width="100%" cellpadding="15" cellspacing="0">
<tr><td style="border:1px solid #ccc; background:url(https://www.registrationwala.com/images/emailer/drop-mark.png) no-repeat top left 10px;">
<table width="100%" cellpadding="5" cellspacing="0">
<tr><td style="padding:10px 20px;">
<h1 style="margin:8px; padding-left:25px; font-size:40px; font-weight:300; text-transform:uppercase; color:#00293c; font-family:\'Times New Roman\', Times, serif">Welcome</h1>
<p style="padding-left:25px; margin:8px; text-transform:uppercase; font-size:13px;">Thank You for signing up with us</p>
</td></tr>
<tr><td style="padding:10px 20px;">
<img src="https://www.registrationwala.com/images/emailer/welcome-bg.jpg" height="215" width="483" style="height:auto; width:100%" alt="Welcome" />
</td></tr>
<tr><td style="padding:10px 20px; background-color:#00293c; color:#fff;" bgcolor="#00293c">
<p style="padding-left:10px; margin:0">Dear '.$name.',</p>
</td></tr>
<tr><td>

<table width="100%" cellpadding="0" cellspacing="0">

<tr><td style="padding:10px 20px;">
<p style="margin:0; color:#00293c;"><strong>Congratulations on taking the first step towards success!</strong></p>
</td></tr>
<tr><td style="padding:10px 20px;">
<p style="margin:0; text-align:justify;">We wholeheartedly welcome you to our family of Registrationwala. Thank you for subscribing to our newsletter. We have received your request for newsletter subscription and we are glad to inform you that we have successfully added your e-mail id to our subscriber\'s list. This newsletter is intended to keep the readers updated about the recent happening in the corporate world.</p>

<p style="margin:0; text-align:justify;">Registrationwala is a leading business consultant platform in India offering the comprehensive solutions for all business requirements.  Our expert team comprises of the charted accountants, company secretary, lawyers and business experts assisting over 15000 clientsyearly to successfully start and run their business. We strive hard to become the ‘partner of choice’ when it comes to incorporating and managing business in India.</p>
<p style="margin:0; text-align:justify;"><strong>What are services offered by Registrationwala?</strong></p>
<p style="margin:0; text-align:justify;">Registrationwala specializes in providing the comprehensive services related to company incorporation, IPR, Accounting and other certifications. Below we have listed out some of the services offered by Registrationwala-</p>
<p style="margin:0; text-align:justify;"><ul>
  <li><a href="https://www.registrationwala.com/company-registration">Company  Registration</a></li>
  <li><a href="https://www.registrationwala.com/trademark-registration">Trademark  Registration</a></li>
  <li><a href="https://www.registrationwala.com/iso-registration">ISO  Certification</a></li>
  <li><a href="https://www.registrationwala.com/dot-osp-registration">DOT OSP  License for BPO</a><a name="_GoBack"></a></li>
  <li><a href="https://www.registrationwala.com/accounting-and-book-keeping">Accounting &amp;  Bookkeeping Services</a> and <a href="https://www.registrationwala.com">More…</a></li>
</ul></p>

</td></tr>
</table>

</td></tr>
<tr>
<td style="padding:15px 10px; background-color:#00293c;">
<h2 style="color:#fff; margin:0 0 20px 0; padding:0; font-size:18px; text-align:center; text-transform:uppercase;">Further, for any queries feel free to write us </h2> 
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
<td align="center"><a style="text-decoration:none; color:#fff;" href="mailto:support@registrationwala.com">support@registrationwala.com</a></td><td align="center"><a style="text-decoration:none; color:#fff;" href="tel:+918882580580">+91-888-2580-580</a></td>
</tr>
</table>
</td>
</tr>
</table>
</td></tr>
</table>
</td></tr>
</table>
</td></tr>
</table>';
  }

   private function rwsupportmail($data){
    $message='';
        foreach ($data as $key => $value){
        $message .= "<tr><td> ".htmlspecialchars($key)."</td><td> ".htmlspecialchars($value)."</td></tr>";
        }

        $html='<table width="100%" cellpadding="5" cellspacing="0" style="max-width:550px; margin:auto; font-family:Verdana, Geneva, sans-serif; font-size:14px; line-height:24px; border:1px solid #ccc; color:#1b1b1b; background-color:#F4F4F4;" >
        <tr><th width="50%"></th><th width="50%"></th></tr>
          <tr><td align="center" style=" background-color:#fff; padding:10px 30px;" colspan="2"><img src="https://www.registrationwala.com/images/emailer/logonrw.png" width="45" height="45" /></td></tr>
          <tr><td align="left" colspan="2" style="padding:10px 30px; background-color:#1b1b1b; color:#FFF; text-align:center; border-top:solid #fff 1px; text-transform:uppercase;"><h1>Welcome to Registrationwala.com!</h1></td></tr>
          '.$message.'
          <tr><td colspan="2"><strong>Regards,<br />
            Team Registrationwala.com</strong></div></td></tr>
        </table>';
        return $html;
    }
}