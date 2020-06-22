<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index(){
        return view("auth.login");
    }
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        
        if (Auth::guard('user')->attempt($credentials)) {

           // dd('đăng nhập thành công');
           $user = Auth::user();
           if($user->role=="admin"){
             return redirect()->route("admin.dashboard");
           }else{
             return redirect()->route("home");
           }
            
        } else {
            return redirect()->route("auth.login",["error"=>"Invalid username or password!"]);
        }
    }
}
