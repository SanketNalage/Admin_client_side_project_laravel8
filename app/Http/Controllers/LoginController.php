<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    function adminlogin(Request $request){
        $validateadmin=$request->validate([
            'admin_email'=>'required|email',
            
            'admin_pass'=>'required|min:3|max:10'
                    ]);
            
            $admin_email =$request->admin_email;
            $admin_pass = $request->admin_pass;
            $data = DB::select("select * from admins where admin_email='{$admin_email}' AND admin_pass='{$admin_pass}' ");
            $gata =count($data);
            if($gata==1){
                $request->session()->put('admin_email', $admin_email);
    
                $request->session()->put('admin_pass', $admin_pass);
                return redirect('/admin_dashboard');
            }
            else
            {
                return "Unathorised user!!!";
            }
                }
    function logout(){
        session()->pull('admin_email');
        session()->pull('admin_pass');
        return redirect('/admin_login');
    }
            
}
            