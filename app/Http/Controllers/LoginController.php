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
        $req->session()->put('username',$data['username']);
        echo session('username');
    }
}
 