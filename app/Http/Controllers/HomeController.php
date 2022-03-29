<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    //create the redirect fxn
     public function redirect(){

      if (Auth::id()){
          //tries to check if there is any user trying to log in
          //then we check the type of user they are
          if(Auth::user()->usertype == '0'){
              return view('user.home');
          }else{
              return view('admin.home');
          }

      }else{
          return redirect()->back();
      }
     }

     //function that returns the home page template
     public function index(){
        return view('user.home');
     }
}
