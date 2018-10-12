<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
      /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        $user = "";
        return view('auth.admin-login')->with('user', $user);
    }

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout','adminLogout');
    }
    
    protected function guard()
    {
        return Auth::guard('admin');
    }
    
    use AuthenticatesUsers;
    protected $redirectTo = '/admin/dashboard';
   
    public function adminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }


}