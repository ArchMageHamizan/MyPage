<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class AddGameControlller extends Controller
{
    function addGame(Request  $req){
        $Game=new Game;
        $Game->name=$req->name;
        $Game->date=$req->date;
        $Game->star=$req->star;
        $Game->category_id=$req->category;
        $Game->save();
        

    }
}
