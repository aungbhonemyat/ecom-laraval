<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user=user::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password))
        {
            return "Username or password is incorrect";
        }else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
}
