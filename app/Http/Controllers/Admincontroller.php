<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbl_admin;

class Admincontroller extends Controller
{
    public function index()
    {
        return view('frontend.indexAdmin');
    }
    public function log_out()
    {
        session()->forget('admin');
        $url=url('log-out');
        return view('frontend.auth-login')->with(compact('url'));
    }
    public function auth_register()
    {
        return view('frontend.auth-register');

    }
    public function admin_auth(Request $request)
    {
        $email=$request->input('email');
        $password=$request->input('password');

        $admin=Tbl_admin::where(['admin_name'=>$email,'admin_password'=>$password])->count();
        if($admin>0)
        {
            session(['admin' =>   $email]);
            return redirect('admin');
        }
        else
        {
            return redirect()->back();
        }

    }
}
