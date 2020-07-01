<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    function index(){
        return view("auth.login");
    }
    public function login(Request $request){
    $validatedData = $request->validate([
      'username' => 'required',
      'password' => 'required',
  ]);
    {
        $credentials = $request->only('username', 'password');
        
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $user->userinformation;
            if($user->role=="admin"){
              return redirect()->route("admin.dashboard");
            }else{
              return redirect()->route("home");
              echo json_encode($user);
            }
        }
        else{
          return redirect()->route("auth.login",["error"=>"Invalid username or password!"]);
        }  
    }
}
    function logout(){
      Auth::logout();
      return redirect()->route("home");
    }
}