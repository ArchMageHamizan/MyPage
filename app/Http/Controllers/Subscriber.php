<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
 
class Subscriber extends Controller
{
   public function helloController($userName)
   {
    echo "Hello {$userName} from Hamizan";
   }
}