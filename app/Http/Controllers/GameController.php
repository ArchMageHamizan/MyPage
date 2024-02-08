<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game; //use Game Model
class GameController extends Controller
{
    
    // Show data with pagination =============================================
    function displayList(){
        $data=Game::paginate(4);
        return view('game',['gameList'=>$data]);
    }
    // Show data with pagination =============================================

    //delete technique =======================================================
    function deleteData($id){
        $data=Game::find($id); //find column named 'id'
        $data->delete();
        return redirect('game');
    }
    //=========================================================================

    //update technique ========================================================
    //1. fetch data from table and display at form
    function showData($id){ 
        $data=Game::find($id); //find column named 'id'
        return view('updateGame',['gameUpdateList'=>$data]);
    }
   //2. Any changes made at form , changes the data from table as well  
    function updateData(Request $req){ //enable the fetched data being edit.
//         return Game::find($id); //find column named 'id'
        return $req->input();
   }
    //==========================================================================     
}
