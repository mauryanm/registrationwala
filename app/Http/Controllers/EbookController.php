<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use App\Ebook;

class EbookController extends Controller
{
    public function index()
    {
        $ebooks = Ebook::where('status',1)->get(); 
        return Voyager::view('ebook.index')->with(compact('ebooks'));
    }
    public function ebookdownload(Request $request)
    {
         $this->validate($request, [
            'name'              => 'required',           
            'email'             => 'required|email:rfc,dns',
            'phone'             => 'required|digits_between:5,15', 
            'service'           => 'required',          
        ]);
         $mail_arry=array(
            'to'=>$request->input('email'),
            'from_name'=> setting('admin.title'),
            'from'=>setting('admin.email'),
            'subject'=>'E-Book | Registrationwala.com',
            'message'=>$this->ebookfile($request)
        );
       $this->sendmail($mail_arry);
        return redirect()->back();
    }
    private function ebookfile($data){
        $texts='<table width="100%" cellpadding="0" cellspacing="0">
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
        <h1 style="margin:8px; padding-left:25px; font-size:40px; font-weight:300; text-transform:uppercase; color:#00293c; font-family:\'Times New Roman\', Times, serif">E-BOOK !</h1>
        <p style="padding-left:25px; margin:8px; text-transform:uppercase; font-size:13px;">MASTER THE ART OF BUSINESS!</p>
        </td></tr>
        <tr><td style="padding:0">
        <img src="https://www.registrationwala.com/images/emailer/ebookrwbg.jpg" height="215" width="483" style="height:auto; width:100%" alt="Grow with us" />
        </td></tr>
        <tr><td style="padding:10px 20px; background-color:#00293c; color:#fff;" bgcolor="#00293c">
        <p style="padding-left:10px; margin:0">Dear '.$data->name.',</p>
        </td></tr>
        <tr><td>
        <table width="100%" cellpadding="0" cellspacing="0">
        <tr><td style="padding:10px 20px;">
        <p style="margin:10px 0; text-align:justify; color:#030000; line-height:24px;">Thanks for requesting your E-Book on '.$data->source.'. Click below link to download your E-book.</p>
        </td></tr>

        <tr><td style="padding:10px 20px;">
        <p style="margin:10px 0; color:#030000; text-align:center;"><a href="'.route('download').'" style="display:inline-block; text-decoration:none; color:#fff; background:#f52900; padding:12px 50px;">Download Now</a></p>
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
        </table>';
return $texts;
    }
}
