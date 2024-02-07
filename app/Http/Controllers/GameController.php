<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game; //use Game Model
class GameController extends Controller
{
    function displayList(){
        $data=Game::paginate(4);
        return view('game',['gameList'=>$data]);
    }
    function deleteData($id){
        $data=Game::find($id);//find column named 'id'
        $data->delete();
        return redirect('game');
    }
    function updateData($id){
         return Game::find($id);//find column named 'id'
         
    }
}
