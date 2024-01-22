<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BanController extends Controller
{
    function displayBan(){
        $datas=Http::get("https://reqres.in/api/users?page=1");
        return view("ban",["datas"=>$datas['data']]);// "data" here is collection of data in array from api url.
    }
}
