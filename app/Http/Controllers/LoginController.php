<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function getData(Request $req)
    {
        $req->validate([
            'username'=>'required | min:5' ,
            'password'=>'required | min:5' 
    ]);// Take array as parameter

        $data=$req->input();
        $req->session()->put('user',$data['username']);//1. put the data into specific key 2.we stored the key data into session
        return redirect('about');
    }
}
 