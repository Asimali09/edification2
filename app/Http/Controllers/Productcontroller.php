<?php

namespace App\Http\Controllers;
use App\Models\contactus;
use App\Models\citymodel;
use App\Models\universitymodel;

use Illuminate\Http\Request;

class Productcontroller extends Controller
{
    public function insertuser(Request $req)
    {
      $pro = new contactus();
      $pro->first_name=$req->first_name;
      $pro->last_name=$req->last_name;
      $pro->email=$req->email;
      $pro->phone=$req->phone;
      $pro->comments=$req->comments;
      $pro->save();
      return redirect()->back();
    }
    public function index()
    {
     $fetch = contactus::all();
     return view('form',compact('fetch'));
    }

    public function adduniversity()
    {
      $city = citymodel::all();
      $university = universitymodel::all();
      return view("adduniversity",compact('university','city'));
    }


}
