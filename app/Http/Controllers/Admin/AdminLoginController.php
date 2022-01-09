<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminRequest;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function loginPage(){
        return view('pages.admin.login');
    }
    public function checkLogin(AdminRequest $request){

        $email = $request ->input('email');
        $password = $request ->input('password');
        $remember_me =$request->has('remember_me') ? true : false  ;

        if(auth()->guard('admin')->attempt(['email'=>$email,'password'=>$password],$remember_me)){
            return redirect()->route('dashbord');
        }else{
            return redirect()->back()->with(['error'=>'rong_input'])->withInput($request->all());
        };
    }
}
