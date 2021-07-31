<?php
  
namespace App\Traits;
  
use Illuminate\Http\Request;
  
trait MailakmTrait {
  
    /**
     * @param Request $request
     * @return $this|false|string
     */
    public function sendMail($mailer_arr ) {
  
        

      $EmailTo = strip_tags($mailer_arr['to']);
      $EmailFrom = strip_tags($mailer_arr['from']);
      $EmailFromNmae = strip_tags($mailer_arr['from_name']);
      $EmailSubject = $mailer_arr['subject'];
      $EmailMessage = stripslashes($mailer_arr['message']);
      $EmailCc = strip_tags((isset($mailer_arr['cc'])?$mailer_arr['cc']:''));
      $EmailBcc = strip_tags((isset($mailer_arr['bcc'])?$mailer_arr['bcc']:''));
      $filepath = (isset($mailer_arr['file_path'])?$mailer_arr['file_path']:'');
      $filename = (isset($mailer_arr['file_name']) ? $mailer_arr['file_name'] : basename($filepath));
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
  
}