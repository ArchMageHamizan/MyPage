<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game; //use Game Model
class GameController extends Controller
{
    function displayList(){
        $data=Game::all();
        return view('game',['gameList'=>$data]);
    }
}
