<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function store(Request $request){
        $admin = $request->all();
      
     
        if(Auth::guard('admin')->attempt(['email'=>$admin['email'], 'password'=>$admin['password']])){
            //    dd(session()->all());

            return redirect()->route('admin.dashboard');
        }
        else{
            return redirect()->route('admin_login_form');
        }
    }
    public function adashboard(){
       
        return view('admin.dashboard');
    }
    public function destroy(){
        Auth::guard('admin')->logout();
        // dd(session()->all());
        return redirect()->route('admin_login_form');
    }
}
