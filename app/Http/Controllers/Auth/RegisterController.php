<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\UserInformation;

class RegisterController extends Controller
{
    function index(){
        return view("auth.register");
    }
    function store(Request $request){
        $validatedData = $request->validate([
            'username' => 'required|unique:users|max:50',
            'password' => 'required|min:5',
        ]);
        $username = $request->username;
        $password = $request->password;
        $name = $request->name;
        $phone = $request->phone;
        $address = $request->address;
        $hashPassword=Hash::make($password);
        $user = new User();
        $user->username=$username;
        $user->password=$hashPassword;
        $user->save();
        $inforUser = new UserInformation();
        $inforUser->user_id=$user->id;
        $inforUser->name=$name;
        $inforUser->address=$address;
        $inforUser->phone_number=$phone;
        $inforUser->save();
        return redirect("auth/login");
    }
}
