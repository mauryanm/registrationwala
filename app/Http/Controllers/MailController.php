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
    			'subject'=>'Thank you for choosing Registrationwala.com',
    			'message'=>setting('mailer.welcome')
    		);
        ////////////////////////////
        $this->sendMail($mail_arry);


        $mailto=array(
          'to'=>$request->email,
          'from_name'=>setting('admin.title'),
          'from'=>setting('admin.email'),
          'subject'=>'Some one requesting for service.',
          'message'=>'<table width="100%" cellpadding="0" cellspacing="0">
<tr><td>
<table style="margin:auto; width:600px; font-size:16px; line-height:24px; font-family:Verdana, Geneva, sans-serif" cellpadding="5" cellspacing="0">
  <tr><th width="50%"></th><th width="50%"></th></tr>
  <tr><td align="center" style=" background-color:#fff; padding:10px 30px;" colspan="2"><img src="https://www.registrationwala.com/images/emailer/logonrw.png" width="130" height="45" /></td></tr>
  <tr><td align="left" colspan="2" style="padding:10px 30px; background-color:#1b1b1b; color:#FFF; text-align:center; border-top:solid #fff 1px; text-transform:uppercase;"><h1>Welcome to Registrationwala.com!</h1></td></tr><tr><td> source</td><td> service</td></tr><tr><td> page</td><td> RWA Registration</td></tr><tr><td> from</td><td> header</td></tr><tr><td> name</td><td> fgdfg</td></tr><tr><td> email</td><td> ajaymaurya.it@gmail.com</td></tr><tr><td> phone</td><td> 43254365433</td></tr><tr><td> description</td><td> cbxcb</td></tr><tr><td colspan="2"><strong>Regards,<br />Team Registrationwala.com</strong></td></tr>
</table></td></tr></table>'
        );
        \Log::info($mailto);
        $this->sendMail($mailto);
        ////////////////////////////


        if($request->input('source')=='service'){
          $mail_enq=array(
          'to'=>$request->email,
          'from_name'=>setting('admin.title'),
          'from'=>setting('admin.email'),
          'subject'=>'We are happy to help you ! Registrationwala.com',
          'message'=>$this->mailtemplate(['{{$name}}','{{$leadid}}','{{$service}}'],[$insData->name,'RWI'.sprintf("%'05d", $insData->id),$insData->service->title],setting('mailer.enquiry'))
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
            'message'=>$this->rwsupportmail($request->except('_token','_method','page_id'))
        );
       $this->sendMail($mail_asupport);
      ///////////////////////////////////////////////
        return response()->json($response);

      
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
    public function mailbody($data)
    {
      $htmcode = '<table width="100%" cellpadding="5" cellspacing="0" style="max-width:550px; margin:auto; font-family:Verdana, Geneva, sans-serif; font-size:14px; line-height:24px; border:1px solid #ccc; color:#1b1b1b; background-color:#F4F4F4;" >
  <tr><th width="50%"></th><th width="50%"></th></tr>
  <tr><td align="center" style=" background-color:#fff; padding:10px 30px;" colspan="2"><img src="https://www.registrationwala.com/images/emailer/logonrw.png" width="130" height="45" /></td></tr>
  <tr><td align="left" colspan="2" style="padding:10px 30px; background-color:#1b1b1b; color:#FFF; text-align:center; border-top:solid #fff 1px; text-transform:uppercase;"><h1>Welcome to Registrationwala.com!</h1></td></tr>';
  foreach ($data as $key => $value){
  $htmcode .= '<tr><td> '.htmlspecialchars($key).'</td><td> '.htmlspecialchars($value).'</td></tr>';
  }
  $htmcode .= '<tr><td colspan="2"><strong>Regards,<br />Team Registrationwala.com</strong></td></tr>
</table>';
      return $htmcode;
    }
}