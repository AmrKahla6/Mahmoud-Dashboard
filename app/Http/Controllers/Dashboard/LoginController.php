<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{

    public function loginView(){
        return view('dashboard.auth.login');
    }
    
      /**
     * Login Function
     */
    public function Login(LoginRequest $request)
    {
        if(!auth()->guard('admin')->attempt(['email' => $request->email , 'password' => $request->password ]))
        {
            session()->flash('error', __("user.error_credentials"));
            return redirect()->back();
        }
            session()->flash('success', __('user.succes_login'));
            return redirect(route('home'));
    }

     /**
     * Logout Function
     */

    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect(route('admin.login-view'));
    }

}
