<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use App\SiteUser;
use \App\Choose;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Socialite;
use Exception;

use App\Http\Controllers\Auth\LoginController as DefaultLoginController;

class SiteUserController extends DefaultLoginController
{
    protected $redirectTo = '/dashboard/login';
    public function __construct()
    {
        $this->middleware('guest:siteuser')->except('logout');
    }
    public function showLoginForm()
    {
        return view('dashboard.login.index');
    }
    public function username()
    {
        return 'siteuser_id';
    }
    protected function guard()
    {
        return Auth::guard('siteuser');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::guard('siteuser')->attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
        return redirect("/dashboard/login")->withSuccess('Login details are not valid');
    }
    public function registration()
    {
        return view('dashboard.register');
    }
    public function registeruser(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:site_users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }
    public function create(array $data)
    {
      return SiteUser::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
    public function logout(Request $request)
    {
        //$this->saveLogoutTime($request);
        // $this->clearPrevSession();

        $this->guard()->logout();
        $request->session()->invalidate();
        //$request->session()->regenerateToken();
        return $this->loggedOut($request) ?: redirect('/dashboard');
    }

    private function clearPrevSession(){
        \Auth::user()->session_id = '';
        \Auth::user()->save();
    } 

    private function resetMaxCount(){
        \Auth::user()->invalide_attempt_count = 0;
        \Auth::user()->save();
    } 

    public function redirectToFB()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleCallback()
    {
        try {
     
            $user = Socialite::driver('facebook')->user();
      
            $finduser = SiteUser::where('facebook_id', $user->id)->first();
            \Log::info($finduser);
      
            if($finduser){
      
                Auth::login($finduser);
     
                return redirect('/dashboard');
      
            }else{
                $newUser = SiteUser::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id'=> $user->id,
                    // 'social_type'=> 'facebook',
                    'password' => encrypt('rw@123')
                ]);
     
                Auth::login($newUser);
      
                return redirect('/dashboard');
            }
     
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
