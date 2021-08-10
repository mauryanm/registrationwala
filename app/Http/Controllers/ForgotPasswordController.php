<?php 
  
namespace App\Http\Controllers; 
  
use Illuminate\Http\Request; 
use DB; 
use Carbon\Carbon; 
use App\Models\SiteUser; 
use Mail; 
use Hash;
use Illuminate\Support\Str;
  
class ForgotPasswordController extends Controller
{
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function showForgetPasswordForm()
      {
         return view('dashboard.forgetPassword.index');
      }
  
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function submitForgetPasswordForm(Request $request)
      {
          $request->validate([
              'email' => 'required|email|exists:site_users',
          ]);
  
          $token = Str::random(64);
  
          DB::table('password_resets')->insert([
              'email' => $request->email, 
              'token' => $token, 
              'created_at' => Carbon::now()
            ]);
          $mail=array(
            'to'=>$request->email,
            'from_name'=>setting('admin.title'),
            'from'=>setting('admin.email'),
            'subject'=>'Reset Password | Registrationwala.com',
            'message'=>'<h1>Forget Password Email</h1>   
                        You can reset password from bellow link:
                        <a href="'.route('dashboard.reset.password.get', $token).'" style="display:inline-block; text-decoration:none; color:#fff; background:#f52900; padding:12px 50px;">Reset Password</a>'
        );
       $this->sendMail($mail);
  
          // Mail::send('dashboard.forgetPassword.forgetpasswordlink', ['token' => $token], function($message) use($request){
          //     $message->to($request->email);
          //     $message->subject('Reset Password');
          // });
  
          return back()->with('message', 'We have e-mailed your password reset link!');
      }
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function showResetPasswordForm($token) { 
         return view('dashboard.forgetPassword.forgetPasswordLink', ['token' => $token]);
      }
  
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function submitResetPasswordForm(Request $request)
      {
          $request->validate([
              'email' => 'required|email|exists:site_users',
              'password' => 'required|string|min:6|confirmed',
              'password_confirmation' => 'required'
          ]);
  
          $updatePassword = DB::table('password_resets')
                              ->where([
                                'email' => $request->email, 
                                'token' => $request->token
                              ])
                              ->first();
  
          if(!$updatePassword){
              return back()->withInput()->with('error', 'Invalid token!');
          }
  
          $user = SiteUser::where('email', $request->email)
                      ->update(['password' => Hash::make($request->password)]);
 
          DB::table('password_resets')->where(['email'=> $request->email])->delete();
  
          return redirect('dashboard/login')->withSuccess('Your password has been changed!');
      }
}