<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    
  
   public function index(){
       
       
        return view('login.master.home');
       
    }
    public function  postLogin(Request $request){
        
        $login = [
            'user_name' =>$request->username,
            'password' =>$request->password,
            ];
            
            if(Auth::attempt($login)){
                var_dump(Auth::check());
            }else
            {
                echo 'login that bai';
                var_dump(Auth::check());
            }
       
            //return redirect()->route('home')->with(['flash_level'=>'fail','flash_message'=>'Tên Đăng Nhập Hoặc mật khẩu không đúng ']);
        
    }
    
    public function registered(UserRequest $request){
        $user = new Admin;
        $user->user_name = $request->username;
        $user->password = bcrypt($request->password);
        $user->user_email = $request->email;
        $user->user_phone = $request->phone;
        $user->user_level = 1;
        $user->save();
        return redirect()->route('home')->with(['flash_level'=>'success','flash_message'=>'Đăng Ký Thành Công ! Vui Lòng Login ']);
    }
}
