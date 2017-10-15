<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Role;
use App\User;
class LoginController extends Controller
{
    
    use AuthenticatesUsers;

    protected $username = 'username';

    
    protected $redirectTo = '/dashboard';

    protected $guard = 'web';

    public function getLogin(){
    	if (Auth::guard('web')->check())
    	{

          
    		 if( Auth::User()->role['name'] == 'Admin' )
                {
                    return Redirect()->route('dashboard');
                }

               if( Auth::User()->role['name'] == 'Staff' )
                {
                      return Redirect()->route('staff_dashboard');
                }
                if( Auth::User()->role['name'] == 'Management' )
                {
                      return Redirect()->route('management_dashboard');
                }

                  if( Auth::User()->role['name'] == 'Doctor' )
                {
                      return Redirect()->route('doctor-dashboard.index');
                }
              
           
    	}
    	return view('login');
    }
    public function postLogin(Request $request)
    {
    	$auth = Auth::guard('web')->attempt(['username'=>$request->username,'password'=>$request->password,'active'=>1]);
    	if($auth)
    	{

            if( Auth::User()->roles[0]['name'] == 'Admin' )
                {
                      return Redirect()->route('dashboard');
                }

               if( Auth::User()->roles[0]['name'] == 'Staff' )
                {
                      return Redirect()->route('staff-dashboard');
                }
       

    		//return redirect()->route('dashboard');
    	}
    	return redirect()->route('/');
    }

    public function getLogout()
    {
    	Auth::guard('web')->logout();
    	return redirect()->route('/'); 
    }
}
