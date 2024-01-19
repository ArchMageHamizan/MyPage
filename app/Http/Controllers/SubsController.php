<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SubsController extends Controller
{
    function loadSubs($nameSubss) //recieve argument from subscriber.blade.php
    {
//        This return view form controller + pass data to view
//        "nameSubs" before "=>" is reference towards var that being used in subscriber.blade.php. 
//        So both name must be same.
          $listTicket=["Platinium","Gold","Silver","Bronze"];
          return view("subscriber",['nameSubsq'=>$nameSubss,'tickets'=>$listTicket]); 
    }
 
}

