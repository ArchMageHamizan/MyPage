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
    function showData($id){ //fetch data from table and display at form
        return Game::find($id); //find column named 'id'
    }
    function updateData($id){ //enable the fetched data being edit.
        return Game::find($id); //find column named 'id'
   }
    //==========================================================================
}
