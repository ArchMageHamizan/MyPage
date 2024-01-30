<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function addComplain(Request $req){
        $data=$req->input('email');// accept only email data key.
        $req->session()->flash('email',$data);//use flash session
        return redirect('about');

    }
}
