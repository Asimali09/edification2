<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registermodel;
use DB;

class usercontroller extends Controller
{
    public function index()
    {
        return view("index");
    }
    public function register()

{
          return view('register');

}


public function layouts()

{
          return view('layouts');

}



public function form()

{
          return view('form');

}
public function universities()

{
          return view('universities');

}


















public function registerpost(Request $req)
{
          $user = new registermodel;
          $user->name = $req->name;
          $user->email = $req->email;
          $user->phone = $req->phone;
          $user->password = $req->password;
          $user->role = $req->role;
          $user->save();
            return redirect()->back()->with("message",'Registered');
}

public function signin()
{
    return view('login');
}

public function signinpost(Request $req)
{
    $email = $req->loginemail;
    $pass = $req->loginpassword;
    $login = DB::table("registermodels")->select('name','role','id')->where(["email"=>$email, "password"=>$pass])->first();
    if($login != "")
    {
        if($login->role == 1)
        {
            session(['username'=>$login->name]);
            session(['userid'=>$login->id]);
            return redirect("index");
        }

        else if($login->role == 2)
        {
            session(['adminname'=>$login->name]);
            if(session("adminname")!="")
            {
                
                return redirect("form");
            }
            else{
               
            }
        }
        
    }
    else{
        return redirect()->back()->with('error',"Either Email or Password is Incorrect");
    }
    
}

public function logout()
{
    session()->forget('username');
    session()->forget('adminname');
    return view('login');
}

}




